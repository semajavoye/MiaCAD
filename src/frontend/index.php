<?php
$title = "Dispatch System";
$css_files = array(
    "css/index.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);
include "header.php";

session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
?>

<body>
    <div class="container">
        <?php include "page_header.php"; ?>

        <h2>Dispatch System</h2>
        <p>Welcome back, <?php echo  ?>!</p>
        <p>Here you can manage your dispatches.</p>
        <div class="news">
            <h2>News</h2>
            <p>There are no news at the moment.</p>
        </div>
    </div>

</body>

</html>