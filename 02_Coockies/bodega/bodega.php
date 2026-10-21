<?php

if (isset($_POST["enviar"])) {

    // Guardem les opcions en cookies durant una hora
    setcookie("majoredat", $_POST["majoredat"], time() + 3600, "/");
    setcookie("idioma", $_POST["idioma"], time() + 3600, "/");
    setcookie("moneda", $_POST["moneda"], time() + 3600, "/");

    // Anem a la pàgina d'informació
    header("Location: informacio.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Bodega</title>
</head>

<body>

    <h1>Benvingut a la bodega</h1>

    <form method="post" action="">

        <h3>Ets major d'edat?</h3>

        <input type="radio" name="majoredat" value="si" required>
        Sí

        <input type="radio" name="majoredat" value="no">
        No

        <h3>En quin idioma vols veure la web?</h3>

        <select name="idioma" required>
            <option value="ca">Català</option>
            <option value="es">Espanyol</option>
            <option value="en">Anglès</option>
        </select>

        <h3>Quina moneda vols utilitzar?</h3>

        <select name="moneda" required>
            <option value="euros">Euros (€)</option>
            <option value="lliures">Lliures (£)</option>
            <option value="dollars">Dòlars ($)</option>
        </select>

        <br><br>

        <button type="submit" name="enviar">Continuar</button>

    </form>

</body>

</html>
