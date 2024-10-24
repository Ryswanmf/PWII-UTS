<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-container">
        <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
