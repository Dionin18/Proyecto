<?php

# datos de conexion a la base de datos

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<?php

$sql = "SELECT * FROM usuario";
$resultado = $conexion->query($sql);


    while ($col = $resultado->fetch_array()) {
        echo '<form action="eliminar_usuario_final.php" method="POST" enctype="multipart/form-data">';
        echo 'Nombre: '.$col[0] . ' ' . $col[1] . '<br>Correo: ' . $col[4] .'<input type="hidden" name="correo" value="' . $col[4] . '">';
        if($col[7] != 0){
            echo '<br><input type="submit" value="Eliminar Usuario" class="btn btn-outline-primary">';
        }
        echo '</form>';
        echo "<br><br>";
    }


mysqli_close($conexion);

?>