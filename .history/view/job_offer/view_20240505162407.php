<?php include _PROJECT_DIR_.'/view/layout/header.php'; ?>

<div class="container">
    <h1 class="heading">Offre d'emploi</h1>

    <div class="block-intro">
        <div class="overlay">
            <div class="desc-into">
                <h1 class="sub-heading">Forgez votre avenir, <br>
                    <span> trouvez votre voie professionnelle ici !</span> </h1>
                <a href="#" class="btn-decouvrir">Découvrir plus</a>
            </div>
        </div>
    </div>

    <div class="block-emploi">
        <h2 class="sub-heading"><?php echo $job_offer['title'] ?></h2>
        <div class="element-block-emploi">
            <img src="view/img/we-are-hiring.png" alt="we-are-hiring" width="300">
        </div>
    </div>

    <div class="job-details">
        <p class="job-info"><span class="job-info-details"> Secteur d'activité : </span><?php echo $job_offer['activity_sector'] == 1 ? 'Art' : 'Cuisine'; ?></p>
        <p class="job-info"><span class="job-info-details">  Société :  <?php echo $job_offer['company_name'] ?></p>
        <p class="job-info">Expérience : <?php echo $job_offer['experience'] ?></p>
        <p class="job-info">Salaire : <?php echo $job_offer['salary'] ?></p>
        <p class="job-info">Type de contrat : <?php echo $job_offer['contract_type'] ?></p>
        <p class="job-info">Nombre de poste(s) : <?php echo $job_offer['vacant_jobs'] ?></p>
        <p class="job-info">Date d'expiration de l'offre : <?php echo $job_offer['expiration_date'] ?></p>
        <p class="job-info">Adresse : <?php echo $job_offer['address'] ?></p>
        <p class="job-info">Site web : <?php echo $job_offer['website'] ?></p>
    </div>

    <a href="index.php?controller=Jobseeker&action=postuler&id=<?php echo $job_offer['id'] ?>" class="btn-decouvrir">Postuler</a>
</div>

<?php include _PROJECT_DIR_.'/view/layout/footer.php'; ?>
