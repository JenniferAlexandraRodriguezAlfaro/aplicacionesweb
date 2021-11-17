<?php
$nombre = "Rodriguez Alfaro Jennifer Alexandra";
$matricula = "203241073";
$fecha = date('Y') . "-" . date('m') ."-". date('d');
$hora = date('H') . ":" . date('i') .":". date('s');
?>
   <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="none, noindex nofollow" />
        <meta name="description" content="<?php echo $matricula; ?>" />
        <meta name="author" content="<?php echo $nombre; ?>" />
        <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.0/dist/slate/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" rel="stylesheet"  />
        <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" rel="stylesheet"  />
        <link href="nasa_apod.css" rel="stylesheet"/>
        <link href="https://www.utn.red/favicon.png" rel="shortcut icon" type="image/x-icon">
        <title><?php echo $nombre . ' ' . $matricula; ?> </title>
    </head>
    <body>
        <div class="container text-center contenedor">
            <div id="divFormulario" class="card">
                <div class="card-header">
                    Seleccion Dia - Mes -Año, por favor...
                </div>
                <div class="card-body">
                    <form id= "formDatos">
                        <div class="row">
                            <div class = "col">
                                <select id= "selectDia" name="selectDia">
                                    <option value = "0" >0</option>
                                </select>
                            </div>
                            <div class = "col">
                                <select id = "selectMes" name= "selectMes">
                                    <option value = "0">0</option>
                                </select>
                            </div>
                            <div class = "col">
                                <select id = "selectAno" name= "selectAno">
                                    <option value = "0">0</option>
                                </select>
                            </div>
                        </div>
                        <div class = "btn-group btn-block my-4" role="group">
                            <a href = "javascript: buscar();" type="button" class="btn btn-secondary btn-lg">Buscar Foto</a>
                        </div>
                    </form>
                </div>
            </div>              
            <p>&nbsp;</p>
            <div id="divTarjeta" class="card tarjeta">
                <img id="imagenChica" src="https://www.utn.red/imagenes/nasa_logo.png" class="img-fluid" alt = "Logo Nasa">
                <div class ="card-body">
                    <h1 id="h1Titulo" class="fw-bold">Titulo</h1>
                    <h5 id="h5Nombre" class="card-title">Autor</h5>
                    <p id="pTexto" class="card-text">Descripcion</p>
                    <p><?php echo $matricula; ?></p>
                    <div class="btn-group d-flex" role="group">
                        <a id="botonVerHD" href="#" target="_blank" type="button" class="btn btn-primary w-100">Ver imagen HD</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/c6c9331c4f.js" crossorigin="anonymous" ></script>
        <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <script src="nasa_apod.js"></script>  
    </body>
</html>