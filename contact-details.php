<?php
$pageTitle = "Contacts";
require_once('includes/header.php');
require_once('includes/db-connect.php');
require_once('repositories/contact-repository.php');

// $contacts = getAllContacts($conn);
// var_dump($_GET);
$id = intval($_GET['id']);
// $id = $_GET['id'];
$contact = getContactById($conn,$id);
// var_dump($contact);
$contactId = $contact['contact_id'];
$contactName = $contact['contact_prenom'] . ' ' . $contact['contact_nom'];
$contactCompany = $contact['societe_nom'];
$contactTel = $contact['contact_tel'];
$contactEmail = $contact['contact_email'];

?>

<h2 class="sectionTitle"><?= $contactName ?></h2>
<div class="entryActions">
    <a href="contact-edit.php?id=<?= $contactId ?>"><i class="fas fa-pen"></i></a>
    <a href="contact-delete.php?id=<?= $contactId ?>"><i class="fas fa-trash"></i></a>
</div>
<p>
    <span class="detailLabel">Société : </span><?= $contactCompany ?><br>
    <span class="detailLabel">Téléphone : </span><?= $contactTel ?><br>
    <span class="detailLabel">Email : </span><?= $contactEmail ?>
</p>
<a href="contacts.php">Retour à la liste</a>

<?php

require_once('includes/footer.php');
?>