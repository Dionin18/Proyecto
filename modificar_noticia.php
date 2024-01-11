<?php

function eliminar($conexion, $enlace){
    $sql = "DELETE FROM noticia WHERE enlace = '$enlace'; ";

    $resultado = $conexion->query($sql);
    if ($resultado)
        echo "<br>La noticia se elimino correctamente.<br>";
        echo "<a href='index.php'> <button type='button' class='btn btn-outline-secondary btn-lg'>Volver al inicio</button> </a>";
        
        die();
    else{
        echo "Hubo un problema al eliminar la noticia";
        die();
    }
}

function eliminar2($conexion, $enlace){
    $sql = "DELETE FROM noticia WHERE enlace = '$enlace'; ";

    $resultado = $conexion->query($sql);
    if ($resultado)
        return True;
    else{
        return False;
    }
}
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

$link = $_POST["link"];
$accion = $_POST["accion"];


$sql = "SELECT * FROM usuario WHERE enlace='$link';";
$resultado = $conexion->query($sql);

if($accion == "0"){
    eliminar($conexion, $link);
}else{
    eliminar2($conexion, $link);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Noticia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    

</head>
<body>
    <h1 style="text-align: center;">Modificar Noticia</h1>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <form action="procesar_noticia.php" method="post" enctype="multipart/form-data">

                    <label for="titulo" class="form-label">Titulo</label><br>
                    <input type="text" name="titulo" id="titulo" class="form-control" required><br>

                    <label for="subtitulo" class="form-label">Subitulo</label><br>
                    <input type="text" name="subtitulo" id="subtitulo" class="form-control" required><br>
        
                    <label for="link" class="form-label">Enlace</label><br>
                    <input type="text" name="link" id="link" class="form-control" required><br>
                    
                    
                    <input type="submit" value="Enviar" class="btn btn-outline-secondary btn-lg" name="action" >
                </form>
            </div> 
        </div>
    </div>   

    
</body>
</html>