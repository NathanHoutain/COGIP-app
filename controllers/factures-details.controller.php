<?php
// require_once('repositories/contact-repository.php');
// require_once('repositories/company-repository.php');
require_once('repositories/bill-repository.php');
// require_once('models/factures-details.model.php');
$id = intval($_GET['id']);
$bill = getBillByIdFull($conn,$id);
$billId = $bill['facture_id'];
$billNumber = $bill['facture_numero'];
$billDate = $bill['facture_date'];
$billLabel = $bill['facture_motif'];
$billCompany = $bill['societe_nom'];
$billContact = $bill['contact_prenom'] . ' ' . $bill['contact_nom'];
// $contacts = getAllContacts($conn);
// $societes = getAllCompanies($conn);
require_once('views/factures-details.view.php');
?>