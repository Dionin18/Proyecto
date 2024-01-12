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
    <title>Document</title>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</head>
<body>
  <h1 style="text-align: center;">no se que poner</h1>
    <div class="container">
        <div class="row">
            <div class="col">

            <form action="api.php" method="POST" enctype="multipart/form-data">

                <label for="id_" class="form-label">Ingresa un numero (1 a 83):</label>
                <input type="number" min="1" max="83" name="id_" id="id_" class="form-control" required>

                <br>

                <input type="submit" value="Hacer consulta" class="btn btn-outline-secondary">
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>
