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
        <link href="marvel.css" rel="stylesheet" />
        <link href="https://www.utn.red/favicon.png" rel="shortcut icon" type="image/x-icon">
        <title><?php echo $nombre . ' ' . $matricula; ?></title>
    </head>
    <body>
        <div class="container contenedor">
            <p id="pTop">&nbsp;</p>
            <table id="tableDatos">
                <thead>
                    <tr class="trDatos text-center text-warning">
                        <th><h2>Marvel API</h2></th>
                    </tr>
                </thead>
                <tbody id="tbodyDatos">
                    <tr class="trDatos">
                        <td>Esperando datos...</td>
                    </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <p class="text-center">
                <a href="javascript: obtenerDatos();" type="button" class="btn btn-outline-warning">Siguientes....</a>
            </p>
        </div>    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/c6c9331c4f.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
        <script src="marvel.js"></script>
    </body>
</html>