<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform user registration (you should replace this with your own registration logic)
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Replace this with your actual registration logic (e.g., database insert)
    // Ensure that you hash the password securely
    // Example code for password hashing: $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // After successful registration, you can redirect the user to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Include your CSS file -->
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <!-- Your form fields here -->
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
