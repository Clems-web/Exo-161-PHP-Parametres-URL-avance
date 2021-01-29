<?php

echo "<a href=index3.php?dateDebut=2/05/2016&dateFin=27/11/2016>Click-moi si tu l'oses</a><br>";

if (isset($_GET["dateDebut"]) && isset($_GET["dateFin"])) {
    echo "ouais c'est là";
}

