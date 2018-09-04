<h2 class="sectionTitle">Ajouter une facture</h2>

<form class="form-group" action="models/factures-add.model.php" method="post">
    <label for="facture_numero">Numero</label>
    <input class="form-control" type="text" name="facture_numero" id="facture_numero">
    <label for="facture_date">Date</label>
    <input class="form-control" type="date" name="facture_date" id="facture_date">
    <label for="facture_motif">Motif</label>
    <input class="form-control" type="text" name="facture_motif" id="facture_motif">
    <label for="facture_company">Entreprise</label>
    <select class="form-control" name="facture_company" id="facture_company">
        <option selected="true" disabled="disabled">-</option>
        <?php
            foreach ($societes as $societe) {
                echo '<option value="' . $societe['societe_id'] . '">' . $societe['societe_nom'] . '</option>';
            }
        ?>
    </select>
    <label for="facture_contact">Contact</label>
    <select class="form-control" name="facture_contact" id="facture_contact">
        <option selected="true" disabled="disabled">-</option>
        <?php
            foreach ($contacts as $contact) {
                echo '<option value="' . $contact['contact_id'] . '">' . $contact['contact_prenom'] . ' ' . $contact['contact_nom'] . '</option>';
            }
        ?>
    </select>
    <fieldset class="formSubmitOptions">
        <a href="index.php?page=factures">Annuler</a>
        <input class="btn btn-primary" type="submit" value="Ajouter" name="facture_add_submit" id="facture_add_submit">
    </fieldset>
</form>
