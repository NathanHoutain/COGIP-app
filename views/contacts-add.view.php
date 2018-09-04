<h2 class="sectionTitle">Ajouter un contact</h2>

<!-- <form action="contact-treatment.php" method="post"> -->
<form class="form-group" action="models/contacts-add.model.php" method="post">
<!-- <input type="hidden" name="contact_id" value="<?= $contactId ?>"> -->
    <label for="contact_prenom">Prénom</label>
    <input class="form-control" type="text" name="contact_prenom" id="contact_prenom">
    <label for="contact_prenom">Nom</label>
    <input class="form-control" type="text" name="contact_nom" id="contact_nom">
    <label for="contact_prenom">Email</label>
    <input class="form-control" type="email" name="contact_email" id="contact_email">
    <label for="contact_prenom">Téléphone</label>
    <input class="form-control" type="text" name="contact_tel" id="contact_tel">
    <label for="contact_prenom">Entreprise</label>
    <select class="form-control" name="contact_company" id="contact_company">
        <option selected="true" disabled="disabled">-</option>
        <?php
            foreach ($societes as $societe) {
                echo '<option value="' . $societe['societe_id'] . '">' . $societe['societe_nom'] . '</option>';
            }
        ?>
        <?php /* <option value="<?= $contactCompanyId ?>"><?= $contactCompany ?></option> */?>
    </select>
    <!-- <input class="btn-danger" type="submit" value="contact_edit_cancel" name="contact_edit_cancel" id="contact_edit_cancel"> -->
    <fieldset class="formSubmitOptions">
        <a href="contacts.php">Annuler</a>
        <input class="btn btn-primary" type="submit" value="Ajouter" name="contact_add_submit" id="contact_add_submit">
    </fieldset>
</form>
