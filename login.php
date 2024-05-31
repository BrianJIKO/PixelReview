<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "sql303.infinityfree.com"; // Reemplaza "sqlXXX.epizy.com" con tu servidor de base de datos
    $username = "if0_36648928"; // Reemplaza "epiz_XXX" con tu nombre de usuario de la base de datos
    $password = "t3LLpyZLhT1Qf"; // Reemplaza "tu_contraseña" con tu contraseña de la base de datos
    $dbname = "if0_36648928_fan_arts"; // Reemplaza "epiz_XXX_mi_base_de_datos" con tu nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ?");
    if (!$stmt) {
        die("Error preparando la consulta: " . $conn->error);
    }
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($pass === $row['password']) { // Considerar usar password_verify si las contraseñas están hasheadas
            $_SESSION['username'] = $user;
            header("Location: index.php");
        } else {
            echo "Contraseña incorrecta";
            // header("Location: login.php?error=1"); // Contraseña incorrecta
        }
    } else {
        echo "Usuario no encontrado";
        // header("Location: login.php?error=1"); // Usuario no encontrado
    }
    $stmt->close();
}

$conn->close();
?>
