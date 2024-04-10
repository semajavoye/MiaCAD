<?php

// Database credentials
$host = 'localhost';
$dbname = 'miacad';
$username = 'miacad';
$password = 'pbBzW4qd3leKUQ28';

try {
    // Establish a secure database connection using PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
    ];
    $pdo = new PDO($dsn, $username, $password, $options);

    // Example query using prepared statement
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(':id', $userId);
    $stmt->execute();
    $user = $stmt->fetch();

    // Do something with the fetched user data

} catch (PDOException $e) {
    // Handle any errors that occur during the database connection or query execution
    echo "Connection failed: " . $e->getMessage();
}