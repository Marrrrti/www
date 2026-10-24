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
    <title>Pàgina 2</title>
</head>
<body>

    <header>
        <p>
            Usuari: <strong><?= htmlspecialchars($_SESSION["usuari"], ENT_QUOTES, 'UTF-8') ?></strong>
            |
            <a href="logout.php">Tancar sessió</a>
        </p>
    </header>

    <h1>Pàgina d'informació 2</h1>

    <p>Aquest és el contingut de la segona pàgina.</p>

    <nav>
        <a href="pagina1.php">Pàgina 1</a> |
        <a href="pagina2.php">Pàgina 2</a>
    </nav>

</body>
</html>