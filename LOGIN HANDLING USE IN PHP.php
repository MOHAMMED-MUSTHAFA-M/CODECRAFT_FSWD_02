<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    session_start();
    $_SESSION['user'] = $user['username'];
    header("Location: index.html");
} else {
    echo "Invalid credentials";
}
?>
