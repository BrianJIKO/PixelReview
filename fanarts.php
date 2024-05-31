<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fan Arts - Pixel Review</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .login-form {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .login-form input {
            padding: 3px;
            font-size: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100px;
        }
        .login-form button {
            background-color: #ffdd00;
            border: none;
            padding: 3px 5px;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
        .welcome-message {
            color: green;
            margin-top: 10px;
        }
        body {
            background: url('FotosPagina/fondo.gif') no-repeat center center fixed;
            background-size: cover;
        }
        .containerM {
            position: relative;
            z-index: 1;
            padding: 20px;
            border-radius: 10px;
            max-width: 1200px;
            margin: 50px auto;
        }
        .Publicontainer {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }
        .fanart-item {
            flex: 1 1 calc(33.333% - 20px);
            box-sizing:border-box;
            margin-bottom:10px;
        }
        .fanart-item img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }
    </style>
    <script>
        function loadFanarts() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'load_fanarts.php', true);
            xhr.onload = function() {
                if (this.status === 200) {
                    document.getElementById('Publicontainer').innerHTML = this.responseText;
                }
            }
            xhr.send();
        }

        document.addEventListener('DOMContentLoaded', function() {
            loadFanarts();
        });
    </script>
</head>
<body>
    <?php include 'session.php'; ?>
    <header class="header-">
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

    <section class="banner-fanarts">
        <div class="banner-content container">
            <?php
            if (isset($_SESSION['username'])) {
                echo '<h2>Sube tu Fan Art</h2>';
                echo '<form id="upload-form" action="upload_fanart.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fanart" required>
                    <button type="submit">Subir</button>
                </form>';
            } else {
                echo '<p>Inicia sesión para subir tus Fan Arts.</p>';
            }
            ?>
        </div>
    </section>

    <main class="containerM">
        <h2 class="hidden">Galería de Fan Arts</h2>
        <div id="Publicontainer" class="Publicontainer"></div>
    </main>

    <footer class="footer" style="background-color: #ffdd00;">
        <div class="footer-content container">
            <div class="left-column">
                <img src="FotosPagina/logoAmarillo.png" alt="Logo Amarillo de Pixel Review">
            </div>
            <div class="center-column">
                <h2>Contacto</h2>
                <p>Tel: +1-555-555-5555</p>
                <p>Email: pixelreview@gmail.com</p>
            </div>
            <div class="right-column">
                <h2>Enlaces Rápidos</h2>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="comunidad.php">Comunidad</a></li>
                    <li><a href="videojuegos.php">Videojuegos</a></li>
                    <li><a href="tutoriales.php">Tutoriales</a></li>
                    <li><a href="fanarts.php">Fan Arts</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
