<?php
include _PROJECT_DIR_ . '/view/layout/header.php';
?>
    <h1 class="desc-style"> Offre d'emploi </h1>

    <div class="block-intro">
        <div class="overlay">

            <div class="desc-into">
                <h1 class="desc-style">Forgez votre avenir, <br>
                    <span> trouvez votre voie professionnelle ici !</span></h1>
                <a href="#" class="btn-decouvrir">découvrir plus</a>
            </div>
        </div>
    </div>


    <div class="block-emploi">
        <h2 class="header-block-style">Dernières Offres d'emploi</h2>
        <div class="element-block-emploi">
            <img src="view/img/we-are-hiring.png" alt="we-are-hiring" width="300">

        </div>
    </div>


    <div class="links-emploi">
        
        <?php
        foreach ($job_offers as $job_offer) {
            ?>
            <a href="index.php?controller=joboffer&action=view&id=<?php echo $job_offer['id'] ?>" class="link-emploi">
                <h3 class="titre-link-emploi"><?php echo $job_offer['title'] ?></h3>
                <p class="desc-link-emploi">Société : <?php echo $job_offer['company_name'] ?></p>
                <p class="desc-link-emploi">Adresse : <?php echo $job_offer['address'] ?></p>
                <p class="desc-link-emploi">site web : <?php echo $job_offer['website'] ?></p>
            </a>
            <?php
        }
        ?>

    </div>


<?php
include _PROJECT_DIR_ . '/view/layout/footer.php';
?>