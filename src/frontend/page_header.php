<?php
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


<header>
    <link rel="stylesheet" href="css/page_header.css">
    <nav class="navtop">
        <div>
            <h1><a href="./">MiaCAD</a></h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
            <a href="cad.php"><i class="fas fa-tablet"></i>CAD</a>
            <a href="dispatch.php"><i class="fas fa-bullhorn"></i>Dispatch</a>
            <a href="search.php"><i class="fas fa-search"></i>Search</a>
            <a href="settings.php"><i class="fas fa-cog"></i>Settings</a>
            <a href="profile.php"><i class="fas fa-user"></i><?php echo $firstName . " " . $lastName; ?></a>
            <a href="../backend/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
</header>