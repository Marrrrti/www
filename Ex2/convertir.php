<?php
$tipus = 1.08; // 1 € ≈ 1,08 $ (valor aproximat)

if (isset($_POST["quantitat"]) && isset($_POST["direccio"]) && is_numeric($_POST["quantitat"])) {
    $q = (float) $_POST["quantitat"];

    if ($_POST["direccio"] === "eur_usd") {
        $resultat = round($q * $tipus, 2);
        echo "$q € són $resultat $";
    } elseif ($_POST["direccio"] === "usd_eur") {
        $resultat = round($q / $tipus, 2);
        echo "$q $ són $resultat €";
    } else {
        echo "Direcció de conversió no vàlida.";
    }
} else {
    echo "Introdueix una quantitat numèrica vàlida.";
}

echo '<br><a href="index.php">Tornar</a>';
?>