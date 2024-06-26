<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriales - Pixel Review</title>
    <link rel="stylesheet" href="style.css">
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

    <main class="tutorial-container">
        <div class="tutorial-row">
            <div class="tutorial-box">
                <img src="FotosPagina/Tutorial_enemy_Sion.webp" alt="Tutorial 1" class="tutorial-image">
                <h1 class="tutorial-text">Dominando la grieta: Tutorial completo de ...</h1>
                <p>Bienvenidos, invocadores! En este tutorial exhaustivo de League of Legends, exploraremos cada aspecto crucial del juego, desde los conceptos básicos hasta estrategias avanzadas. Aprenderemos sobre elección de campeones, roles, construcción de objetos, map awareness y mucho más.</p>
            </div>
            <div class="tutorial-box">
                <img src="FotosPagina/maxresdefault.jpg" alt="Tutorial 2" class="tutorial-image">
                <h1 class="tutorial-text">Fortnite Mastery: Guía Completa para Jugad ...</h1>
                <p>¡Saludos, guerreros de la tormenta! En este tutorial integral de Fortnite, exploraremos todos los elementos esenciales del juego, desde la selección del lugar de aterrizaje hasta las estrategias avanzadas de construcción y combate. </p>
            </div>
            <div class="tutorial-box">
                <img src="FotosPagina/maxresdefault (1).jpg" alt="Tutorial 3" class="tutorial-image">
                <h1 class="tutorial-text">Rainbow Six Siege: Estrategias Esenciales pa... </h1>
                <p>¡Operadores, bienvenidos a la guía definitiva de Rainbow Six Siege! En este tutorial, desglosaremos las tácticas esenciales que todo nuevo operador debe dominar para tener éxito en la batalla táctica. s</p>
            </div>
        </div>
        <div class="tutorial-row">
            <div class="tutorial-box">
                <img src="FotosPagina/maxresdefault (3).jpg" alt="Tutorial 4" class="tutorial-image">
                <h1 class="tutorial-text">Domina Apex Legends: Estrategias Clave pa...</h1>
                <p>¡Bienvenidos, Leyendas, a esta guía completa de Apex Legends! En este tutorial, exploraremos las estrategias fundamentales que todo jugador novato debe conocer para sobresalir en la arena. </p>
            </div>
            <div class="tutorial-box">
                <img src="FotosPagina/maxresdefault (2).jpg" alt="Tutorial 5" class="tutorial-image">
                <h1 class="tutorial-text">Maestría en Valorant: Estrategias Esenciales</h1>
                <p>¡Bienvenidos, Agentes, a esta guía completa de Valorant! En este tutorial, desglosaremos las estrategias cruciales que todo nuevo agente debe dominar para triunfar en los campos de batalla tácticos.</p>
            </div>
            <div class="tutorial-box">
                <img src="FotosPagina/dota-2-mechanics-tutorial-1920x1080.jpg" alt="Tutorial 6" class="tutorial-image">
                <h1 class="tutorial-text">Más Allá de la Defensa de los Antiguos: Guía ...</h1>
                <p>¡Bienvenidos, Guerreros de los Antiguos, a esta guía exhaustiva de Dota 2! En este tutorial, exploraremos las estrategias esenciales que todo jugador novato debe comprender para sobresalir en el campo de batalla. </p>
            </div>
        </div>
    </main>

    <footer class="footer" style="background-color: #ffdd00;">
        <div class="footer-content container">
            <div class="left-column">
                <img src="FotosPagina/logoAmarillo.png" alt="Logo Amarillo">
            </div>
            <div class="center-column">
                <h2 style="font-size: 30px; text-align: left;">Información</h2>
                <a href="tel:+15555555555">1-555-555-555</a>
                <br>
                <a href="mailto:pixelreview@gmail.com">pixelreview@gmail.com</a>
            </div>
            <div class="right-column">
                <h2 style="font-size: 30px; text-align: center;">Enlaces</h2>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="comunidad.html">Comunidad</a></li>
                    <li><a href="videojuegos.html">Videojuegos</a></li>
                    <li><a href="tutoriales.html">Tutoriales</a></li>
                    <li><a href="fanarts.html">Fan Arts</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Incluir el archivo JavaScript para manejar las cookies -->
    <script src="cookies.js"></script>

    <style>
        .login-form {
            display: flex;
            align-items: center;
            gap: 5px; /* Reducir el espacio entre los elementos */
        }
        .login-form input {
            padding: 3px; /* Reducir el relleno de los campos de entrada */
            font-size: 12px; /* Reducir el tamaño de la fuente */
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100px; /* Ajustar el ancho de los campos */
        }
        .login-form button {
            background-color: #ffdd00;
            border: none;
            padding: 3px 5px; /* Reducir el relleno del botón */
            font-size: 12px; /* Reducir el tamaño de la fuente */
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
    </style>
</body>
</html>
