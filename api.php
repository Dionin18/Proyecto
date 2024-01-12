<?php

// Documentación: https://pokeapi.co/docs/v2#pokemon-section
//https://theofficeapi.dev/api/characters
  
// Nombre del pokemon
$id_personaje = $_POST["id_"];

$url = "https://theofficeapi.dev/api/character/" . $id_personaje;

// Inicializa cURL
$ch = curl_init();

// Configurar las opciones cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Ejecutr la solicitud y almacenar la respuesta
$response = curl_exec($ch);

// Cerramos la conexion
curl_close($ch);

//echo $response;

$data_personaje = json_decode($response, true);
?>
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
            <h1>Tu personaje es...</h1>
        </div>
        <br>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $data_personaje["name"]; ?>
                </h5>

                <p class="card-text">
                    <?php
                        if($data_personaje['gender'] == ""){
                            echo "Genero: No disponible";
                        }else{
                            echo "Genero: " . $data_personaje["gender"];
                        }
                    ?>
                </p>

                <p class="card-text">
                    <?php
                       if($data_personaje['marital'] == ""){
                            echo "Soltero";
                        }else{
                            echo "Casado: Con " . $data_personaje["marital"];
                    }
                    ?>
                </p>

                <p class="card-text">
                    <?php
                       echo "Tuvo su primera aparición en el capitulo " . $data_personaje["firstAppearance"];
                    ?>
                </p>
                <p class="card-text">
                    <?php
                       echo "Su ultima aparicion fue en el capitulo " . $data_personaje["lastAppearance"];
                    ?>
                </p>

                <p class="card-text">
                    <?php
                       echo "Actor: " . $data_personaje["actor"];
                    ?>
                </p>
                <a href="api_id.php" class="card-link">Volver a intentarlo</a>
            </div>
        </div>
    </div>
    <br>
    <!--CIERRE TITULAR-->

</div>
    
</body>
</html>