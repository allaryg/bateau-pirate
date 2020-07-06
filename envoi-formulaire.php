<?php
include_once "config.php";
include_once "fonction.php";
/*
if(!empty($_POST)){
    if(isset($_POST["civilite"])) $civilite = $_POST["civilite"]; else $civilite="";
    if(isset($_POST["nom"])) $nom = $_POST["nom"];
    if(isset($_POST["prenom"])) $prenom = $_POST["prenom"];
    if(isset($_POST["email"])) $email = $_POST["email"];
    if(isset($_POST["objet"])) $objet = $_POST["objet"];
    if(isset($_POST["area_text"])) $text = $_POST["area_text"];
    
    testFormContact($civilite, "Votre civilité");
    testFormContact($nom, "Votre nom");
    testFormContact($prenom, "Votre prenom");
    testFormContact($email, "Votre email");
    testFormContact($objet, "Votre objet");
    testFormContact($text, "Votre text");

    //verifie que le mail est de la forme aaaa@bbb.ext
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "adresse mail invalide";
    }

    $message = "Civilité: ".$civilite."\n";
    $message.= "Nom: ".$nom."\n";
    $message.= "Prenom: ".$prenom."\n";
    $message.= "Email: ".$email."\n";
    $message.= "Objet: ".$objet."\n";
    $message.= "Text: ".$text."\n";

    if(@mail("allaryg1@gmail.com", "Contact depuis mon site", $message)){
        echo "message envoyé";
    } else {
        echo "erreur lors de l'envoi";
    }
}
*/
if(!empty($_POST)){

	/* on déclare les variables */
	if(isset($_POST['civilite'])) $civilite = $_POST['civilite'];
	if(isset($_POST['nom'])) $nom = $_POST['nom'];
	if(isset($_POST['prenom'])) $prenom = $_POST['prenom'];
	if(isset($_POST['email'])) $email = $_POST['email'];
	if(isset($_POST['objet'])) $objet = $_POST['objet'];
	if(isset($_POST['area_text'])) $area_text = $_POST['area_text'];

	$error = false;
	
	if(!isset($civilite) || empty($civilite)){
		echo 'veuillez indiquer votre civilité<br>';
		$error = true;
	}
	if(!isset($nom) || empty($nom)){
		echo 'veuillez entrez votre nom<br>';
		$error = true;
	}
	if(!isset($prenom) || empty($prenom)){
		echo 'veuillez entrer votre prénom<br>';
		$error = true;
	}
	if(!isset($email) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ // vérifie que le mail est de la forme aaa@aaa.ext
		echo 'veuillez entrer une adresse mail valide<br>';
		$error = true;
	}
	if(!isset($objet) || empty($objet)){
		echo 'veuillez sélectionner un area_text<br>';
		$error = true;
	}
	if(!isset($area_text) || empty($area_text)){
		echo 'entrez un message<br>';
		$error = true;
	}
	if($error == false){ //peut s'écrire if(!$error){
		$message = "Civilité: ".$civilite."\n";
		$message.= "Nom: ".$nom; //$message.="a"; est identitique à $message = $message."a";
		$message.= "Prénom: ".$prenom;
		$message.= "Email: ".$email;
		$message.= "Sujet: ".$objet;
		$message.= "Message: ".$area_text;
        echo "1";
    } 
/*        
    if(@mail('arnaud@brainyup.net', 'Contact depuis mon site', $message)){
        echo 'message envoyé<br>';
    } else {
        echo 'erreur lors de l\'envoi<br>';
    }
*/

}