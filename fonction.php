<?php

function formConnexion(){
    ?>
        <form method="post" class="connexion">
            <input type="text" name="nom" required>
            <input type="submit" name="co" value="Se connecter">
        </form>
    <?php
}

function formDeconnexion($nom){
    global $nom_utilisateur, $niveau_utilisateur;
    $nom_utilisateur = $nom;
    $niveau_utilisateur = getNiveauUtilisateur($nom_utilisateur);
    ?>
        <form method="post" class="connexion">
            <input type="submit" name="deco" value="<?php echo $nom_utilisateur;?>">
        </form>
    <?php
    setcookie("identifiant", $nom_utilisateur, time()+60);
}

function getNiveauUtilisateur($nom){
    switch($nom){
        case "allary":
            $niveau = "visiteur";
        break;
        case "admin":
            $niveau = "admin";
        break;
        default:
            $niveau = "";
    }
    return $niveau;
}

function cookie($connect, $deconect, $id, $nom){
    if(isset($_COOKIE[$id])){
        if(isset($_POST[$deconect])){
            setcookie($id, " ", time()-60);
            formConnexion();
        } else {
            formDeConnexion($_COOKIE[$id]);
        }
    } else {
        if(isset($_POST[$connect])){
            formDeConnexion($_POST[$nom]);
        } else {
            formConnexion();
        }
    }
}

function afficheAlbum($db){
    // Creation de la requête
    $sql = "SELECT A.jaquette, A.nom, L.nom AS label, I.nom AS interprete
            FROM album A, label L, interprete I
            WHERE A.label = L.id AND A.interprete = I.id
            ORDER BY nom;";
    if ($result = $db->query($sql)){
        if($result->num_rows != 0){
            // lire le résultat et l'afficher sur la page
            while($disque = $result->fetch_assoc()){
                ?>
                    <div>
                        <img src="img/<?php echo htmlentities($disque['jaquette']); ?>.jpg" height="200" alt="La pochette de <?php echo htmlentities($disque['nom']); ?>">
                        <h3><?php echo htmlentities($disque['nom']); ?></h3>
                        <p>De : <?php echo htmlentities($disque['interprete']); ?></p>
                        <p>Produit par : <?php echo htmlentities($disque['label']); ?></p>
                    </div>
                <?php
            }
        } else {
            echo "<h4>Il n'y a pas de disque à afficher</h4>";
        }
    }else{
        echo "<h4>ERREUR SQL: pas de disque à afficher</h4>";
    }
}

/* Page de contact */

function testFormContact($a="", $b=""){
    if(!isset($a) || empty($a) ){
        echo $b." est vide ou pas definit";
    } 
}