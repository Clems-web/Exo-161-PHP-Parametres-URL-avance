<?php


echo "<a href=index1.php?nom=Nemare&prenom=Jean>Click-moi si tu l'oses</a><br>";

if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
    echo $_GET["nom"] . " " . $_GET["prenom"];
}