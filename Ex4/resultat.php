<?php 

if (isset($_POST["estil"])) {
    $estil = $_POST["estil"];

    if ($estil=="rock"){
        echo "Las rocas molan";}
    elseif($estil=="pop"){
        echo "El pop esta bé, el pol no";}
    elseif($estil=="classica"){
        echo "Vale Mozart";}
    elseif($estil="jazz"){
        echo "Es Lisa Simpson";}
    elseif($estil=="rap"){
        echo "Real Slim Shady";}
    else {echo "Estil no valid";}
} else{ echo "No has triat estil";}

echo '<br><a href="index.php">Tornar</a>';

?>