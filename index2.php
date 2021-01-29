<?php

echo "<a href=index2.php?nom=Nemare&prenom=Jean>Click-moi si tu l'oses</a><br>";

if (isset($_GET["age"])) {
    echo $_GET["age"];
}
else {
    echo "age not found";
}