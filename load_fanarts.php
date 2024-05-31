<?php
$servername = "sql303.infinityfree.com"; // Reemplaza "sqlXXX.epizy.com" con tu servidor de base de datos
$username = "if0_36648928"; // Reemplaza "epiz_XXX" con tu nombre de usuario de la base de datos
$password = "t3LLpyZLhT1Qf"; // Reemplaza "tu_contraseña" con tu contraseña de la base de datos
$dbname = "if0_36648928_fan_arts"; // Reemplaza "epiz_XXX_mi_base_de_datos" con tu nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT username, image_path, upload_date FROM fanarts ORDER BY upload_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="fanart-item">';
        echo '<img src="' . htmlspecialchars($row['image_path']) . '" alt="Fan Art">';
        echo '<p>Subido por: ' . htmlspecialchars($row['username']) . ' el ' . htmlspecialchars($row['upload_date']) . '</p>';
        echo '</div>';
    }
} else {
    echo '<p>No hay fan arts subidos aún.</p>';
}

$conn->close();
?>
