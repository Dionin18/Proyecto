<?php
//datos de conexion a la base de datos
session_start();

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
$contraseña = $_POST["contraseña"];


$sql = "SELECT * FROM usuario WHERE correo='$correo';";
$resultado = $conexion->query($sql);

while($col = $resultado->fetch_array()) {
    $aux = $col;
}
$_SESSION["email"] = $aux[4];

$sql = "SELECT * FROM usuario WHERE correo='$correo';";
$resultado = $conexion->query($sql);


            if($resultado->fetch_array() > 1){
                $sql = "SELECT * FROM usuario WHERE contraseña='$contraseña';";
                $resultado = $conexion->query($sql);
                
                if($resultado->fetch_array() > 1){
                    $_SESSION["pass"] = $aux[5];
                    $_SESSION["admin"] = $aux[7];
                }else{
                    echo "Contraseña incorrecta. Intentelo de nuevo.";
                    die(require_once("login.php"));
                }
            }else{
                echo "Correo incorrecto. Intentelo de nuevo.";
                die(require_once("login.php"));
            }
//cerrar la conexion
mysqli_close($conexion);

require_once("clonindex.php");