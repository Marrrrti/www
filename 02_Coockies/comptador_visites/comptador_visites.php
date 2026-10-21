
<?php
session_start();

// Si no existeix el comptador, el posem a zero
if (!isset($_SESSION["visites"])) {
    $_SESSION["visites"] = 0;
}

// Incrementem el comptador cada vegada que entrem a la pàgina
$_SESSION["visites"]++;

// Comprovem si ja ha fet una compra amb descompte
if (!isset($_SESSION["compra"])) {
    $_SESSION["compra"] = false;
}

// Inicialitzem el descompte
$descompte = 0;

// Si encara no ha comprat amb descompte, mirem les visites
if ($_SESSION["compra"] == false) {

    if ($_SESSION["visites"] >= 10) {
        $descompte = 50;
    } elseif ($_SESSION["visites"] >= 5) {
        $descompte = 20;
    }
}

// Quan es prem el botó de compra
if (isset($_POST["comprar"])) {

    // Comprovem quin codi ha introduït l'usuari
    $codi = $_POST["codi"];

    if ($codi == "BOTIGA20" && $_SESSION["visites"] >= 5 && $_SESSION["visites"] < 10 && $_SESSION["compra"] == false) {

        $_SESSION["compra"] = true;
        $missatge = "Compra realitzada amb un 20% de descompte!";

    } elseif ($codi == "BOTIGA50" && $_SESSION["visites"] >= 10 && $_SESSION["compra"] == false) {

        $_SESSION["compra"] = true;
        $missatge = "Compra realitzada amb un 50% de descompte!";

    } elseif ($codi == "" && $descompte == 0) {

        $missatge = "No tens cap descompte disponible. Compra realitzada sense descompte.";

    } else {

        $missatge = "El codi de descompte no és vàlid.";
    }

    // Després de la compra, eliminem el descompte disponible
    if ($_SESSION["compra"] == true) {
        $descompte = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Comptador de visites</title>
</head>

<body>

    <h1>Botiga online</h1>

    <p>Has visitat aquesta pàgina
        <strong><?php echo $_SESSION["visites"]; ?></strong> cops.
    </p>

    <?php
    // Mostrem l'oferta corresponent
    if ($descompte == 20) {
        echo "<p>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</p>";
    } elseif ($descompte == 50) {
        echo "<p>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</p>";
    }

    // Mostrem el resultat de la compra
    if (isset($missatge)) {
        echo "<p><strong>$missatge</strong></p>";
    }
    ?>

    <h2>Producte</h2>

    <p>Preu del producte: 100 €</p>

    <form method="post" action="">

        <label for="codi">Codi de descompte:</label>

        <input type="text" id="codi" name="codi">

        <button type="submit" name="comprar">Comprar</button>

    </form>

</body>

</html>
