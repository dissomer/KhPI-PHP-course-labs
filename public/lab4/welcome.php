<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html"); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Hi, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <a href="logout.php">Вийти</a>
</body>
</html>
