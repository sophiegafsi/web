<?php include _PROJECT_DIR_.'/view/layout/header.php'; ?>

<div class="container">
   

    <div class="block-intro">
        <div class="overlay">
            <div class="desc-into">
            <h1 class="sub-heading">Postulez pour cette offre</h1>
             
                <a href="#" class="btn-decouvrir">Découvrir plus</a>
            </div>
        </div>
    </div>

    <div class="block-emploi">
       
        <div class="element-block-emploi">
            <img src="view/img/we-are-hiring.png" alt="we-are-hiring" width="300">
        </div>
    </div>



    <a href="index.php?controller=Jobseeker&action=postuler&id=<?php echo $job_offer['id'] ?>" class="btn-recrut">Postuler</a>
</div>

<?php include _PROJECT_DIR_.'/view/layout/footer.php'; ?>
