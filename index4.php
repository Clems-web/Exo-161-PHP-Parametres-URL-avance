<?php

echo "<a href=index4.php?langage=PHP&serveur=LAMP>Click-moi si tu l'oses</a><br>";

if (isset($_GET["langage"]) && isset($_GET["serveur"])) {
    echo "J'aime quand tu me clicks !";
}

