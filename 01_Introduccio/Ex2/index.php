<!DOCTYPE html>
<html>
<head>
  <meta>
  <title>Conversor euros / dòlars</title>
</head>
<body>
  <h1>Conversor</h1>

  <h2>Euros → Dòlars</h2>
  <form action="convertir.php" method="POST">
    <input type="hidden" name="direccio" value="eur_usd">
    <label>Quantitat en euros:
      <input type="number" name="quantitat" step="0.01" min="0" required>
    </label>
    <button type="submit">Converteix</button>
  </form>

  <h2>Dòlars → Euros</h2>
  <form action="convertir.php" method="POST">
    <input type="hidden" name="direccio" value="usd_eur">
    <label>Quantitat en dòlars:
      <input type="number" name="quantitat" step="0.01" min="0" required>
    </label>
    <button type="submit">Converteix</button>
  </form>
</body>
</html>