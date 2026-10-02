<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Calculadora d'IVA</title>
</head>
<body>
    <form action="final.php" method="post">
        <label>Preu sense IVA
            <input type="number" name="preu" step="0.01" min="0" required>
        </label><br><br>
        <label>Tipus d'IVA:
            <select name="iva">
                <option value="21">General (21%)</option>
                <option value="10">Reduït (10%)</option>
                <option value="4">Superreduït (4%)</option>
            </select>
        </label><br><br>
        <button type="submit">Envia</button>
    </form>
</body>
</html>