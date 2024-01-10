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

            <form action="verifLogin.php" method="POST" enctype="multipart/form-data">

                <label for="correo" class="form-label">Correo:</label>
                <input type="email" placeholder="ejemplo@ejemplo.com" name="correo" id="correo" class="form-control" required>

                <br>

                <label for="contraseña" class="form-label">Contraseña:</label>
                <input type="password" name="contraseña" id="contraseña" class="form-control" maxlength="15" minlength="8" onkeyup='check();' required>
                
                <br>

                <input type="submit" value="Iniciar Sesion" class="btn btn-outline-primary btn-lg">
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>
