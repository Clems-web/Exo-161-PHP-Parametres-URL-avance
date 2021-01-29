<?php

echo "<a href=index6.php?batiment=12&salle=101>Click-moi si tu l'oses</a><br>";

if (isset($_GET["batiment"]) && isset($_GET["salle"])) {
    echo "Batiment " . $_GET["batiment"] . " " . "salle ".$_GET["salle"] . ", bonne séance !";
}
