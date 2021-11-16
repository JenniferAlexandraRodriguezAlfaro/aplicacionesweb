<?php
$nombre = "Rodriguez Alfaro Jennifer Alexandra";
$matricula = "203241073";
$fecha = date('Y') . "-" . date('m') ."-". date('d');
$hora = date('H') . ":" . date('i') .":". date('s');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
       <meta charset="UTF-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <meta name="robots" content="none, noindex, nofollow" />
       <meta name="description" content="<?php echo $matricula; ?>" />
       <meta name="author" content="<?php echo $nombre; ?>" />
       <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.0/dist/slate/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
       <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" rel="stylesheet" />
       <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" rel="stylesheet" />
       <link href="rick_and_morty.css" rel ="stylesheet" />
       <link href="https://www.utn.red/favicon.png" rel="shortcut icon" type="image/x-icon">
       <title><?php echo $nombre.' ' .$matricula; ?></title>
    </head>
    <doby>
        <div class="container text-center contenedor">
            <div id="divTarjeta" class="card tarjeta">
                <img id="imgPersonaje" src="https://www.utn.edu.red/imagenes/rick_and_morty.png" class="card-img-top" alt="Rick and Morty">
                <div class="card-body">
                    <h5 id="h5Nombre" class="card-title">Rick and Morty</h5>
                    <p id="pTexto" class="card-text">Humans, Alives</p>
                    <h1 id="h1Genero" class="fw-bold">♂ ⚧ ♀</h1>
                    <p><?php echo $matricula; ?></p>
                    <div class="btn-group d-flex" role="group">
                        <a id="buttonRegresar" href="javascript: mover('R');" type="button" class="btn btn-primary w-100">&LeftArrow;</a>
                        <a id="buttonAvenzar" href="javascript: mover('A');" type="button" class="btn btn-primary w-100">&rightarrow;</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/c6c9331c4f.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <script src="rick_and_morty.js"></script>
    </body>
</html>