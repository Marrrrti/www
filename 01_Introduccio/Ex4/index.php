<!DOCTYPE html>
<html>
<head>
  <meta>
  <title>Enquesta musical</title>
</head>
<body>
  <h1>Quin estil de música t'agrada més?</h1>

  <form action="resultat.php" method="post">
    <label><input type="radio" name="estil" value="rock" required> Rock</label><br>
    <label><input type="radio" name="estil" value="pop"> Pop</label><br>
    <label><input type="radio" name="estil" value="classica"> Clàssica</label><br>
    <label><input type="radio" name="estil" value="jazz"> Jazz</label><br>
    <label><input type="radio" name="estil" value="rap"> Rap</label><br>
    <button type="submit">Envia la resposta</button>
  </form>
</body>
</html>