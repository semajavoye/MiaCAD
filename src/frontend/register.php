<?php
$title = "Register";
$css_files = array(
    "css/register.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);
include "header.php";

?>

<body>
    <div class="register">
        <h1>Register</h1>
        <form action="authenticate.php" method="post" autocomplete="off">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="Email" id="email" required>
            <input type="submit" name="register" value="Register">
        </form>
    </div>
</body>

</html>