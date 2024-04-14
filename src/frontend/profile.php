<?php
$title = "Profile";
$css_files = array(
    "css/profile.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);
include "header.php";
include "../backend/db.php";

session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];


    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $existingUser = $stmt->fetch();

    $title = $existingUser['titel'];
    $firstName = $existingUser['vorname'];
    $lastName = $existingUser['nachname'];
    $email = $existingUser['email'];
    $age = $existingUser['geburtsdatum'];
    $age = date_diff(date_create($age), date_create('now'))->y;
}

?>

<body>

    <?php include "page_header.php"; ?>


    <h1>Profile Page</h1>

    <?php
    // Display the user information
    echo '<h2>User Information</h2>';
    echo '<p>Name: ' . $firstName . " " . $lastName . '</p>';
    echo '<p>Email: ' . $email .  '</p>';
    echo '<p>Age: ' . $age . '</p>';

    // You can add more HTML and PHP code here to display additional user information

    ?>


</body>

</html>