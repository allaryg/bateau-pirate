
<form method="POST" action="insert-album.php">
    <input type="file" name="jaquette">
    
    <?php
        echo '<br><label>Label: </label>
        <select name="label">';
        $sql = "SELECT id, nom From label ORDER BY nom";
        
        if ($result = $db->query($sql)){
            if($result->num_rows != 0){
                while($label = $result->fetch_assoc()){
                    echo '<option value ="'.$label['id'].'">"'.$label['nom'].'"</option>';
                }
                echo '<option value="0">==>Nouveau label</option>
                </select>';
            }
        }

        echo '<label>Label: </label>
        <input type="text" name="new_label" placeholder="Nom">';
        
        echo '<br><label>interprete: </interprete>
        <select name="interprete">';
        $sql = "SELECT id, nom, prenom, `type` From interprete ORDER BY nom";
        
        if ($result = $db->query($sql)){
            if($result->num_rows != 0){
                while($interprete = $result->fetch_assoc()){
                    echo '<option value ="'.$interprete['id'].'">';
                    if($interprete["type"] == "seul"){
                        echo $interprete["prenom"].' ';
                    }
                    echo $interprete['nom'].'</option>';
                }
                echo '<option value="0">==>Nouvel interprete</option>
                </select>';
            }
        }
        echo '<label>Interprete: </label>
        <input type="text" name="new_nom" placeholder="Nom">
        <input type="text" name="new_prenom" placeholder="Prénom">

        <select name="new_type>
            <option id="seul">Seul</option>
            <option id="groupe">Groupe</option>
        </select>';

    ?>
    <br>
    <input type="text" name="nom" placeholder="Nom de l'album">
    <input type="submit" name="submit" value="créer">

</form>
