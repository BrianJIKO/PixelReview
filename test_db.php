<?php
$servername = "pixelreview.infinityfreeapp.com"; // Reemplaza "sqlXXX.epizy.com" con tu servidor de base de datos
$username = "if0_36648928"; // Reemplaza "epiz_XXX" con tu nombre de usuario de la base de datos
$password = "t3LLpyZLhT1Qf"; // Reemplaza "tu_contraseña" con tu contraseña de la base de datos
$dbname = "if0_36648928_fan_arts"; // Reemplaza "epiz_XXX_mi_base_de_datos" con tu nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
$conn->close();
?>
