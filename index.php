<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Le bateau pirate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="./flaticon/font/flaticon.css"> 
    <link rel="stylesheet" href="styles/style.css">
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
                <li><a href="http://le-bateau-pirate.fr">Accueil</a></li>
                <li><a href="http://le-bateau-pirate.fr/album">Parcourir les albums</a></li>
                <li><a href="contact.html">Nous contacter</a></li>
                <li>
                    <?php

                        function formConnexion(){
                            echo '  <form method="post" class="connexion">
                                        <input type="text" name="nom" required>
                                        <input type="submit" name="co" value="Se connecter">
                                    </form>';
                        }
                        function formDeconnexion($nom){
                            echo '  <form method="post" class="connexion">
                                        <input type="submit" name="deco" value="'.$nom.'">
                                    </form>';
                            setcookie("identifiant", $nom, time()+60);
                        }

                        if(isset($_COOKIE["identifiant"])){
                            if(isset($_POST["deco"])){
                                setcookie("identifiant", " ", time()-60);
                                formConnexion();
                            } else {
                                formDeConnexion($_COOKIE["identifiant"]);
                            }
                        } else {
                            if(isset($_POST["co"])){
                                formDeConnexion($_POST["nom"]);
                            } else {
                                formConnexion();
                            }
                        }
                    ?>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="banner_title">
            <h1>Votre disquaire parisien de proximité</h1>
        </section>

        <section>
            <h2>Derniers albums</h2>

            <?php

                echo '<div class="container">';

                // Connexion à la base de données bateau
                $db = new mysqli("localhost", "bateau", "bateau", "bateau");
                if ($db->connect_errno) {
                    echo "==> Echec lors de la connexion à MySQL : (" . $db->connect_errno . ") " . $db->connect_error;
                }
                // Creation de la requête
                $sql = "SELECT * FROM album;";
                if ($result = $db->query($sql)){
                    if($result->num_rows != 0){
                        // lire le résultat et l'afficher sur la page
                        while($disque = $result->fetch_assoc()){
                            echo '  <div>
                                        <img src="img/'.($disque['jaquette']).'.jpg" height="200" alt="La pochette de '.$disque['nom'].'">
                                        <h3>'.$disque['nom'].'</h3>
                                        Produit par :'.$disque['label'].'
                                    </div>';
                        }
                    } else {
                        echo "<h4>Il n'y a pas de disque à afficher</h4>";
                    }
                }else{
                    echo "<h4>ERREUR SQL: pas de disque à afficher</h4>";
                }
                echo '</div>';

            ?>

        </section>

        <section>
            <h2>A l'abordage du bateau pirate</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus numquam incidunt consectetur facere distinctio corrupti! Possimus quae ut consequuntur nesciunt aliquid, laborum saepe nulla? Quo suscipit ab omnis dolorum!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur eaque dolorem natus distinctio reiciendis corrupti esse qui, ad error ex quisquam dolor reprehenderit sunt, nam amet veritatis doloremque similique molestiae.Id mollitia sequi obcaecati adipisci libero alias aut repudiandae voluptates veniam, ducimus excepturi, nostrum itaque maiores harum repellat eos eum voluptas. In nihil, modi consequatur eos cum expedita sunt tenetur!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ducimus explicabo dolorem adipisci vero, atque esse ad repellendus amet deserunt voluptates debitis repellat, eos quod quaerat nisi nesciunt officiis qui?
                Optio repudiandae ex placeat libero corporis vel tempore, perspiciatis, sequi magni odio blanditiis saepe, expedita modi laboriosam maxime eligendi sunt. Illo consectetur quo tempora quod iusto et, fuga doloremque repellat.
                Sit facilis, quam quisquam, inventore fugit labore corporis fuga veritatis animi error fugiat! Magnam, assumenda ullam. Pariatur veritatis debitis fugit totam id quis, molestias atque est laudantium, doloribus, aliquam commodi.
                Pariatur, vero sunt? Alias iste mollitia quis, porro velit quibusdam, consequuntur incidunt sed ea officiis laboriosam. Quibusdam rerum aliquid molestiae repudiandae pariatur magnam tempore nam, quos fugiat! Placeat, voluptatum doloremque.
            </p>
        </section>

        <section id="newsletter">
            <h2>Restez informé</h2>
            <p>
                Soyez le premier à être informé de l'arrivée de nouveaux disques en vous inscrivant à notre newsletter
            </p>

            <form action="mailto:allaryg1@gmail.com" class="news_form">
                <input type="email" placeholder="Entrez votre adresse mail" name="email">
                <input type="submit" value="S'inscrire">
            </form>
        </section>
    </main>

    <footer>
        <div class="col-50 propos">
            <h2>A propos</h2>
            <ul>
                <li><a href="">Mentions légales</a></li>

                <!-- div>
                    Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a>
                </div -->

                <li><a href="">Politique de confidentialité</a></li>
                <li>
                    <!-- Pour un site e-commerce -->
                    <a href="">Conditions générales de vente</a>
                </li>
                <li><a href="">Plan du site</a></li>
            </ul>
        </div>

        <div class="col-50">
            <h2>Restons connectés</h2>

            <div id="social_icon">
                <ul>
                    <li><a href="" target="_blank"><i class="flaticon-facebook"></i></a></li>
                    <li><a href="" target="_blank"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="" target="_blank"><i class="flaticon-instagram"></i></a></li>
                    <li><a href="" target="_blank"><i class="flaticon-groupme"></i></a></li>
                </ul>
            </div>

        </div>
        <div class="clear_both"></div>

        <div id="copyright">Tous droits réservés</div>
    </footer>

</body>
</html>