<?php
include _PROJECT_DIR_.'/view/layout/header.php';
?>

    <div class="block-intro">
        <div class="overlay">

            <div class="desc-into">
                <h1 class="desc-style">Forgez votre avenir, <br>
                    <span> trouvez votre voie professionnelle ici !</span> </h1>
                <a href="#" class="btn-decouvrir">découvrir plus</a>
            </div>
        </div>
    </div>


    <div class="block-emploi">
        <h2 class="header-block-style"><?php echo $job_offer['title'] ?></h2>
        <div class="element-block-emploi">
            <img src="view/img/we-are-hiring.png" alt="we-are-hiring" width="300">

        </div>
    </div>


<?php
include _PROJECT_DIR_.'/view/layout/footer.php';
?>