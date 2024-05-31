<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fan Arts - Pixel Review</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'session.php'; ?>
    <header class="header">
        <div class="navbar-container">
            <div class="menu container">
                <img src="FotosPagina/logo.png" alt="Pixel Review Logo">
                <nav class="navbar">
                    <ul>
                        <li><a href="index.php">INICIO</a></li>
                        <li><a href="comunidad.php">COMUNIDAD</a></li>
                        <li class="dropdown">
                            <a href="videojuegos.php">VIDEOJUEGOS</a>
                            <div class="dropdown-content">
                                <ul>
                                    <li><a href="videojuegos.php#lol">LOL</a></li>
                                    <li><a href="videojuegos.php#rss">RSS</a></li>
                                    <li><a href="videojuegos.php#fortnite">FORTNITE</a></li>
                                    <li><a href="videojuegos.php#dota2">DOTA 2</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="tutoriales.php">TUTORIALES</a></li>
                        <li><a href="fanarts.php">FAN ARTS</a></li>
                    </ul>
                </nav>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<div class="welcome-message">Bienvenido, ' . htmlspecialchars($_SESSION['username']) . '!</div>';
                    echo '<form class="login-form" action="logout.php" method="post">
                        <button type="submit">Cerrar Sesión</button>
                    </form>';
                } else {
                    echo '<form class="login-form" action="login.php" method="post">
                        <input type="text" name="username" placeholder="Usuario" required>
                        <input type="password" name="password" placeholder="Contraseña" required>
                        <button type="submit">Iniciar Sesión</button>
                    </form>';
                }
                ?>
            </div>
        </div>
    </header>

    <main>
        <?php
        if (isset($_SESSION['username'])) {
            echo '<h2>Sube tu Fan Art</h2>';
            echo '<form action="upload_fanart.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fanart" required>
                <button type="submit">Subir</button>
            </form>';
        } else {
            echo '<p>Inicia sesión para subir tus Fan Arts.</p>';
        }
        ?>

        <h2>Galería de Fan Arts</h2>
        <div class="gallery">
            <?php
            // Conectar a la base de datos
            $conn = new mysqli("localhost", "root", "Mendi23102001.", "mi_base_de_datos");

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Obtener los fanarts de la base de datos
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
        </div>

        <style>
            .gallery {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
            }
            .fanart-item {
                border: 1px solid #ccc;
                padding: 10px;
                width: 200px;
            }
            .fanart-item img {
                max-width: 100%;
                height: auto;
            }
        </style>
    </main>
</body>
</html>
