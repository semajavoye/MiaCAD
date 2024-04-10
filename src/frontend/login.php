<?php
$title = "Login";
$css_files = array(
    "css/login.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);
include "header.php";
include "../backend/db.php";
?>

<body>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <form action="authenticate.php" method="post">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>

                <a href="register.php">
                    Register
                </a>
                <input type="submit" name="login" value="Login">
            </form>
        </div>
    </div>
</body>

</html>