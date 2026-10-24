<?php
session_start();

if (
    $_SERVER["REQUEST_METHOD"] !== "POST" ||
    empty($_SESSION["cistella"])
) {
    header("Location: index.html");
    exit();
}

unset($_SESSION["cistella"]);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra confirmada</title>
</head>
<body>

    <h1>Compra confirmada!</h1>

    <p>El pagament s'ha simulat correctament.</p>

    <p>La teva cistella s'ha buidat.</p>

    <p>
        <a href="index.html">Tornar a la botiga</a>
    </p>

</body>
</html>