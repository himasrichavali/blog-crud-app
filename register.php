<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success text-center mt-3'>Registration successful! <a href='login.php' class='btn btn-primary btn-sm'>Click here to login</a></div>";
    } else {
        echo "<div class='alert alert-danger text-center mt-3'>Error: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

<div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-3">📝 User Registration</h3>

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
            <input type="submit" value="Register" class="btn btn-success">
        </div>
    </form>

    <p class="mt-3 text-center">
        Already have an account? <a href="login.php">Login</a>
    </p>
</div>

</body>
</html>
