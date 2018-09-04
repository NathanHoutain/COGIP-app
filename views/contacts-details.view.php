<h2 class="sectionTitle"><?= $contactName ?></h2>
<div class="entryActions">
    <a href="index.php?page=edit-contact&id=<?= $contactId ?>"><i class="fas fa-pen"></i></a>
    <a href="index.php?page=delete-contact&id=<?= $contactId ?>"><i class="fas fa-trash"></i></a>
</div>
<p>
    <span class="detailLabel">Société : </span><?= $contactCompany ?><br>
    <span class="detailLabel">Téléphone : </span><?= $contactTel ?><br>
    <span class="detailLabel">Email : </span><?= $contactEmail ?>
</p>
<a href="index.php?page=contacts">Retour à la liste</a>