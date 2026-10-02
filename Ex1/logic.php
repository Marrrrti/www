<?php

if (
    isset($_POST["nom"]) &&
    isset($_POST["cognoms"]) &&
    isset($_POST["email"]) &&
    isset($_POST["missatge"])
    ) {
    $nom =$_POST["nom"];
    $cognoms =$_POST["cognoms"];
    $email =$_POST["email"];
    $missatge =$_POST["missatge"];

    echo "Missatge rebut, $nom $cognoms. Gràcies per contactar. Et responem a $email";
      echo '<form action="index.php" method="POST"> <button>Tornar</button>
    </form>';
} else {
    echo "No s'ha desat el missatge. Error.";
    echo '<br><form action="index.php" method="POST"> <button>Tornar</button>
    </form>';
}
?>



