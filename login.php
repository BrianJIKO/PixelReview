<?php
session_start();

$valid_username = 'usuario';
$valid_password = 'contraseña';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header('Location: index.html');
        exit();
    } else {
        header('Location: index.html?error=1');
        exit();
    }
}
?>
