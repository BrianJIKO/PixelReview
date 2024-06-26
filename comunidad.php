<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Review</title>
    <link rel="stylesheet" href="style.css">
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
</head>
<body>
    <?php include 'session.php'; ?>
    <header class="header1">
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
        <section class="community-banner" >
            <h1>¡Bienvenidos a la Comunidad!</h1>
        </section>

        <section class="community-description">
            <p>Este espacio es exclusivamente para todos los amantes de los videojuegos que desean ser parte activa de nuestra comunidad. Aquí puedes subir tus referencias de juegos favoritas, hacer consultas sobre tus dudas y compartir tus aportes sobre las referencias de otros usuarios. ¡Descubre, conecta y construye junto a la comunidad gamer!</p>
        </section>

        <section class="community-features">
            <div class="feature-box yellow-background">
                <img src="FotosPagina/68e518e7ccdf1a42cda053be3a87efb1.jpg" alt="Community Interaction">
                <div class="feature-text">
                    <h2>Explora y Colabora: El Punto de Encuentro de la Comunidad Gamer</h2>
                    <p>- Compartir Referencias: Sube tus referencias de juegos favoritas y descubre qué otros títulos están cautivando a la comunidad.</p>
                    <p>- Consultar y Aprender: ¿Tienes preguntas sobre algún juego? ¡Haz tus consultas! La comunidad está aquí para ayudarte.</p>
                    <p>- Aportar tu Conocimiento: Si tienes consejos, trucos o simplemente quieres compartir tu experiencia con algún juego, este es el espacio para hacerlo.</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-text">
                    <h2>Explora y Colabora: El Punto de Encuentro de la Comunidad Gamer</h2>
                    <p>Compartir Referencias: Sube tus referencias de juegos favoritas y descubre qué otros títulos están cautivando a la comunidad.</p>
                    <p>Consultar y Aprender: ¿Tienes preguntas sobre algún juego? ¡Haz tus consultas! La comunidad está aquí para ayudarte.</p>
                    <p>Aportar tu Conocimiento: Si tienes consejos, trucos o simplemente quieres compartir tu experiencia con algún juego, este es el espacio para hacerlo.</p>
                </div>
                <img src="FotosPagina/4c684b59547099.5a268ac8e07c1.png" alt="Community Sharing">
            </div>
        </section>

        <section class="community-join">
            <h2>Únete a la comunidad</h2>
            <h3>Crea tu cuenta</h3>
            <form action="submit_form.php" method="POST">
                <input type="text" name="fullname" placeholder="Full name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="nickname" placeholder="Nickname" required>
                <!-- Captcha implementation might require server-side scripting to validate -->
                <div class="captcha">[Captcha]</div>
                <button type="submit" class="submit-btn">Crear</button>
            </form>
        </section>
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
    </style>
</body>
</html>
