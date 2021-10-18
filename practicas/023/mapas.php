<?php
$nombre = "Rodriguez Alfaro Jennifer Alexandra";
$matricula = "203241073";
$fecha = date('Y') . "-" . date('m') ."-". date('d');
$hora = date('H') . ":" . date('i') .":". date('s');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none, noindex, nofollow">
    <meta name="description" content="<?php echo $matricula; ?>">
    <meta name="author" content="<?php echo $nombre; ?>">
    <link rel="stylesheet" crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.0/dist/slate/bootstrap.min.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon"  href="https://www.utn.red/favicon.png">
    <link rel="stylesheet" href="https://openlayers.org/en/v6.5.0/css/ol.css" type="text/css"> 
    <link href="mapas.css" rel="stylesheet">
    <title><?php echo $nombre . ' ' . $matricula; ?></title>
</head>
<body>
<h2>&nbsp;</h2>
<div class="container">
<div class="card text-white bg-dark text-center">

<div class="card-header">
<?php echo $matricula; ?>
</div>

<div class="card-body">
<div id="divMapa"  class="mapas"></div>
</div>

<div class="card-footer">
<?php echo $fecha . ' @ ' . $hora; ?>
</div>

</div>
</div>
<h2>&nbsp;</h2>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous" ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous" ></script>
<script src="https://kit.fontawesome.com/c6c9331c4f.js" crossorigin="anonymous" ></script>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js" crossorigin="anonymous" ></script>
<script src="https://openlayers.org/en/v6.5.0/build/ol.js" type="text/javascript"></script>
<script src="mapas.js"></script>

    
</body>
</html>