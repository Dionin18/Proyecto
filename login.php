<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>

    <!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="Styles.css" rel="stylesheet">

    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!--ICONOS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
    <body style="background-color: aliceblue;">
        <form action="verifLogin.php" method="POST" enctype="multipart/form-data">
            <h1>INICIAR SESION</h1>
            <hr>

            <i class="fa fa-envelope-open" aria-hidden="true"></i>
            <label for="correo" class="form-label">Correo:</label>
            <input type="email" placeholder="xxxxxxxx@xxxx.com" name="correo" id="correo" required> 
            

            <i class= "fa-solid fa-unlock"></i>
            <label for="contraseña" class="form-label">Clave:</label>
            <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" maxlength="15" minlength="8" required>

            <hr>
            <button type="submit">Iniciar Sesion</button>   
            <a href="signup.php">Crear Cuenta</a>
    
        
        
        </form>

        <!--JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
