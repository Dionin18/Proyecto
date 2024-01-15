<?php
error_reporting(E_ERROR);
session_start();
$correo = $_SESSION["email"];
$contraseña = $_SESSION["pass"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Office</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="estilos.css" rel="stylesheet">

    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</head>
<body>
    <!-- BARRA NAVEGACION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0 auto;">
        <div class="container">
            <a class="navbar-brand" href="clonIndex.php">
                <img src="logo/imagen2.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand" href="clonindex.php">The Office</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="comentarios.php">Comentarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="api_id.php">API</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="autores.php">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="ejercicios.php">Ejercicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="Perfil.php">Ver Perfil</a>
                    </li>
                    <?php
                        if($admin == 0){
                            echo '<li class="nav-item">';
                                echo '<a class="nav-link navbar-brand" href="eliminar_usuario.php">Ver Usuarios</a>';
                            echo '</li>';
                        }
                    ?>
                </ul>
                <ul class="nav navbar-nav ms-auto"> <li class="nav-item">
                    <li>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cerrar sesión
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php">Aceptar</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--CIERRE BARRA NAVEGACION-->

  <!-- TITULAR -->
  <div class="container">
        <div class="mt-4 p-5 bg-secondary text-white rounded">
            <h1>¿Eres un fan de The Office? ¿Quieres saber qué personaje de la serie eres?</h1>
            <p>¡Pues no busques más!<br> Con nuestro innovador juego, podrás descubrirlo de forma rápida y sencilla.
            Solo tienes que escoger un número aleatorio del 1 al 83. El sistema se encargará de generar el resultado y te mostrará el personaje que has obtenido, junto con una pequeña información sobre él.<br>
            ¿Te atreves a jugar? ¡Este es el juego perfecto para los fanáticos de The Office! Elige tu número y descubre tu personaje!</p>
        </div>
    </div>
    <br>
    <!--CIERRE TITULAR-->
    <div class="container" style="align: center;">
        <div class="row">
            <div class="col">

            <form action="api.php" method="POST" enctype="multipart/form-data">

                <label for="id_" class="form-label">Ingresa el número!</label>
                <input type="number" min="1" max="83" name="id_" id="id_" class="form-control" placeholder="1-83" required>

                <br>

                <input type="submit" value="Vamos Alla!" class="btn btn-outline-secondary">
            </form>
            </div>
        </div>
    </div><br><br><br>

    <hr>
    <!-- FOOTERS -->
    <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="clonIndex.php" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1"/>
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2024 E&B </span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a class="text-body-secondary" href="https://x.com/LeoReyoficial?s=20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                        <use xlink:href="#twitter"></use>
                    </svg>
                </a>
            </li>
            <li class="ms-3">
                <a class="text-body-secondary" href="https://www.instagram.com/luisjaraoficial?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        <use xlink:href="#instagram"></use>
                    </svg>
                </a>
            </li>
            <li class="ms-3">
                <a class="text-body-secondary" href="https://www.facebook.com/weareoneEXO">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        <use xlink:href="#facebook"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </footer>
    <!-- CIERRE FOOTERS -->

    
</body>
</html>
