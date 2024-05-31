<?php
session_start();

// Leer el archivo JSON de usuarios
$users = json_decode(file_get_contents('users.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_found = false;

    // Verificar si el usuario y la contraseña son correctos
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['username'] = $username;
            $user_found = true;
            break;
        }
    }

    if ($user_found) {
        header('Location: index.html');
        exit();
    } else {
        header('Location: index.html?error=1');
        exit();
    }
}
?>
