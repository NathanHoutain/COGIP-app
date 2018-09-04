<h2 class="sectionTitle"><?= $billNumber ?> - Modifier</h2>

<form class="form-group" action="models/factures-edit.model.php" method="post">
    <input type="hidden" name="facture_id" value="<?= $billId ?>">
    <label for="facture_numero">Numero</label>
    <input class="form-control" type="text" name="facture_numero" id="facture_numero" value="<?= $billNumber ?>">
    <label for="facture_date">Date</label>
    <input class="form-control" type="date" name="facture_date" id="facture_date" value="<?= $billDate ?>">
    <label for="facture_motif">Motif</label>
    <input class="form-control" type="text" name="facture_motif" id="facture_motif" value="<?= $billLabel ?>">
    <label for="facture_company">Entreprise</label>
    <select class="form-control" name="facture_company" id="facture_company">
        <option selected="true" disabled="disabled">-</option>
        <?php
            foreach ($societes as $societe) {
                // echo '<option value="' . $societe['societe_id'] . '">' . $societe['societe_nom'] . '</option>';
                if($societe['societe_id'] === $billCompany && $billCompany != ""){
                    echo '<option value="' . $societe['societe_id'] . '" selected>' . $societe['societe_nom'] . '</option>';
                } else {
                    echo '<option value="' . $societe['societe_id'] . '">' . $societe['societe_nom'] . '</option>';
                }
            }
        ?>
    </select>
    <label for="facture_contact">Contact</label>
    <select class="form-control" name="facture_contact" id="facture_contact">
        <option selected="true" disabled="disabled">-</option>
        <?php
            foreach ($contacts as $contact) {
                // echo '<option value="' . $contact['contact_id'] . '">' . $contact['contact_prenom'] . ' ' . $contact['contact_nom'] . '</option>';
                if($contact['contact_id'] === $billContact && $billContact != ""){
                    echo '<option value="' . $contact['contact_id'] . '" selected>' . $contact['contact_nom'] . '</option>';
                } else {
                    echo '<option value="' . $contact['contact_id'] . '">' . $contact['contact_nom'] . '</option>';
                }
            }
        ?>
    </select>
    <fieldset class="formSubmitOptions">
        <a href="index.php?page=facture-details&id=<?= $billId ?>">Annuler</a>
        <input class="btn btn-primary" type="submit" value="Modifier" name="facture_edit_submit" id="facture_edit_submit">
    </fieldset>
</form>
