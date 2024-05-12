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

<div class="list-job-offer-style">
    <div class="block-emploi">
        <h2 class="header-block-style">Dernières Offres d'emploi</h2>
        <div class="element-block-emploi">
            <img src="view/img/we-are-hiring.png" alt="we-are-hiring" width="300">

        </div>
    </div>


    <div class="links-emploi">
        <div class="recherche ">
            <form method="get">
                <div class="input-searsh-style">
                    <label>
                    Rechercher
                    </label>
                    <input type="hidden" name="controller" value="joboffer">
                    <input type="hidden" name="action" value="search">
                    <input name="search" value="<?php if(isset($search)) echo $search ?>">
                </div>
                <div class="input-filre-style">
                        <label>
                        Secteur d'activité
                        </label>
                    <select id="sector" name="activitySector">
                        <option value="0" <?php if(isset($secteur) && $secteur == 0) echo 'selected' ?>>Tous</option>
                        <option value="1" <?php if(isset($secteur) && $secteur == 1) echo 'selected' ?>>Art</option>
                        <option value="2" <?php if(isset($secteur) && $secteur == 2) echo 'selected' ?>>Cuisine</option>
                    </select>
                </div>
                <div class="">
                      <button type="submit" class="btn-recherche-style">Rechercher</button>
                </div>
            </form>
        </div>
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
</div>

<?php
include _PROJECT_DIR_ . '/view/layout/footer.php';
?>