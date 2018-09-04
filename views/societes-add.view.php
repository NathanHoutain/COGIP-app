<h2 class="sectionTitle">Ajouter un societe</h2>

<!-- <form action="societe-treatment.php" method="post"> -->
<form class="form-group" action="models/societes-add.model.php" method="post">
<!-- <input type="hidden" name="societe_id" value="<?= $societeId ?>"> -->
    <label for="societe_nom">Nom</label>
    <input class="form-control" type="text" name="societe_nom" id="societe_nom">
    <label for="societe_adresse">Adresse</label>
    <input class="form-control" type="text" name="societe_adresse" id="societe_adresse">
    <label for="societe_pays">Pays</label>
    <input class="form-control" type="text" name="societe_pays" id="societe_pays">
    <label for="societe_tel">Téléphone</label>
    <input class="form-control" type="text" name="societe_tel" id="societe_tel">
    <label for="societe_tva">TVA</label>
    <input class="form-control" type="text" name="societe_tva" id="societe_tva">
    <label for="societe_type">Type d'entreprise</label>
    <select class="form-control" name="societe_type" id="societe_type">
        <option selected="true" disabled="disabled">-</option>
        <?php
            foreach ($types as $type) {
                echo '<option value="' . $type['type_id'] . '">' . $type['type_nom'] . '</option>';
            }
        ?>
        <?php /* <option value="<?= $contactCompanyId ?>"><?= $contactCompany ?></option> */?>
    </select>
    <fieldset class="formSubmitOptions">
        <a href="index.php?page=societes">Annuler</a>
        <input class="btn btn-primary" type="submit" value="Ajouter" name="societe_add_submit" id="societe_add_submit">
    </fieldset>
</form>
