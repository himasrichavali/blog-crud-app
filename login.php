<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            echo "<div class='alert alert-success text-center mt-3'>Login successful! <a href='index.php' class='btn btn-primary btn-sm'>Go to Blog</a></div>";
            exit;
        } else {
            echo "<div class='alert alert-danger text-center mt-3'>Incorrect password.</div>";
        }
    } else {
        echo "<div class='alert alert-danger text-center mt-3'>User not found.</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

<div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-3">🔐 User Login</h3>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="d-grid">
            <input type="submit" value="Login" class="btn btn-primary">
        </div>
    </form>

    <p class="mt-3 text-center">
        Don't have an account? <a href="register.php">Register</a>
    </p>
</div>

</body>
</html>
