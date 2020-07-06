<?php
include_once "config.php";
include_once "fonction.php";

echo '<pres>';
var_dump($_POST);
echo '</pres>';


if( isset($_POST['nom']) && isset($_POST['interprete']) && isset($_POST['label']) && isset($_POST['jaquette']) ){
    $nom = $_POST['nom'];
    $interprete = $_POST['interprete'];
    $label = $_POST['label'];
    $jaquette = $_POST['jaquette'];

    if($label == 0){
        if(isset($_POST["new_label"])){
            $new_label = $_POST["new_label"];
            $sql = "INSERT INTO label (nom) VALUES ('$new_label')";
            
            $result= $db->query($sql);
            $sql = "SELECT id FROM label WHERE nom = '$new_label'";

            $result= $db->query($sql);
            list($label) = $result->fetch_row();

            echo 'Query: ', $sql.'<br>';
            echo 'Errno: ', $db->errno.'<br>';
            echo 'Error: ', $db->error.'<br>';
        }
    }
    if($interprete == 0){
        session_start();
        $_SESSION['nom'] = $nom;
        $_SESSION['label'] = $label;
        $_SESSION['jaquette'] = $jaquette;
        header("Location: admin.php");
    }
    
    $sql = "INSERT INTO `album`(`id`, `nom`, `interprete`, `label`, `jaquette`) 
            VALUES (NULL, '$nom', '$interprete', '$label', '$jaquette')";

    if($result= $db->query($sql)){

        header("Location: index.php");

    } else {
        echo '<h4>ERREUR SQL</h4>';
        echo 'Query: ', $sql.'<br>';
        echo 'Errno: ', $db->errno.'<br>';
        echo 'Error: ', $db->error.'<br>';
    };

}

header("Location: admin.php");
