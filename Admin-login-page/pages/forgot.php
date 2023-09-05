<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: recovery_confirmation.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Forgot Password</h2>
            <form action="forgot_password.php" method="POST">
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
        </div>
    </div>
</body>
</html>
