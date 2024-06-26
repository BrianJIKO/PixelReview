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

    <header class="header">
        <div class="navbar-container">
            <div class="menu container">
                <img src="FotosPagina/logo.png" alt="Logo de Pixel Review">
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

        <div class="header-content container">
            <div class="header-txt">
                <h1>PIXEL REVIEW</h1>
                <p>
                    Desglosando el mundo de los videojuegos, píxel por píxel
                </p>
                <div class="btn-container">
                    <a href="videojuegos.php" class="btn-1">Videojuegos</a>
                </div>
            </div>
        </div>
    </header>

    <section class="about">
        <div class="about-content container">
            <div class="about-txt">
                <img src="FotosPagina/logo.png" alt="">
                <p>
                    En Pixel Review, nos dedicamos a desentrañar los misterios del vasto universo de los videojuegos.
                    Somos más que una plataforma de reseñas; somos una comunidad apasionada de jugadores,
                    creadores y entusiastas de la cultura gamer.
                    Enfocados en la calidad y la autenticidad, nos esforzamos por proporcionar reseñas detalladas
                    y tutoriales útiles que amplíen tu experiencia de juego.
                    Creemos que cada píxel cuenta en la creación y disfrute de un juego, y estamos aquí para explorar esos detalles que hacen que cada título sea único.
                </p>
                <p>
                    Acompáñanos en este viaje pixelado mientras exploramos nuevos lanzamientos, desentrañamos trucos, y construimos una comunidad que
                    celebra la diversidad y la emoción que los videojuegos ofrecen.
                    ¡Gracias por unirte a nosotros en Pixel Review, donde cada píxel cuenta en la narrativa de tu experiencia gamer!
                </p>
                <div class="btn-container">
                    <a href="comunidad.php" class="btn-2">Más información</a>
                </div>
            </div>
            <div class="about-img">
                <img src="FotosPagina/b6.png" alt="">
            </div>
        </div>
    </section>

    <section class="separador">
        <img src="FotosPagina/logoAmarillo.png" alt="Logo Amarillo">
    </section>

    <section class="tutoriales-trucos">
        <h2>Trucos y tutoriales</h2>
        <div class="Tutoriales-content container">
            <p>
                En nuestro exclusivo rincón de trucos y tutoriales,
                te sumergirás en un tesoro de conocimientos diseñados
                para elevar tu experiencia a nuevas alturas.
            </p>
            <div class="tutorial-1">
                <img class="face" src="FotosPagina/b7.jpg" alt="">
                <div class="tutorial-txt">
                    <h4>Descubre tu Camino hacia la Victoria en League of Legends</h4>
                    <p>
                        Acompáñanos en este viaje educativo y transforma tus partidas
                        con la sabiduría compartida por nuestros expertos.
                        ¡Prepárate para conquistar el Rift con confianza y habilidad!
                    </p>
                    <div class="btn-container">
                        <a href="tutoriales.php" class="btn-3">Empezar</a>
                    </div>
                </div>
            </div>
            <div class="tutorial-2">
                <img class="face" src="FotosPagina/b8.jpg" alt="">
                <div>
                    <h4>Desata tu Potencial en Fortnite</h4>
                    <p>
                        ¡Prepárate para construir, disparar y conquistar en Fortnite
                        con confianza y habilidad!
                    </p>
                    <div class="btn-container">
                        <a href="tutoriales.php" class="btn-4">Empezar</a>
                    </div>
                </div>
            </div>
            <div class="tutorial-3">
                <img class="face" src="FotosPagina/b9.jpg" alt="">
                <div>
                    <h4>Maestría en Rainbow Six Siege: Tutoriales Exclusivos</h4>
                    <p>
                        Rainbow Six Siege! ¡Bienvenido al lugar donde la táctica se
                        convierte en triunfo!
                    </p>
                    <div class="btn-container">
                        <a href="tutoriales.php" class="btn-5">Empezar</a>
                    </div>
                </div>
            </div>
        </div>  
    </section>

    <section class="fanarts">
        <div class="fanarts-content container">
            <div class="fanart-info">
                <h2>Explora el Arte de la Comunidad</h2>
                <p>
                    Bienvenido a nuestro rincón dedicado a la creatividad desbordante de nuestra comunidad.
                    En este espacio especializado, los talentosos artistas tienen la oportunidad de exhibir
                    sus obras de arte inspiradas en nuestros juegos favoritos.
                    Pero aquí no termina la historia; es también un lugar donde los amantes del arte
                    pueden apoyar a estos talentosos creadores mediante donaciones.
                </p>
                <div class="btn-container">
                    <a href="fanarts.php" class="btn-6">Explorar</a>
                </div>
            </div>
            <div class="images-content container">
                <div class="fanart">
                    <img class="art" src="FotosPagina/b10.jpg" alt="">
                    <div class="overlay">
                        <h4>Hwei, el Visionario</h4>
                        <p>By LunaPink</p>
                    </div>
                </div>
                <div class="fanart">
                    <img class="art" src="FotosPagina/b12.jpg" alt="">
                    <div class="overlay">
                        <h4>La Historia de Fortnite</h4>
                        <p>By KevinGG</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reseñas" style="background-color: white;">
        <h2>Reseñas de videojuegos</h2>
        <div class="reseñas-content container">
            <div class="reseña-1">
                <img class="reseña" src="FotosPagina/b13.jpg" alt="">
                <p>
                    “¡Hola a todos, soy David, un ávido jugador y fanático de Valorant!
                    Hoy quiero compartir mi emoción sobre el último contenido que Riot
                    Games ha lanzado en este emocionante shooter táctico.”
                </p>
                <span>Juanito_Gamer, Valorant</span>
            </div>
            <div class="reseña-1">
                <img class="reseña" src="FotosPagina/b14.jpg" alt="">
                <p>
                    “¡Hola, soy Alex, un entusiasta de Minecraft que ha explorado cada
                    rincón del mundo pixelado! Quiero compartir algunas observaciones
                    sobre los bugs que he encontrado recientemente en mi viaje.”
                </p>
                <span>BlackLara13, Minecraft</span>
            </div>
            <div class="reseña-1">
                <img class="reseña" src="FotosPagina/b15.jpg" alt="">
                <p>
                    “¡Saludos a todos los forajidos y vaqueros virtuales! Soy Marcos,
                    un apasionado gamer que ha pasado incontables horas explorando los
                    vastos paisajes de Red Dead Redemption 2, y estoy aquí para compartir
                    mi entusiasmo sobre este asombroso juego.”
                </p>
                <span>HatCat, Read Dead Redemption ll</span>
            </div>
        </div>
        <div class="fanart-button">
            <a href="comunidad.php" class="btn-7">Explorar</a>
        </div>
    </section>

    <section class="contact" style="background-image: url('FotosPagina/b16.gif');">
        <div class="contact-content">
            <div class="left-column">
                <h2 style="font-size: 45px; text-align: left;">Contáctanos</h2>
                <div class="contact-form">
                    <input type="text" placeholder="Nombre">
                    <input type="email" placeholder="Correo electrónico">
                    <input type="tel" placeholder="Teléfono">
                    <textarea placeholder="Mensaje"></textarea>
                    <button class="btn-8">Enviar</button>
                </div>
            </div>
            <div class="right-column">
                <h2 style="font-size: 55px; text-align: center;">PIXEL REVIEW</h2>
                <p>
                    Valoramos profundamente la perspectiva de nuestra comunidad.
                    Queremos saber qué piensas y qué te gusta. Tu opinión es esencial para nosotros.
                </p>
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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="comunidad.php">Comunidad</a></li>
                    <li><a href="videojuegos.php">Videojuegos</a></li>
                    <li><a href="tutoriales.php">Tutoriales</a></li>
                    <li><a href="fanarts.php">Fan Arts</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Cookie Consent -->
    <div id="cookieConsent">
        <div id="cookieConsentContainer">
            <h2>Este sitio usa cookies</h2>
            <p>Usamos cookies para asegurar que te damos la mejor experiencia en nuestro sitio web. <a href="#">Más información</a></p>
            <button id="acceptCookies" class="btn">Aceptar</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Función para establecer una cookie
            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            // Función para obtener una cookie
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for(var i=0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            // Verificar si las cookies han sido aceptadas
            if (!getCookie("cookiesAccepted")) {
                document.getElementById("cookieConsent").style.display = "block";
            }

            // Manejar la aceptación de cookies
            document.getElementById("acceptCookies").onclick = function() {
                setCookie("cookiesAccepted", "true", 365);
                document.getElementById("cookieConsent").style.display = "none";
            };
        });
    </script>

    <style>
        #cookieConsent {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 10px;
            display: none;
            z-index: 1000;
        }
        #cookieConsentContainer {
            max-width: 960px;
            margin: 0 auto;
        }
        #cookieConsent button {
            background-color: #ffdd00;
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</body>
</html>
