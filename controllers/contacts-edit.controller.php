<?php
require_once('repositories/contact-repository.php');
require_once('repositories/company-repository.php');
require_once('models/contacts-edit.model.php');
$id = intval($_GET['id']);
$contact = getContactById($conn,$id);
$contactId = $contact['contact_id'];
$contactFirstName = $contact['contact_prenom'];
$contactSurname = $contact['contact_nom'];
$contactName = $contact['contact_prenom'] . ' ' . $contact['contact_nom'];
$contactCompany = $contact['societe_nom'];
$contactCompanyId = $contact['societe_id'];
$contactTel = $contact['contact_tel'];
$contactEmail = $contact['contact_email'];
$societes = getAllCompanies($conn);
require_once('views/contacts-edit.view.php');
?>