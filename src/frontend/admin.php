<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    // Redirect to the admin dashboard or any other page
    header("Location: admin_dashboard.php");
    exit;
}

// Check if the login form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password
    if ($username === 'admin' && $password === 'password') {
        // Set the admin session variable
        $_SESSION['admin_logged_in'] = true;

        // Redirect to the admin dashboard or any other page
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Invalid username or password
        $error = "Invalid username or password";
    }
}
?>

<?php
$title = "Admin Login";
include "header.php";
?>

<body>
    <h1>Admin Login</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>