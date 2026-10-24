<?php
session_start();

if (!isset($_SESSION["usuari"])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina 1</title>
</head>
<body>

    <header>
        <h2>Benvingut/da, <?= htmlspecialchars($_SESSION["usuari"], ENT_QUOTES, 'UTF-8') ?>!</h2>
    </header>

    <h1>Pàgina d'informació 1</h1>

    <p>Aquesta és la primera pàgina d'informació del lloc web.</p>

    <nav>
        <a href="pagina1.php">Pàgina 1</a> |
        <a href="pagina2.php">Pàgina 2</a> |
        <a href="logout.php">Tancar sessió</a>
    </nav>

</body>
</html>