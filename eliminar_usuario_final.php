<?php

function eliminar($conexion, $correo){
    $sql = "DELETE FROM usuario WHERE correo = '$correo'; ";

    $resultado = $conexion->query($sql);
    if ($resultado){
        require_once("clonindex.php");
    }else{
        die("Hubo un error al eliminar al usuario.");
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

$correo = $_POST["correo"];



eliminar($conexion, $correo);

?>