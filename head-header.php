<?php
    include_once "config.php";
    include_once "fonction.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="./flaticon/font/flaticon.css"> 
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="./styles/contact.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <!--link rel="stylesheet" href="styles/style.css"-->
</head>
<body>

    <header>
        <div class="font_ocean">
            <div class="contain_piaf" id="contain_piaf1">
                <div class="piaf" id="piaf1">
                    <img src="./img/oiseau_V.png" alt="oiseau">
                </div>
                <div class="piaf" id="piaf2">
                    <img src="./img/oiseau_Vrev.png" alt="oiseau">
                </div>
            </div>
            <div class="contain_piaf" id="contain_piaf2">
                <div class="piaf" id="piaf3">
                    <img src="./img/oiseau_V.png" alt="oiseau">
                </div>
                <div class="piaf" id="piaf4">
                    <img src="./img/oiseau_Vrev.png" alt="oiseau">
                </div>
            </div>
            <div id="logo">
                <img src="img/logo-pirate.png" alt="Logo le bateau pirate">
            </div>
        </div>
        
        <nav id="menu_principal">
            <ul>
                <li><a href="http://localhost/Projet/Bateau-pirate">Accueil</a></li>
                <li><a href="">Parcourir les albums</a></li>
                <li><a href="contact.php">Nous contacter</a></li>
                <li><a href="admin.php">Admin</a></li>
                <li><?php cookie("co", "deco", "identifiant", "nom"); ?></li>
            </ul>
        </nav>
    </header>