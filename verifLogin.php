<?php
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
$contraseña = $_POST["contraseña"];


$sql = "SELECT * FROM usuario WHERE correo='$correo';";
$resultado = $conexion->query($sql);


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
      body{
        background-color: black;
        color: #FFF;
      }
      input[type="email"], input[type="password"]{
        background-color: rgb(35,35,35);
        border: 1px solid rgb(35,35,35);
        color: white;
      }
    </style>
    
</head>
<body style="body">
    <div class="container">
        <div class="row">
            <div class="col">
            <?php
            if($resultado->fetch_array() > 1){
                $sql = "SELECT * FROM usuario WHERE contraseña='$contraseña';";
                $resultado = $conexion->query($sql);
            
                if($resultado->fetch_array() > 1){
                    echo "Se inicio sesion correctamente.<br>";
                    echo "<a href='index.php'><button type='button' class='btn btn-dark'>Volver a la pagina principal</button></a>";
                }else{
                    echo "Contraseña incorrecta. Intentelo de nuevo.";
                }
            }else{
                echo "Correo incorrecto. Intentelo de nuevo.";
            }
            ?>
            </div>
        </div>
    </div>
    
</body>
</html> 
<?php
//cerrar la conexion
mysqli_close($conexion);