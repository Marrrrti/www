<?php
if (isset($_POST["preu"]) && isset($_POST["iva"])) {
    $preu = (float) $_POST["preu"];
    $iva  = (float) $_POST["iva"];

    $total = $preu + ($preu * $iva / 100);

    echo "El resultat és: " . round($total, 2) . " €";
} else {
    echo "Falten dades.";
}
echo '<br><a href="index.php">Tornar</a>';
?>