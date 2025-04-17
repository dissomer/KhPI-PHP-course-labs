<?php
$host = "mysql";
$db = "started";
$user = "started-user";
$pass = "started-password";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

if (mysqli_stmt_execute($stmt)) {
    echo "Registration successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
