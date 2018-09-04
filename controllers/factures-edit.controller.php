<?php
require_once('repositories/contact-repository.php');
require_once('repositories/company-repository.php');
require_once('repositories/bill-repository.php');
require_once('models/factures-edit.model.php');
$id = intval($_GET['id']);
$bill = getBillById($conn,$id);
$billId = $bill['facture_id'];
$billNumber = $bill['facture_numero'];
$billDate = $bill['facture_date'];
$billLabel = $bill['facture_motif'];
$billCompany = $bill['societe_id'];
$billContact = $bill['contact_id'];
$contacts = getAllContacts($conn);
$societes = getAllCompanies($conn);
require_once('views/factures-edit.view.php');
?>