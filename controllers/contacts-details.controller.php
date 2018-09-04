<?php
require_once('repositories/contact-repository.php');
$id = $_GET['id'];
$contact = getContactById($conn,$id);
$contactId = $contact['contact_id'];
$contactName = $contact['contact_prenom'] . ' ' . $contact['contact_nom'];
$contactCompany = $contact['societe_nom'];
$contactTel = $contact['contact_tel'];
$contactEmail = $contact['contact_email'];
require_once('views/contacts-details.view.php');
?>