<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the password recovery request here
    // Send a password reset email or perform the necessary actions
    // Redirect the user to a confirmation page or the login page
    header("Location: recovery_confirmation.php");
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
            <h2>Forgot Password</h2>
            <form action="forgot_password.php" method="POST">
                <!-- Your form fields here -->
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
        </div>
    </div>
</body>
</html>
