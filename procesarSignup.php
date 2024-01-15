<?php

function guardar($conexion, $nombre, $apellido, $rut, $telefono, $correo, $contraseña, $foto){
    $sql = "INSERT INTO usuario (nombre, apellido, rut, telefono, correo, contraseña, foto) VALUES ('$nombre', '$apellido', '$rut', '$telefono', '$correo', '$contraseña', '$foto')";

    // ejecutar la consulta
    
    $resultado = mysqli_query($conexion, $sql);
    
    if($resultado){
        include_once("index.php");
        return True;
    }else{
        echo "<br>Error al crear la cuenta.<br>";
        return False;
    }
} 

function valida_rut($rut)
{
    $rut = preg_replace('/[^k0-9]/i', '', $rut);
    $dv  = substr($rut, -1);
    $numero = substr($rut, 0, strlen($rut)-1);
    $i = 2;
    $suma = 0;
    foreach(array_reverse(str_split($numero)) as $v)
    {
        if($i==8)
            $i = 2;

        $suma += $v * $i;
        ++$i;
    }

    $dvr = 11 - ($suma % 11);
    
    if($dvr == 11)
        $dvr = 0;
    if($dvr == 10)
        $dvr = 'K';

    if($dvr == strtoupper($dv))
        return true;
    else
        return false;
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


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$rut = $_POST["rut"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];


$sql = "SELECT * FROM usuario WHERE rut='$rut';";
$resultado = $conexion->query($sql);

if($resultado->fetch_array() > 1){
    echo "El rut ingresado ya existe, intentelo de nuevo.";
    die();
}


$sql = "SELECT * FROM usuario WHERE correo='$correo';";
$resultado = $conexion->query($sql);

if($resultado->fetch_array() > 1){
    echo "El correo ingresado ya existe, intentelo de nuevo.";
    die();
}


$obj_direccion = "img/";
$obj_archivo = $obj_direccion . basename($_FILES["foto"]["name"]);
move_uploaded_file($_FILES["foto"]["tmp_name"], $obj_archivo);
$foto = mysqli_real_escape_string($conexion, $obj_archivo);

if(!valida_rut($rut)){
    echo "Rut erroneo, intentelo de nuevo.";
    die();
}

guardar($conexion, $nombre, $apellido, $rut, $telefono, $correo, $contraseña, $foto);

//cerrar la conexion
mysqli_close($conexion);