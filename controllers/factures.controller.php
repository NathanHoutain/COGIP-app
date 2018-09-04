<?php
require_once('repositories/bill-repository.php');
$bills = getAllBillsFull($conn);
require_once('views/factures.view.php');
?>