<?php
require_once('includes/db-connect.php');
require_once('repositories/bill-repository.php');
require_once('repositories/contact-repository.php');
require_once('repositories/company-repository.php');
$bills = getLastBills($conn);
$societes = getLastCompanies($conn);
$contacts = getLastContacts($conn,5);
require_once('views/dashboard.view.php');
?>