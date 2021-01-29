<?php

echo "<a href=index5.php?semaine=12>Click-moi si tu l'oses</a><br>";

if (isset($_GET["semaine"])) {
    echo "Effronté vas !";
}

