<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</head>
<body>
  <h1 style="text-align: center;">Registrar Cuenta</h1>
    <div class="container">
        <div class="row">
            <div class="col">

            <form action="procesarSignup.php" method="POST" enctype="multipart/form-data">

                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" placeholder="Nombre" name="nombre" id="nombre" class="form-control" required>

                <br>

                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" placeholder="Apellido" name="apellido" id="apellido" class="form-control" required>

                <br>

                <label for="rut" class="form-label">Rut:</label>
                <input type="text" placeholder="xx.xxx.xxx-x" pattern="[0-9.-]{11}" name="rut" id="rut" class="form-control" required>

                <br>

                <label for="telefono" class="form-label">Telefono (+56):</label>
                <input type="tel" placeholder="9 99999999" pattern="[0-9]{9}" name="telefono" id="telefono" class="form-control" required>

                <br>

                <label for="correo" class="form-label">Correo:</label>
                <input type="email" placeholder="xxxxxx@xxxx.com" name="correo" id="correo" class="form-control" required>

                <br>

                <label for="contraseña" class="form-label">Contraseña (8 a 15 caracteres):</label>
                <input type="password" name="contraseña" id="contraseña" class="form-control" maxlength="15" minlength="8" onkeyup='check();' required>
                <br>

                <label for="contraseña2" class="form-label">Repetir Contraseña:</label>
                <input type="password" name="contraseña2" id="contraseña2" class="form-control" minlength="8" maxlength="15" onkeyup='check();' required>
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

                <br>

                <label for="foto" class="form-label">Foto de perfil:</label>
                <input type="file" name="foto" id="foto" class="form-control" required>
                <br>
                <input type="submit" value="Crear Cuenta" class="btn btn-outline-secondary">
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>
