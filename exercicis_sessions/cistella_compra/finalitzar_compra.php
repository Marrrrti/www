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

if (empty($_SESSION["cistella"])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resum de la compra</title>
</head>
<body>

    <h1>Resum de la compra</h1>

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

            if (!isset($productes[$id])) {
                continue;
            }

            $nom = $productes[$id]["nom"];
            $preu = $productes[$id]["preu"];
            $subtotal = $preu * $quantitat;
            $total += $subtotal;
        ?>

            <tr>
                <td>
                    <?= htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') ?>
                </td>
                <td><?= $quantitat ?></td>
                <td><?= number_format($preu, 2, ',', '.') ?> €</td>
                <td><?= number_format($subtotal, 2, ',', '.') ?> €</td>
            </tr>

        <?php endforeach; ?>

        <tr>
            <th colspan="3">Total de la compra</th>
            <th><?= number_format($total, 2, ',', '.') ?> €</th>
        </tr>
    </table>

    <br>

    <form action="confirmar_compra.php" method="POST">
        <button type="submit">Confirmar compra</button>
    </form>

    <p>
        <a href="index.html">Continuar comprant</a>
        |
        <a href="cistella_compra.php">Tornar a la cistella</a>
    </p>

</body>
</html>