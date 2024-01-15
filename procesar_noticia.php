<?php

error_reporting(E_ERROR);
session_start();
$correo = $_SESSION["email"];
$contraseña = $_SESSION["pass"];
$admin = $_SESSION["admin"];


function guardar($conexion, $titulo, $subtitulo, $enlace){
    $sql = "INSERT INTO noticia (titulo, subtitulo, enlace) VALUES ('$titulo', '$subtitulo', '$enlace')";

    // ejecutar la consulta
    
    $resultado = mysqli_query($conexion, $sql);
    
    if($resultado){
        echo "<br>La noticia se ingreso correctamente.<br>";
        echo "<a href='subir_noticia.php'> <button type='button' class='btn btn-outline-secondary btn-lg'>Subir otra noticia</button> </a>";
        echo "<a href='clonIndex.php'> <button type='button' class='btn btn-outline-secondary btn-lg'>Volver al inicio</button> </a>";
        return True;
    }else{
        echo "<br>Error al guardar la noticia.<br>";
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


$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$enlace = $_POST["link"];


$sql = "SELECT * FROM noticia WHERE titulo='$titulo';";
$resultado = $conexion->query($sql);

if($resultado->fetch_array() > 1){
    die("La noticia ingresada ya existe, intentelo de nuevo.");
}


$sql = "SELECT * FROM noticia WHERE enlace='$enlace';";
$resultado = $conexion->query($sql);

if($resultado->fetch_array() > 1){
    die("La noticia ingresada ya existe, intentelo de nuevo.");
}


guardar($conexion, $titulo, $subtitulo, $enlace);

//cerrar la conexion
mysqli_close($conexion);