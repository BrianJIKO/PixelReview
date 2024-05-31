<?php
session_start();
if (!isset($_SESSION['username'])) {
    die("Acceso denegado");
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "sql303.infinityfree.com"; // Reemplaza "sqlXXX.epizy.com" con tu servidor de base de datos
    $username = "if0_36648928"; // Reemplaza "epiz_XXX" con tu nombre de usuario de la base de datos
    $password = "t3LLpyZLhT1Qf"; // Reemplaza "tu_contraseña" con tu contraseña de la base de datos
    $dbname = "if0_36648928_fan_arts"; // Reemplaza "epiz_XXX_mi_base_de_datos" con tu nombre de la base de datos

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }
    $target_file = $target_dir . basename($_FILES["fanart"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fanart"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Lo siento, el archivo ya existe.";
        $uploadOk = 0;
    }

    if ($_FILES["fanart"]["size"] > 5000000) {
        echo "Lo siento, tu archivo es demasiado grande.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
    } else {
        if (move_uploaded_file($_FILES["fanart"]["tmp_name"], $target_file)) {
            $stmt = $conn->prepare("INSERT INTO fanarts (username, image_path) VALUES (?, ?)");
            if ($stmt === false) {
                die("Error en la consulta: " . $conn->error);
            }
            $stmt->bind_param("ss", $_SESSION['username'], $target_file);
            if ($stmt->execute()) {
                echo "Subida exitosa";
                header("Location: fanarts.php");
                exit();
            } else {
                echo "Error al guardar la información del fanart: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }

    $conn->close();
}
?>
