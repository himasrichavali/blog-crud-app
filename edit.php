<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'db.php';

if (!isset($_GET['id'])) {
    echo "No post ID found!";
    exit;
}

$id = $_GET['id'];
$post = null;

$sql = "SELECT * FROM posts WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $post = $result->fetch_assoc();
} else {
    echo "Post not found!";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success text-center mt-3'>Post updated successfully! <a href='index.php' class='btn btn-primary btn-sm'>Go to Posts</a></div>";
        exit;
    } else {
        echo "<div class='alert alert-danger text-center mt-3'>Error updating post: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

<div class="card shadow p-4 w-100" style="max-width: 600px;">
    <h3 class="text-center mb-3">✏️ Edit Blog Post</h3>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($post['title']); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Content:</label>
            <textarea name="content" rows="5" class="form-control" required><?php echo htmlspecialchars($post['content']); ?></textarea>
        </div>

        <div class="d-grid">
            <input type="submit" value="Update Post" class="btn btn-warning">
        </div>
    </form>

    <p class="mt-3 text-center"><a href="index.php">⬅️ Back to Posts</a></p>
</div>

</body>
</html>
