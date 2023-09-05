<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $validUsername = "user123";
    $validPassword = "password123";

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); 
        exit();
    } else {
        $loginError = "Wrong username or password. Please try again.";
    }
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
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <button type="submit" class="btn btn-primary">Login</button>
                <?php
                if (isset($loginError)) {
                    echo "<p class='text-danger'>$loginError</p>";
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>
