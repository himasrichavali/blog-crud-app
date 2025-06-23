<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';

if (!isset($_GET['id'])) {
    echo "No post ID provided!";
    exit;
}

$id = $_GET['id'];
$sql = "DELETE FROM posts WHERE id = $id";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

<div class="card shadow p-4 text-center" style="width: 100%; max-width: 400px;">

<?php
if ($conn->query($sql) === TRUE) {
    echo "<h4 class='mb-3'>🗑️ Post Deleted Successfully!</h4>";
    echo "<a href='index.php' class='btn btn-primary'>Go Back to Posts</a>";
} else {
    echo "<div class='alert alert-danger'>Error deleting post: " . $conn->error . "</div>";
}
?>

</div>

</body>
</html>
