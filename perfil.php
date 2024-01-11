<?php
session_start();
$correo = $_SESSION["email"];
$contraseña = $_SESSION["pass"];

if(($correo and $contraseña) != NULL){
    echo "<h1>sesion iniciada</h1>";
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
    <style>
        img{
            height: 100px;
            width: 100px;
        }
    </style>
</head>

<?php

require_once "phpqrcode/qrlib.php";

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


$sql = "SELECT * FROM usuario WHERE correo='$correo';";
$resultado = $conexion->query($sql);

$aux;

while($col = $resultado->fetch_array()) {
    $aux = $col;
}


?>

<body>

    foto: <img src="<?php echo $aux[6]; ?>"><br>
    nombre: <?php echo "$aux[0] $aux[1]"?><br>
    rut: <?php echo $aux[2];?><br>
    telefono: <?php echo $aux[3];?><br>
    correo: <?php echo $aux[4];?><br>

    
</body>
<?php

mysqli_close($conexion);



?>