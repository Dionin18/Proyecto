<?php
error_reporting(E_ERROR);
session_start();
$correo = $_SESSION["email"];
$contraseña = $_SESSION["pass"];

require_once "phpqrcode/qrlib.php";

//datos de conexion a la base de datos

$db_host = "localhost";
$db_name = "proyecto";
$db_user = "root";
$db_pass = "";

//crear conexion de manera procedural

$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

//verificar conexion

if(!$conexion){
    die("Conexion fallida: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
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
            <a class="navbar-brand" href="#">
                <img src="logo/imagen2.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand" href="#">The Office</a>
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

    <!-- SLIDER -->
    <div class="container">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="slider/aee4b77f47acf15bcb86e96d0331d986.jpg" alt="Los Angeles" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="slider/imagen18.jpg" alt="Chicago" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="slider/imagen21jpg.jpg" alt="New York" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="slider/imagen19.jpg" alt="New York" class="d-block w-100">
                    </div>
                </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <!--CIERRE SLIDER-->

    <br><br>

    <!-- REJILLA PAGINA -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default" style="background-color:white;">
                            <div class="panel-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                </svg>
                                Simulacro de Incendio | The Office Latinoamérica
                            </div>
                            <div class="container-video">
                            <iframe width="100%" height="250px" src="https://www.youtube.com/embed/Bx6e_1a18ow?si=phpRHTy0gWgO0LyR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>    
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default" style="background-color:white;">
                                <div class="panel-heading">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                    </svg>
                                    The Office, La Mejor Comedia Del Siglo | #TeLoResumo
                                </div>
                                <div class="container-video">
                                <iframe width="100%" height="250px" src="https://www.youtube.com/embed/2zgV7f4s03U?si=8yciilBn1ABiu86B" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default" style="background-color:white;">
                                <div class="panel-heading">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                    </svg>
                                    Jim Imita a Dwight | The Office Latinoamérica
                                </div>
                                <div class="container-video">
                                <iframe width="100%" height="250px" src="https://www.youtube.com/embed/uBwDRQiewJQ?si=r8KSFO30jMQQdtpE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>    
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-8">
            <?php
            $aux = "a";
            $sql = "SELECT * FROM noticia";
            $resultado = $conexion->query($sql);
            while($col = $resultado->fetch_array()) {
                echo '<div class="row">';
                    echo '<div class="col-md-12">';
                        echo '<div class="panel panel-default" style="background-color:white;">';
                            echo '<div class="panel-heading">';
                                echo '<h2>'. $col[0] . '</h2>';
                            echo '</div>';
                            echo '<div class="panel-body">';
                                echo '<h3>' . $col[1] . '</h3>';
                                echo '<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal'.$aux.'">';
                                    echo 'Leer más...';
                                echo '</button>';

                                echo '<div class="modal" id="myModal'.$aux.'">';
                                    echo '<div class="modal-dialog">';
                                        echo '<div class="modal-content">';

                                            echo '<div class="modal-body" style="text-align:center;">';
                                                $arg = $col[2];
                                                $path = "qr/";
                                                $qrcode = $path.time().$aux.".png";
                                                QRcode::png($arg, $qrcode,'H',2,2);
                                                echo '<img src="'.$qrcode.'">';
                                                $arg = "";
                                                $qrcode = "";
                                            
                                            echo '</div>';
                                            echo '<div class="modal-footer">';
                                                echo '<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>';
                                            echo '</div>';

                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            echo '<br>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '<br>';            
                $aux = $aux . "a";
            }

            mysqli_close($conexion);
            ?>
            </div>
        </div>
    </div>


        <!--JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>