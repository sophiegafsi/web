<?php
include _PROJECT_DIR_.'/view/admin/layout/header.php';
?>
<div class="admin-list-job-offer">

    <h1 class="desc-style"> liste de tous les offre d'emplois </h1>



    <table class="">
        <tr>
            <th>Titre</th>
            <th>Date derniere modification</th>
            <th>Date expiration</th>
        </tr>

        <?php
        foreach ($job_offers as $job_offer) {
            ?>
                <tr>
                    <td><?php echo $job_offer['title'] ?></td>
                    <td><?php echo $job_offer['date_upd'] ?></td>
                    <td><?php echo $job_offer['expiration_date'] ?></td>
                    <td>

                        <a href="index.php?controller=joboffer&action=edit&id=<?php echo $job_offer['id'] ?>">Modifier</a>
                        <a href="index.php?controller=joboffer&action=delete&id=<?php echo $job_offer['id'] ?>"a>Delete</a>
                    </td>
                </tr>
            <?php
        }
        ?>
    </table>
    </div>
<?php
include _PROJECT_DIR_.'/view/admin/layout/footer.php';
?>