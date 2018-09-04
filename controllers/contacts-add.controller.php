<?php
require_once('includes/db-connect.php');
// var_dump($conn);
require_once('repositories/contact-repository.php');
require_once('repositories/company-repository.php');
require_once('models/contacts-add.model.php');
$societes = getAllCompanies($conn);
require_once('views/contacts-add.view.php');
?>