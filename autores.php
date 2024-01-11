<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <title>The Office</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="estilos.css" rel="stylesheet">

    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <!-- BARRA NAVEGACION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0 auto;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo/imagen2.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand" href="#">The Office</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="#">Comentarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="#">API</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="#">Autores</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ms-auto"> <li class="nav-item">
                    <li>
                        <a class="nav-link navbar-brand" href="#">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="#">Registro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--CIERRE BARRA NAVEGACION-->
    
    <!-- TITULAR -->
    <div class="container">
        <div class="mt-4 p-5 bg-secondary text-white rounded">
            <h1>Autores</h1>
            <p>Esta página web ha sido creada por Emilia Gálvez y Benjamín Silva</p>
        </div>
    </div>
    <!--CIERRE TITULAR-->

    <br>

    <!--FOTOS-->
    <div class= "container">
        <div class= "row">
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                       <div class="card">
                            <img src="autores/imagen1.jpg" class="card-img-top" alt="Benjita" style="width: 60%; height:60%">
                            <div class="card-body">
                                <h5 class="card-title">Benjamín Silva</h5>
                                <p class="card-text">Joven de 19 años</p>
                                <p class="card-text">Está en su segundo año de universidad</p>
                                <p class="card-text">Ingeniero civil Informático en formación</p>
                                <p class="card-text">Jugador profesional de Fornite</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                       <div class="card">
                            <img src="autores/imagen1.png" class="card-img-top" alt="Benjita" style="width: 60%; height:60%">
                            <div class="card-body">
                                <h5 class="card-title">Emilia Gálvez</h5>
                                <p class="card-text">20 años</p>
                                <p class="card-text">Estudiante de Ingeniería civil Informática en la Universidad de Playa Ancha</p>
                                <p class="card-text">Casada con Park Chanyeol</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
        <!--JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>