<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Noticia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    

</head>
<body>
    <h1 style="text-align: center;">Editar Noticia</h1>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <form action="modificar_noticia.php" method="post" enctype="multipart/form-data">
        
                    <label for="link" class="form-label">Ingrese el enlace de la noticia a modificar:</label><br>
                    <input type="text" name="link" id="link" class="form-control" required><br>
                    
                    
                    <label class="form-label">Que desea hacer?</label>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <input type="radio" id="Modificar" name="accion" value="1">
                                    <label for="Modificar">Modificar</label>   
                                </th>

                                <th scope="col">
                                    <input type="radio" id="Eliminar" name="accion" value="0">
                                    <label for="Eliminar">Eliminar</label>
                                </th>
                            </tr>
                        </thead>
                    </table>
                    
                    <input type="submit" value="Enviar" class="btn btn-outline-secondary btn-lg" name="action" >
                
            </div> 
            </form>
        </div>
        </div>   

    
</body>
</html>