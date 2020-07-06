<?php
    $title = "Nous contacter";
    include "head-header.php";
?>

<main>
    <h1>Contact</h1>

    <div id="messageAjax"></div>

    <form action="contact.php" method="POST" id="form_contact">

        <div class="box_text_form">

            <div class="nomPrenom_form">
                <div class="civilite_form">
                    <label for="radioH">Monsieur</label>
                    <input type="radio" name="civilite" value="homme" id="radioH" checked>
                    <label for="radioF">Madame</label>
                    <input type="radio" name="civilite" value="femme" id="radioF">
                </div>

                <div>
                    <label for="nom">Nom: </label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div>
                    <label for="prenom">Prénom: </label>
                    <input type="text" name="prenom" id="prenom">
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email">
                </div>
            </div>

            <div class="message_form">
                <div>
                    <label for="objet">Objet du message: </label>
                    <select name="objet" id="objet">
                        <option value="information">Demande d'information</option>
                        <option value="reclamation">Réclamation</option>
                        <option value="avis">Votre avis</option>
                    </select>
                </div>
                <textarea name="area_text" id="text_form_contact" cols="30" rows="5"></textarea>
            </div>

        </div>

        <div class="buton_form">
            <input type="submit" name="envoyer" id="envoyer" value="Envoyer">
            <input type="reset" name="reset" id="reset" value="Reset">
        </div>

    </form>
</main>

<script type="text/javascript">
jQuery(document).ready(function(){
/*
    jQuery("#form_contact").submit(function(e){
        e.preventDefault();
        let form = jQuery("#form_contact").serialize();

        jQuery.ajax({
            method: "POST",
            url: "envoi-formulaire.php",
            data: form,
            success: function(donnees){
                jQuery("#messageAjax").html(donnees);
            },
            error: function(){
                alert("ERREUR");
            }
        });
    });
*/

    jQuery("#form_contact").submit(function(e){
        e.preventDefault();
        let form = jQuery("#form_contact").serialize();

        jQuery.ajax({
            method: "POST",
            url: "envoi-formulaire.php",
            data: form,
            success: function(donnees){
                jQuery("#messageAjax").html(donnees);
                if(jQuery("#messageAjax").html() == "1" ){
                    jQuery("#form_contact").html(" ");
                    jQuery("#messageAjax").html("Le formulaire a étais envoyé avec succés --> ET BIM !!!!!!");
                };
            },
            error: function(){
                alert("ERREUR");
            }
        });
    });


});
</script>

<?php
    include "footer-fin.php";