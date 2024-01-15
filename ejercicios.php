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
                        <a class="nav-link navbar-brand" href="#">Ejercicios</a>
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
            <h1>Ejercicios</h1>
            <p>En esta sección está la resolución de los seis ejercicios presentados por el profesor Ezequiel.</p>
        </div>
    </div>
    <div class= "container">
    <div class= "row">
        <div class="col-md-12">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Ejercicio 1
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Un jet aterriza con una velocidad de 100 m/s y puede acelerar a una tasa máxima de -5 m/s² cuando se va a detener.</strong><hr><strong> a) </strong> A partir del instante que toca la pista de aterrizaje. ¿Cuál es el tiempo mínimo necesario antes de que se detenga?<br>a = -5 m/s²ㅤㅤㅤㅤㅤV0 = 100 m/sㅤㅤㅤㅤㅤVf = 0<br><br>Vf = V0 - a * t<br>t = V0/a<br>t = (100 m/s)/(5 m/s²)<br>t = 20 s<br>
                    <?php 

                    $Vi_1 = 100;
                    $aceleracion_1 = -5;

                    echo "El jet se demoraria " . $Vi_1/$aceleracion_1 * -1 . " segundos en detenerse."; 
                    ?>
                    
                    
                    <br><br><strong>b)</strong>¿Este avión puede aterrizar en un pequeño aeropuerto donde la pista tiene 0.80 Km de largo? ¿Cual es el tiempo?<br> x = (V0 + Vf / 2) * t<br>x = (V0 / 2) * t<br>x = (100 / 2) * 20<br>x = 1000 m<br><br>
                    <?php 

                    $Vi_1 = 100;
                    $aceleracion_1 = -5;
                    $t_1 = 20;

                    $distancia_1 = 800;


                    echo "El jet necesita " . $Vi_1/2 * 20 . " metros para aterrizar, por lo que no puede en la pista de 800 metros.<br>"; 
                    echo "Y este se demoraria " . ($distancia_1/$Vi_1) + $t_1 . " segundos en detenerse."
                    ?>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Ejercicio 2
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Una piloto de arrancones inicia la marcha de su vehiculo desde el reposo y acelera a 10 m /seg² durante una distancia total de 400 m (1/4 de milla)</strong><hr><strong>a)</strong>¿Cuánto tiempo tarda el carro en recorrer esta distancia?<br>a = 10 m/s²ㅤㅤㅤㅤㅤV0 = 0ㅤㅤㅤㅤㅤx = 400 m<br>x = V0 * t + 1/2 * a * t²<br>x = 1/2 * a * t²<br>t² = (2 * x) / a<br>t = √((2 * x) / a)<br>t = √((2 * 400 m) / 10 m/s²)<br>t = 8,94 s<br>
                    <?php 

                    $posicion_2 = 400;
                    $aceleracion_2 = 10;

                    echo "El carro se demora " . sqrt((2*$posicion_2)/$aceleracion_2) . " segundos en recorrer la distancia.<br>"; 
                    ?>
                    <br><strong>b)</strong> ¿Cuál es su velocidad al final del recorrido?<br>Vf² = V0² + 2 * a * x<br>Vf² = 2 * a * x<br>Vf = √(2 * a * x)<br>Vf = √(2 * 100 m/s² * 400 m)<br>Vf = 89,44 m/s<br>
                    <?php 


                    echo "La velocidad al final del recorido es de " . sqrt(2 * $aceleracion_2 * $posicion_2) . " metros por segund o."; 
                    ?>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Ejercicio 3
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Una pelota de golf se suelta desde el reposo del techo de un edificio muy alto. Despreciando la resistencia del aire, calcule (a) la posición y (b) la velocidad de la pelota después de 1 seg, 2 seg. y 3 seg.</strong><hr>t1 = 1 sㅤㅤㅤㅤㅤV0 = 0ㅤㅤㅤㅤㅤa = 9,8 m/s²<br>Vf1 = V0 + a * t<br>Vf1 = a * t<br>Vf1 = 9,8 m/s² * 1 seg<br>Vf1 = 9,8 m/s<br>x1 = (V0 + Vf1 / 2) * t<br>x1 = (Vf1 / 2) * t<br>x1 = (9,8 m/s / 2) * 1 s<br>x1 = 4,9 m<br><br>t2 = 2 sㅤㅤㅤㅤㅤV0 = 0ㅤㅤㅤㅤㅤa = 9,8 m/s²<br>Vf2 = 9,8 m/s² * 2 s<br>Vf2 = 19,6 m/s<br>x2 = (19,6 m/s / 2) * 2 s<br>x2 = 19,6 m<br><br>t3 = 3 sㅤㅤㅤㅤㅤV0 = 0ㅤㅤㅤㅤㅤa = 9,8 m/s²<br>Vf3 = 9,8 m/s² * 3 s<br>Vf3 = 29,4 m/s<br>x3 = (29,4 m/s / 2) * 3 s<br>x3 = 44,1 m<br><br>
                    
                    <?php

                    $aceleracion_3 = 9.8;

                    echo "1) Velocidad Final = " . $aceleracion_3 * 1 . " metros por segundo.<br>";
                    echo "ㅤPosicion final = " . (($aceleracion_3 * 1)/ 2) * 1 . " metros.<br>";
                    echo "2) Velocidad Final = " . $aceleracion_3 * 2 . " metros por segundo.<br>";
                    echo "ㅤPosicion final = " . (($aceleracion_3 * 2) / 2) * 2 . " metros.<br>";
                    echo "3) Velocidad Final = " . $aceleracion_3 * 3 . " metros por segundo.<br>";
                    echo "ㅤPosicion final = " . (($aceleracion_3 * 3) / 2) * 3 . " metros.<br>";

                    ?>


                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Ejercicio 4
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Una estudiante lanza un llavero verticalmente hacia arriba a su hermana del club femenino de estudiantes, que esta en una ventana 4 m arriba. Las llaves son atrapadas 1.5 seg. después por el brazo extendido de la hermana.</strong><hr><strong>a)</strong>Con que velocidad inicial fueron lanzadas las llaves?<br>h = 4mㅤㅤㅤㅤㅤt = 1,5 sㅤㅤㅤㅤㅤa = 9,8 m/s²<br>h = V0 * t + 1/2 * g * t²<br>4 m = V0 * 1,5 s + 1/2 * m/s² * (1,5 s)²<br>V0 = 10 m/s<br>
                    <?php

                    $altura_4 = 4;
                    $t_4 = 1.5;
                    $aceleracion_4 = 9.8;

                    echo "La velocidad inicial al lanzar las llaves es de " . ($altura_4 + (1/2) * $aceleracion_4 * pow($t_4,2)) / $t_4 . " metros por segundo.<br>";

                    ?>
                    <strong>b)</strong>Cual era la velocidad de las llaves justo antes que fueran atrapadas?<br>V0= 10 m/sㅤㅤㅤㅤㅤa = 9,8 m/s²ㅤㅤㅤㅤㅤt = 1,5 s<br>Vf = V0 - a * t<br>Vf = 10 - 9,8 m/s² * 1,5 s<br>Vf = -4,7 m/s<br>
                    <?php
                    $vi_4 = 10;
                    $aceleracion_4 = 9.8;
                    $t_4 = 1.5;
                     echo "Antes de atrapar sus llaves, la velocidad era de: " . $vi_4 - $aceleracion_4 * $t_4 . " metros por segundos.";
                    ?>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Ejercicio 5
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Se informó que una mujer cayó 144 pies desde el piso 17 de un edificio, aterrizando sobre una caja de ventilador metálica, la cual sumió hasta una profundidad de 18 pulg. Sólo sufrió lesiones menores. Ignore la resistencia del aire y calcule:</strong><hr><strong>a)</strong>La velocidad de la mujer exactamente antes de chocar con el
                    ventilador<br>y = 144 piesㅤㅤㅤㅤㅤa = 32 pies/s²<br><br>Al caer del edificio la velocidad inicial es 0, y es + ya que esta acelerando<br><br>Vf² = V0² + 2 * a * y<br>Vf² = 2 * a * y<br>Vf = √(2 * a * y)<br>Vf = √(2 * 32 pies/s² * 144 pies)<br>Vf = 96 pies/s<br>
                    <?php

                    $distancia_5 = 144;
                    $aceleracion_5 = 32;
                    $vel_llegada_5 = sqrt(2 * $aceleracion_5 * $distancia_5);
                    echo "La velocidad de llegada es de " . $vel_llegada_5 . " pies partidos en segundos.<br><br>";

                    ?>
                    <strong>b)</strong>Su aceleracion promedio mientras esta en contacto con la caja<br>y = 18 pulgㅤㅤㅤㅤㅤa = 32 pies/s²<br><br>Cuando llega al piso, es la velocidad final, y a la vez es la velocidad inicial al entrar en contacto con la caja, y es - ya que esta desacelerando<br><br>y = 18 pulg * 1 pie / 12 pulg = 1,5 pies<br>Vf² = V0² - 2 * a * y<br>V0² = 2 * a * y<br>a = V0²/(2 * y)<br>a = (96 pies/s)²/(2 * 1,5 pies)<br>a = 3072 pies/s²
                    <?php
                    
                    $distancia2_5 = 1.5;
                    $aceleracion_promedio = pow($vel_llegada_5,2) / (2 * $distancia2_5);
                    
                    echo "La aceleracion promedio es de " . $aceleracion_promedio . " pies por segundo al cuadrado.<br><br>";

                    ?>
                    <strong>c)</strong>El tiempo que tarda en sumir la caja. Siendo la velocidad final 0<br>Vf = V0 - a * t<br> a * t = V0<br>t = V0 / a<br>t = 96 pies/s / 3072 pies/s²<br>t = 0,031 s<br>
                    <?php
                    echo "El tiempo que se demora la caja en sumirse es de " . $vel_llegada_5/$aceleracion_promedio . " segundos";
                    ?>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Ejercicio 6
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Una piloto de arrancones inicia la marcha de su vehiculo desde el reposo y acelera a 10 m /seg² durante una distancia total de 400 m (1/4 de milla)</strong><hr><strong>a)</strong>¿Cuánto tiempo tarda el carro en recorrer esta distancia?<br>a = 10 m/s²ㅤㅤㅤㅤㅤV0 = 0ㅤㅤㅤㅤㅤx = 400 m<br>x = V0 * t + 1/2 * a * t²<br>x = 1/2 * a * t²<br>t² = (2 * x) / a<br>t = √((2 * x) / a)<br>t = √((2 * 400 m) / 10 m/s²)<br>t = 8,94 s<br>
                    <?php 

                    $posicion_6 = 400;
                    $aceleracion_6 = 10;

                    echo "El carro se demora " . sqrt((2*$posicion_6)/$aceleracion_6) . " segundos en recorrer la distancia.<br>"; 
                    ?>
                    <br><strong>b)</strong> ¿Cuál es su velocidad al final del recorrido?<br>Vf² = V0² + 2 * a * x<br>Vf² = 2 * a * x<br>Vf = √(2 * a * x)<br>Vf = √(2 * 100 m/s² * 400 m)<br>Vf = 89,44 m/s<br>
                    <?php 


                    echo "La velocidad al final del recorido es de " . sqrt(2 * $aceleracion_6 * $posicion_6) . " metros por segundo."; 
                    ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
    <!--CIERRE TITULAR-->

    <br>

    <!-- RESOLUCION EJERCICIOS -->


    <!-- TERMINO RESOLUCION -->
    <br><br><br>

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

        <!--JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>