<?php
require_once('includes/db-connect.php');
require_once('repositories/bill-repository.php');
require_once('repositories/contact-repository.php');
require_once('repositories/company-repository.php');
require_once('models/factures-add.model.php');
$bills = getAllBillsFull($conn);
$societes = getAllCompanies($conn);
$contacts = getAllContacts($conn);
require_once('views/factures-add.view.php');
?>