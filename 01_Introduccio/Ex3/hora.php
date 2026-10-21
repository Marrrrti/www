<?php
date_default_timezone_set('Europe/Madrid');

$hora = (int) date('G');   // hora en format 0-23, sense zero al davant

if ($hora >= 5 && $hora < 14) {
    $salutacio = "Bon dia";
} elseif ($hora >= 14 && $hora < 19) {
    $salutacio = "Bona tarda";
} else {
    $salutacio = "Bona nit";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta>
  <title>Salutació</title>
</head>
<body>
  <h1><?= $salutacio ?></h1>
  <p>Hora del servidor: <?= date('H:i:s') ?></p>
</body>
</html>