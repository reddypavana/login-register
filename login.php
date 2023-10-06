<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
// Replace the following with your user authentication logic
$valid_username = "your_valid_username";
$valid_password = "your_valid_password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $valid_username && $password == $valid_password) {
        // Authentication successful
        session_start();
        $_SESSION['username'] = $username;
        header("location: welcome.php"); // Redirect to a welcome page
    } else {
        // Authentication failed
        echo "Invalid username or password. <a href='login.html'>Try again</a>";
    }
}
?>
<?php
session_start();
session_destroy();
header("location: login.html");
?>
