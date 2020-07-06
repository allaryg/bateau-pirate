<?php
$title = "Page d'administration";
include "head-header.php";

switch($niveau_utilisateur){
    case "visiteur":
        echo "<h1>Bienvenue $nom_utilisateur</h1>";
    break;
    case "admin":
        echo "<h1>$title</h1>";
        include "form-admin.php";
    break;
    default:
        echo "<h1>Qui ete vous ?</h1>";
}

include "footer-fin.php";