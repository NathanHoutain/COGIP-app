<h2 class="sectionTitle"><?= $companyName ?> - Modifier</h2>

<form class="form-group" action="models/societes-edit.model.php" method="post">
    <input type="hidden" name="societe_id" value="<?= $companyId ?>">
    <label for="societe_nom">Nom</label>
    <input class="form-control" type="text" name="societe_nom" id="societe_nom" value="<?= $companyName ?>">
    <label for="societe_adresse">Adresse</label>
    <input class="form-control" type="text" name="societe_adresse" id="societe_adresse" value="<?= $companyAddress ?>">
    <label for="societe_pays">Pays</label>
    <input class="form-control" type="text" name="societe_pays" id="societe_pays" value="<?= $companyCountry ?>">
    <label for="societe_tel">Téléphone</label>
    <input class="form-control" type="text" name="societe_tel" id="societe_tel" value="<?= $companyTel ?>">
    <label for="societe_tva">TVA</label>
    <input class="form-control" type="text" name="societe_tva" id="societe_tva" value="<?= $companyTva ?>">
    <label for="societe_type">Type d'entreprise</label>
    <select class="form-control" name="societe_type" id="societe_type">
        <!-- <option selected="true" disabled="disabled">-</option> -->
        <?php
            foreach ($types as $type) {
                if($type['type_id'] === $companyType && $companyType != ""){
                    echo '<option value="' . $type['type_id'] . '" selected>' . $type['type_nom'] . '</option>';
                } else {
                    echo '<option value="' . $type['type_id'] . '">' . $type['type_nom'] . '</option>';
                }
            }
        ?>
        <?php /* <option value="<?= $contactCompanyId ?>"><?= $contactCompany ?></option> */?>
    </select>
    <fieldset class="formSubmitOptions">
        <a href="index.php?page=societe-details&id=<?= $companyId ?>">Annuler</a>
        <input class="btn btn-primary" type="submit" value="Modifier" name="societe_add_submit" id="societe_add_submit">
    </fieldset>
</form>
