<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["usuari"], $_POST["pwd"])) {

        $usuari = trim($_POST["usuari"]);
        $pwd = $_POST["pwd"];

        if ($usuari !== "" && $pwd !== "" && $usuari === $pwd) {

            session_regenerate_id(true);
            $_SESSION["usuari"] = $usuari;

            header("Location: pagina1.php");
            exit();

        } else {
            header("Location: index.html");
            exit();
        }

    }
}

header("Location: index.html");
exit();
?>