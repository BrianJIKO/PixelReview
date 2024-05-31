<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos - Pixel Review</title>
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

    <section class="videojuegos-banner">
        <h1>Videojuegos</h1>
    </section>

    <section class="videojuegos-contenido1" id="lol">
        <div class="container">
            <img src="FotosPagina/600528.png" alt="Imagen de Videojuego" class="imagen-videojuego">
            <div class="texto-videojuego">
                <h2>League of Legends</h2>
                <p>League of Legends es un competitivo juego en línea que mezcla la velocidad y la intensidad de un RTS con elementos RPG. Los jugadores se sumergen en un vibrante universo de fantasía donde dos equipos de poderosos campeones luchan por la supremacía.</p>
                <a href="https://www.leagueoflegends.com/es-mx/" class="btn btn-videojuego" target="_blank">Más</a>
            </div>
        </div>
    </section>

    <section class="videojuegos-contenido2" style="background-color: #ffdd00;" id="rss">
        <div class="container">
            <div class="texto-videojuego">
                <h2>Rainbow Six Siege</h2>
                <p>Es un innovador shooter táctico desarrollado por Ubisoft, centrado en el combate cuerpo a cuerpo, la precisión y la estrategia. Enfocado en la destrucción ambiental y la cooperación entre jugadores, cada partida exige un enfoque táctico y un trabajo en equipo excepcional.</p>
                <a href="https://www.ubisoft.com/es-mx/game/rainbow-six/siege" class="btn-videojuego2" target="_blank">Más</a>
            </div>
            <img src="FotosPagina/614870.jpg" alt="Imagen de Videojuego" class="imagen-videojuego">
        </div>
    </section>

    <section class="videojuegos-contenido3" id="fortnite">
        <div class="container">
            <img src="FotosPagina/b4.jpg" alt="Imagen de Videojuego" class="imagen-videojuego">
            <div class="texto-videojuego">
                <h2>Fortnite</h2>
                <p>Fortnite es un dinámico battle royale conocido por su vibrante mundo y construcción en tiempo real. Jugadores de todo el mundo compiten por ser el último en pie en un colorido escenario que combina acción intensa con estrategias de construcción creativas.</p>
                <a href="https://www.fortnite.com" class="btn btn-videojuego" target="_blank">Más</a>
            </div>
        </div>
    </section>

    <section class="videojuegos-contenido4" style="background-color: #ffdd00;" id="dota2">
        <div class="container">
            <div class="texto-videojuego">
                <h2>DOTA 2</h2>
                <p>Dota 2 es un complejo y estratégico juego de arena de batalla en línea que enfrenta a dos equipos de cinco jugadores cada uno, donde cada participante controla a un poderoso héroe con habilidades únicas. Conocido por su profunda jugabilidad y su competitivo escenario profesional, Dota 2 invita a los jugadores a una batalla táctica por la supremacía en un mundo de fantasía.</p>
                <a href="https://www.dota2.com/home" class="btn-videojuego2" target="_blank">Más</a>
            </div>
            <img src="FotosPagina/dota-2-wallpaper-hd_1985214_hu494b799959637414e43eef86d7a8e35c_331814_1920x1080_resize_q100_lanczos.jpg" alt="Imagen de Videojuego" class="imagen-videojuego">
        </div>
    </section>

    <section class="closing-banner" style="background-image: url('FotosPagina/tumblr_p8tymcDzQN1qciqqno2_1280.gif');">
        <div class="container">
            <div class="game-entry">
                <h1>01</h1>
                <p>League of Legends</p>
            </div>
            <div class="game-entry">
                <h1>02</h1>
                <p>RSS</p>
            </div>
            <div class="game-entry">
                <h1>03</h1>
                <p>Fortnite</p>
            </div>
            <div class="game-entry">
                <h1>04</h1>
                <p>DOTA 2</p>
            </div>
        </div>
    </section>

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
    </style>
</body>
</html>
