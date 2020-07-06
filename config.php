<?php

$nom_utilisateur = "";
$niveau_utilisateur = "";

$bp_server = "localhost";
$bp_user = "bateau";
$bp_mdp = "bateau";
$bp_data_base = "bateau";

// connexion base de donnée
// $mysqli = new mysqli('hote', 'votre_utilisateur', 'votre_mdp', 'nom_base_donnée');
$db = new mysqli($bp_server, $bp_user, $bp_mdp, $bp_data_base);
/*
if ($db->connect_errno) {
    echo "==> Echec lors de la connexion à MySQL : (" . $db->connect_errno . ") " . $db->connect_error;
}
*/

// pour afficher une page maintenance à la place d'un message d'erreur
if ($db->connect_errno) {
    // Ici on peut insérer le code qui enregistre l'erreur dans un fichier
    header ("Location: maintenance.html");
    // Cette ligne n'est pas affiché car écrasé par le header
    exit ;
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die ();
}
