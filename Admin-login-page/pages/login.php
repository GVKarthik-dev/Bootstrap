<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform user authentication (you should replace this with your own authentication logic)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace this with your actual authentication logic (e.g., database queries)
    $validUsername = "user123";
    $validPassword = "password123";

    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // Redirect to the dashboard or another authenticated page
        exit();
    } else {
        $loginError = "Wrong username or password. Please try again.";
    }
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
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <!-- Your form fields here -->
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
