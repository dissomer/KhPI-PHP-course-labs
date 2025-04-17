<?php
session_start();

$host = "mysql";
$db = "started";
$user = "started-user";
$pass = "started-password";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = md5($_POST['password']); 

$query = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user) {
    $_SESSION['username'] = $user['username'];
    header("Location: welcome.php");
    exit();
} else {
    echo "Wrong username or password!";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
