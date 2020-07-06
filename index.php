<?php
    $title = "Le bateau pirate";
    include "head-header.php";
?>

<main>
    <section id="banner_title">
        <h1>Votre disquaire parisien de proximité</h1>
    </section>

    <section>
        <h2>Derniers albums</h2>

        <?php
            echo '<div class="container">';
            afficheAlbum($db);
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

<?php
    include "footer-fin.php";