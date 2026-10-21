<?php

// Comprovem si existeixen les cookies
if (!isset($_COOKIE["majoredat"]) ||
    !isset($_COOKIE["idioma"]) ||
    !isset($_COOKIE["moneda"])) {

    header("Location: bodega.php");
    exit();
}

// Llegim les cookies
$edat = $_COOKIE["majoredat"];
$idioma = $_COOKIE["idioma"];
$moneda = $_COOKIE["moneda"];

// Comprovem la moneda i definim els preus
if ($moneda == "euros") {
    $preu1 = "39 €";
    $preu2 = "12 €";

} elseif ($moneda == "lliures") {
    $preu1 = "34 £";
    $preu2 = "10 £";

} else {
    $preu1 = "43 $";
    $preu2 = "13 $";
}

// Si és menor d'edat, mostrem un missatge
if ($edat == "no") {

    if ($idioma == "ca") {
        $missatge = "No et podem vendre alcohol si ets menor d'edat.";
    } elseif ($idioma == "es") {
        $missatge = "No podemos venderte alcohol si eres menor de edad.";
    } else {
        $missatge = "We cannot sell alcohol to anyone under the legal drinking age.";
    }

} else {

    // Si és major d'edat, mostrem els productes

    if ($idioma == "ca") {
        $titol = "Els nostres productes";
        $producte1 = "Vi Les Terrasses";
        $producte2 = "Vi de la Casa";

    } elseif ($idioma == "es") {
        $titol = "Nuestros productos";
        $producte1 = "Vino Les Terrasses";
        $producte2 = "Vino de la Casa";

    } else {
        $titol = "Our products";
        $producte1 = "Les Terrasses Wine";
        $producte2 = "House Wine";
    }
}

?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Bodega - Informació</title>
</head>

<body>

    <?php

    // Mostrem el missatge si és menor d'edat
    if ($edat == "no") {

        echo "<h2>$missatge</h2>";

    } else {

        // Mostrem els productes si és major d'edat

        echo "<h1>$titol</h1>";

        echo "<p>$producte1: $preu1</p>";
        echo "<p>$producte2: $preu2</p>";
    }

    ?>

    <br>

    <a href="bodega.php">Tornar a l'inici</a>

</body>

</html>