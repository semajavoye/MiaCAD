<?php
$title = "Dispatch System";
$css_files = array(
    "css/index.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);
include "header.php";
include "../backend/db.php";

session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];


    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $existingUser = $stmt->fetch();

    $title = $existingUser['titel'];
    $firstName = $existingUser['vorname'];
    $lastName = $existingUser['nachname'];
}
?>

<body>
    <div class="container">
        <?php include "page_header.php"; ?>
        <div class="content">
            <h2>MiaCAD - Dispatch System</h2>
            <p>Welcome back, <?php echo $title . " " . $firstName . " " . $lastName; ?>!</p>
            <p>Here you can manage your dispatches.</p>
            <a href="cad.php">Directly go to the CAD System</a>
            <div class="news">
                <h2>News</h2>
                <p>There are no news at the moment.</p>
            </div>
        </div>
    </div>

</body>

</html>