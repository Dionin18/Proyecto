<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cuenta</title>

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
        <form action="procesarSignup.php" method="POST" enctype="multipart/form-data">
        <div class="container">
        <div class="row">
            <div class="col">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h1 style="text-align: center;">REGISTRAR CUENTA</h1>
            <hr>

            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" placeholder="Nombre" name="nombre" id="nombre" required>
            
            <i class="fa fa-address-card" aria-hidden="true"></i>
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" placeholder="Apellido" name="apellido" id="apellido" required>

            <i class="fa fa-id-card" aria-hidden="true"></i>
            <label for="rut" class="form-label">Rut</label>
            <input type="text" placeholder="xx.xxx.xxx-x" pattern="[0-9.-]{11}" name="rut" id="rut" required>

            <i class="fa fa-phone" aria-hidden="true"></i>
            <label for="telefono" class="form-label">Telefono (+56)</label>
            <input type="tel" placeholder="9 99999999" pattern="[0-9]{9}" name="telefono" id="telefono" required>

            <i class="fa fa-envelope-open" aria-hidden="true"></i>
            <label for="correo" class="form-label">Correo</label>
            <input type="email" placeholder="xxxxxxxx@xxxx.com" name="correo" id="correo" required>

            <i class= "fa-solid fa-unlock"></i>
            <label for="contraseña" class="form-label">Clave</label>
            <input type="password" name="contraseña" id="contraseña" placeholder="(8 a 15 caracteres)" maxlength="15" minlength="8" required>

            <i class= "fa-solid fa-unlock"></i>
            <label for="contraseña2" class="form-label">Repetir Clave</label>
            <input type="password" name="contraseña2" id="contraseña2" minlength="8" maxlength="15" onkeyup='check();' required placeholder="(8 a 15 caracteres)">
            <label id="msg"></label>

            <script type="text/javascript">
              var check = function() {
                if(document.getElementById('contraseña').value !=
                  document.getElementById('contraseña2').value){
                  document.getElementById('msg').style.color = 'red';
                  document.getElementById('msg').innerHTML = 'Las contraseñas no coinciden';
                }else{
                    document.getElementById('msg').innerHTML = '';
                    }
                }   
                </script>

              <i class="fa fa-camera" aria-hidden="true"></i>
              <label for="foto" class="form-label">Foto de perfil</label>
              <input type="file" name="foto" id="foto"required>
              <br>
              <input type="submit" value="Crear Cuenta" class="btn btn-outline-secondary">
        
        <hr>
              </div></div></div>
        </form>

        <!--JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
