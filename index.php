<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'db.php';

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Blog App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container p-5">

<h2 class="mb-4">📚 My Blog Posts</h2>

<div class="mb-4">
    <a href="create.php" class="btn btn-success">+ Add New Post</a>
    <a href="logout.php" class="btn btn-outline-secondary float-end">Logout</a>
</div>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
    <div class="card mb-3 shadow-sm">
        <div class="card-body">
            <h4 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h4>
            <p class="card-text"><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
            <small class="text-muted">Posted on: <?php echo $row['created_at']; ?></small><br><br>
            <a href='edit.php?id=<?php echo $row['id']; ?>' class="btn btn-warning btn-sm">Edit</a>
            <a href='delete.php?id=<?php echo $row['id']; ?>' class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
        </div>
    </div>
<?php
    }
} else {
    echo "<p class='alert alert-info'>No posts found.</p>";
}
?>

</body>
</html>
