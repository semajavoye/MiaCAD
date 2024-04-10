<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        // Handle login form submission
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['name'] = $user['name'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['id'] = $user['id'];
            header("Location: index.php");
            exit;
        } else {
            echo "Login failed.";
        }
    } elseif (isset($_POST["register"])) {
        // Handle registration form submission
        $email = trim($_POST["email"]);
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $title = $_POST["title"];
        $firstName = trim($_POST["vorname"]);
        $lastName = trim($_POST["nachname"]);
        $birthdate = $_POST["geburtsdatum"];
        $gender = $_POST["gender"];
        $nationality = $_POST["nationality"];
        $phoneNumber = trim($_POST["telefonnummer"]);
        $street = trim($_POST["strasse"]);
        $city = trim($_POST["ort"]);
        $postalCode = trim($_POST["plz"]);

        // Check if username already exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $existingUser = $stmt->fetch();

        if ($existingUser) {
            echo "Username already exists.";
        } else {
            // Insert new user into the database
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (email, username, password, role, vorname, nachname, titel, geburtsdatum, geschlecht, nationalitaet, telefonnummer, strasse, ort, plz) 
                                   VALUES (:email, :username, :password, 'user', :firstName, :lastName, :title, :birthdate, :gender, :nationality, :phoneNumber, :street, :city, :postalCode)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':birthdate', $birthdate);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':nationality', $nationality);
            $stmt->bindParam(':phoneNumber', $phoneNumber);
            $stmt->bindParam(':street', $street);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':postalCode', $postalCode);
            $stmt->execute();

            echo "Registration successful. You can now login.";
        }
    } else {
        echo "Invalid form submission.";
    }
}
