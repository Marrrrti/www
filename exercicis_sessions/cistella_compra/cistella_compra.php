<?php
session_start();

$productes = [
    "portatil" => [
        "nom" => "Ordinador portàtil",
        "preu" => 800
    ],
    "ratoli" => [
        "nom" => "Ratolí",
        "preu" => 25
    ]
];

if (!isset($_SESSION["cistella"])) {
    $_SESSION["cistella"] = [];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $idProducte = $_POST["producte"] ?? "";
    $quantitat = filter_input(
        INPUT_POST,
        "quantitat",
        FILTER_VALIDATE_INT
    );

    if (
        isset($productes[$idProducte]) &&
        $quantitat !== false &&
        $quantitat !== null &&
        $quantitat >= 1 &&
        $quantitat <= 99
    ) {

        $quantitatActual = $_SESSION["cistella"][$idProducte] ?? 0;

        if ($quantitatActual + $quantitat <= 99) {
            $_SESSION["cistella"][$idProducte] =
                $quantitatActual + $quantitat;

            $missatge = "Producte afegit correctament.";
        } else {
            $missatge = "No pots tenir més de 99 unitats d'un producte.";
        }

    } else {
        $missatge = "Les dades introduïdes no són vàlides.";
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cistella de compra</title>
</head>
<body>

    <h1>La teva cistella</h1>

    <?php if (isset($missatge)): ?>
        <p><?= htmlspecialchars($missatge, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <?php if (empty($_SESSION["cistella"])): ?>

        <p>La cistella està buida.</p>

    <?php else: ?>

        <table border="1" cellpadding="8">
            <tr>
                <th>Producte</th>
                <th>Quantitat</th>
                <th>Preu unitari</th>
                <th>Subtotal</th>
            </tr>

            <?php
            $total = 0;

            foreach ($_SESSION["cistella"] as $id => $quantitat):
                $preu = $productes[$id]["preu"];
                $subtotal = $preu * $quantitat;
                $total += $subtotal;
            ?>

                <tr>
                    <td>
                        <?= htmlspecialchars(
                            $productes[$id]["nom"],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>
                    </td>

                    <td><?= $quantitat ?></td>

                    <td><?= number_format($preu, 2, ',', '.') ?> €</td>

                    <td><?= number_format($subtotal, 2, ',', '.') ?> €</td>
                </tr>

            <?php endforeach; ?>

            <tr>
                <th colspan="3">Total</th>
                <th><?= number_format($total, 2, ',', '.') ?> €</th>
            </tr>
        </table>

    <?php endif; ?>

    <p>
        <a href="index.html">Continuar comprant</a>
        |
        <a href="finalitzar_compra.php">Finalitzar compra</a>
    </p>

</body>
</html>