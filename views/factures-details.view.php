<h2 class="sectionTitle"><?= $billNumber ?></h2>
<div class="entryActions">
    <a href="index.php?page=edit-facture&id=<?= $billId ?>"><i class="fas fa-pen"></i></a>
    <a href="index.php?page=delete-facture&id=<?= $billId ?>"><i class="fas fa-trash"></i></a>
</div>
<p>
    <span class="detailLabel">Date : </span><?= $billDate ?><br>
    <span class="detailLabel">Motif : </span><?= $billLabel ?><br>
    <span class="detailLabel">Société : </span><?= $billCompany ?><br>
    <span class="detailLabel">Contact : </span><?= $billContact ?><br>
</p>
<a href="index.php?page=factures">Retour à la liste</a>