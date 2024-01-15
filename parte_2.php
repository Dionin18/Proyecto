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
                    <strong>Una piloto de arrancones inicia la marcha de su vehiculo desde el reposd y acelera a 10 m /seg² durante una distancia total de 400 m (%a de milla)</strong><hr><strong>a)</strong>¿Cuánto tiempo tarda el carro en recorrer esta distancia?<br>a = 10 m/s²ㅤㅤㅤㅤㅤV0 = 0ㅤㅤㅤㅤㅤx = 400 m<br>x = V0 * t + 1/2 * a * t²<br>x = 1/2 * a * t²<br>t² = (2 * x) / a<br>t = √((2 * x) / a)<br>t = √((2 * 400 m) / 10 m/s²)<br>t = 8,94 s<br>
                    <?php 

                    $posicion_2 = 400;
                    $aceleracion_2 = 10;

                    echo "El carro se demora " . sqrt((2*$posicion_2)/$aceleracion_2) . " segundos en recorrer la distancia.<br>"; 
                    ?>
                    <br><strong>b)</strong> ¿Cuál es su velocidad al final del recorrido?<br>Vf² = V0² + 2 * a * x<br>Vf² = 2 * a * x<br>Vf = √(2 * a * x)<br>Vf = √(2 * 100 m/s² * 400 m)<br>Vf = 89,44 s<br>
                    <?php 


                    echo "La velocidad al final del recorido es de " . sqrt(2 * $aceleracion_2 * $posicion_2) . " metros por segundos al cuadrado."; 
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
                    <strong>Una estudiante lanza un llavero verticalmente hacia arriba a su hermana del club femenino de estudiantes, que esta en una ventana 4 m arriba. Las llaves son atrapadas 1.5 seg. después por el prazo extendido de la hermana.</strong><hr><strong>a)</strong>Con que velocidad inicial fueron lanzadas las llaves?<br>h = 4mㅤㅤㅤㅤㅤt = 1,5 sㅤㅤㅤㅤㅤa = 9,8 m/s²<br>h = V0 * t + 1/2 * g * t²<br>4 m = V0 * 1,5 s + 1/2 * m/s² * (1,5 s)²<br>V0 = 10 m/s<br>
                    <?php

                    $altura_4 = 4;
                    $t_4 = 1.5;
                    $aceleracion_4 = 9.8;

                    echo "La velocidad inicial al lanzar las llaves es de " . ($altura_4 + (1/2) * $aceleracion_4 * pow($t_4,2)) / $t_4 . " metros por segundo.<br>";

                    ?>
                    <strong>b)</strong>Cual era la velocidad de las llaves justo antes que fueran atrapadas?
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
                    <strong>This is the third item's accordion body.</strong><hr> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
                    <strong>Una piloto de arrancones inicia la marcha de su vehiculo desde el reposd y acelera a 10 m /seg² durante una distancia total de 400 m (%a de milla)</strong><hr><strong>a)</strong>¿Cuánto tiempo tarda el carro en recorrer esta distancia?<br>a = 10 m/s²ㅤㅤㅤㅤㅤV0 = 0ㅤㅤㅤㅤㅤx = 400 m<br>x = V0 * t + 1/2 * a * t²<br>x = 1/2 * a * t²<br>t² = (2 * x) / a<br>t = √((2 * x) / a)<br>t = √((2 * 400 m) / 10 m/s²)<br>t = 8,94 s<br>
                    <?php 

                    $posicion_2 = 400;
                    $aceleracion_2 = 10;

                    echo "El carro se demora " . sqrt((2*$posicion_2)/$aceleracion_2) . " segundos en recorrer la distancia.<br>"; 
                    ?>
                    <br><strong>b)</strong> ¿Cuál es su velocidad al final del recorrido?<br>Vf² = V0² + 2 * a * x<br>Vf² = 2 * a * x<br>Vf = √(2 * a * x)<br>Vf = √(2 * 100 m/s² * 400 m)<br>Vf = 89,44 s<br>
                    <?php 


                    echo "La velocidad al final del recorido es de " . sqrt(2 * $aceleracion_2 * $posicion_2) . " metros por segundos al cuadrado."; 
                    ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>