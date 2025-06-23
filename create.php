<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // ✅ Use prepared statement to avoid SQL errors and security risks
    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success text-center mt-3'>✅ Post added successfully! <a href='index.php' class='btn btn-sm btn-primary'>Go to Posts</a></div>";
    } else {
        echo "<div class='alert alert-danger text-center mt-3'>❌ Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

<div class="card shadow p-4 w-100" style="max-width: 600px;">
    <h3 class="text-center mb-3">📝 Add New Blog Post</h3>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Content:</label>
            <textarea name="content" rows="5" class="form-control" required></textarea>
        </div>

        <div class="d-grid">
            <input type="submit" value="Add Post" class="btn btn-success">
        </div>
    </form>

    <p class="mt-3 text-center"><a href="index.php">⬅️ Back to Posts</a></p>
</div>

</body>
</html>
