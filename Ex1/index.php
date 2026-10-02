<!DOCTYPE html>
<html>
    <head>
        <meta>
        <title>Ex 1</title>
    </head>
    <body>
        <h1>Formulari de contacte</h1>
        <form action="logic.php" method="post">
            <label>Nom <input type="text" name="nom" required></label><br><br>
            <label>Cognoms <input type="text" name="cognoms" required></label><br><br>
            <label>Email <input type="email" name="email" required></label><br><br>
             <label>Missatge <textarea name="missatge" required></textarea></label><br><br>

            <input type="submit" value="Envia">
        </form>
    </body>
</html>