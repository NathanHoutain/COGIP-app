<h2 class="sectionTitle"><?= $companyName ?></h2>
<div class="entryActions">
    <a href="index.php?page=edit-societe&id=<?= $companyId ?>"><i class="fas fa-pen"></i></a>
    <a href="index.php?page=delete-societe&id=<?= $companyId ?>"><i class="fas fa-trash"></i></a>
</div>
<p>
    <span class="detailLabel">Adresse : </span><?= $companyAddress ?><br>
    <span class="detailLabel">Pays : </span><?= $companyCountry ?><br>
    <span class="detailLabel">Téléphone : </span><?= $companyTel ?><br>
    <span class="detailLabel">TVA : </span><?= $companyTva ?>
</p>
<a href="index.php?page=societes">Retour à la liste</a>