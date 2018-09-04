<h2 class="sectionTitle"><?= $contactName ?> - Modifier</h2>

<!-- <form action="contact-treatment.php" method="post"> -->
<form class="form-group" action="models/contacts-edit.model.php" method="post">
<input type="hidden" name="contact_id" value="<?= $contactId ?>">
    <label for="contact_prenom">Prénom</label>
    <input class="form-control" type="text" name="contact_prenom" id="contact_prenom" value="<?= $contactFirstName ?>">
    <label for="contact_prenom">Nom</label>
    <input class="form-control" type="text" name="contact_nom" id="contact_nom" value="<?= $contactSurname ?>">
    <label for="contact_prenom">Email</label>
    <input class="form-control" type="email" name="contact_email" id="contact_email" value="<?= $contactEmail ?>">
    <label for="contact_prenom">Téléphone</label>
    <input class="form-control" type="text" name="contact_tel" id="contact_tel" value="<?= $contactTel ?>">
    <label for="contact_prenom">Entreprise</label>
    <select class="form-control" name="contact_company" id="contact_company">
        <?php
            foreach ($societes as $societe) {
                if($societe['societe_id'] === $contactCompanyId && $contactCompanyId != ""){
                    echo '<option value="' . $societe['societe_id'] . '" selected>' . $societe['societe_nom'] . '</option>';
                } else {
                    echo '<option value="' . $societe['societe_id'] . '">' . $societe['societe_nom'] . '</option>';
                }
            }
        ?>
        <?php /* <option value="<?= $contactCompanyId ?>"><?= $contactCompany ?></option> */?>
    </select>
    <!-- <input class="btn-danger" type="submit" value="contact_edit_cancel" name="contact_edit_cancel" id="contact_edit_cancel"> -->
    <fieldset class="formSubmitOptions">
        <a href="index.php?page=contact-detail&id=<?= $contactId ?>">Annuler</a>
        <input class="btn btn-primary" type="submit" value="Modifier" name="contact_edit_submit" id="contact_edit_submit">
    </fieldset>
</form>
