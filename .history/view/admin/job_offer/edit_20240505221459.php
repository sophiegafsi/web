<?php
include _PROJECT_DIR_ . '/view/admin/layout/header.php';
?>
  

<?php
if(isset($errors)){
    foreach ($errors as $error) {
        echo '<p class="error">'.$error.'</p>';
    }
}
?>

    <form action="" method="post">
        <div>
            Nom de l'offre
            <input type="text" name="title" placeholder="Title*" required value="<?php echo $job_offer_values['title'] ?>">
        </div>
        <div>
            Description de l'offre
            <textarea name="description"><?php echo $job_offer_values['description'] ?></textarea>
        </div>
        <div>
            Experience
            <select name="experience">
                <option value="Débutant" <?php if($job_offer_values['experience'] == 'Débutant') echo 'selected'; ?>>Débutant</option>
                <option value="Junior (1 - 2 ans)" <?php if($job_offer_values['experience'] == 'Junior (1 - 2 ans)') echo 'selected'; ?>>Junior (1 - 2 ans)</option>
                <option value="Confirmé (2 - 5 ans)" <?php if($job_offer_values['experience'] == 'Confirmé (2 - 5 ans)') echo 'selected'; ?>>Confirmé (2 - 5 ans)</option>
                <option value="Expert (+ 5 ans)" <?php if($job_offer_values['experience'] == 'Expert (+ 5 ans)') echo 'selected'; ?>></option>
            </select>
        </div>

        <div>
            Type de contrat
            <select name="contract_type">
                <option value="Stage" <?php if($job_offer_values['contract_type'] == 'Stage') echo 'selected'; ?>>Stage</option>
                <option value="SIVP" <?php if($job_offer_values['contract_type'] == 'SIVP') echo 'selected'; ?>>SIVP</option>
                <option value="CDD" <?php if($job_offer_values['contract_type'] == 'CDD') echo 'selected'; ?>>CDD</option>
                <option value="CDI" <?php if($job_offer_values['contract_type'] == 'CDI') echo 'selected'; ?>>CDI</option>
            </select>
        </div>
        <div>
            Salaire proposé
            <input type="text" name="salary" placeholder="Salaire*" required value="<?php echo $job_offer_values['salary']; ?>">
        </div>

        <div>
            Nombre de poste
            <input type="text" name="vacant_jobs" placeholder="Nombre de poste *" required  value="<?php echo $job_offer_values['vacant_jobs']; ?>">
        </div>
        <div>
            Date d'expiration
            <input type="text" name="expiration_date" placeholder="Date d'expiration *" required value="<?php echo $job_offer_values['expiration_date']; ?>">
        </div>
        <div>
            Actif
            <input type="radio" name="active" value="1" <?php if($job_offer_values['active'] == 1) echo 'checked'; ?>> Oui
            <input type="radio" name="active" value="0" <?php if($job_offer_values['active'] == 0) echo 'checked'; ?>> Non
        </div>
        <div>
            Entreprise
            <select name="recruiter_id">
                <?php  ?>
                <?php
                foreach ($recruiters as $recruiter) {
                    echo '<option value="' . $recruiter['id'] . '" ';
                    if($job_offer_values['recruiter_id'] == $recruiter['id']) echo 'selected';
                    echo '
                    >' . $recruiter['company_name'] . '</option>';
                }
                ?>
            </select>
        </div>

        <div>
            <button type="submit" name="submit" value="1" class="btn-recrut">Soumettre</button>
        </div>
    </form>

<?php
include _PROJECT_DIR_ . '/view/admin/layout/footer.php';
?>