<?php
session_start(); // Iniciar la sesión

// Configuración de la base de datos
$servername = "localhost"; // Cambiar según sea necesario
$username = "root"; // Cambiar según sea necesario
$password = ""; // Cambiar según sea necesario
$dbname = "mi_base_de_datos"; // Cambiar según sea necesario

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
    if (password_verify($pass, $row['password'])) {
        // Usuario encontrado, iniciar sesión
        $_SESSION['username'] = $user;
        header("Location: index.html"); // Redirigir a la página de inicio
    } else {
        // Contraseña incorrecta
        header("Location: index.html?error=1");
    }
} else {
    // Usuario no encontrado
    header("Location: index.html?error=1");
}

$stmt->close();
$conn->close();
?>
