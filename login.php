<?php
session_start(); // Iniciar la sesión

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "Mendi23102001."; // Reemplaza "nueva_contraseña" con la contraseña correcta
$dbname = "mi_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$user = $_POST['username'];
$pass = $_POST['password'];

// Consultar la base de datos para el usuario
$sql = "SELECT * FROM usuarios WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) { // Comparar contraseñas de forma segura
        $_SESSION['username'] = $user; // Iniciar sesión
        header("Location: index.php"); // Redirigir a la página de inicio
    } else {
        header("Location: index.php?error=1"); // Contraseña incorrecta
    }
} else {
    header("Location: index.php?error=1"); // Usuario no encontrado
}

$stmt->close();
$conn->close();
?>
