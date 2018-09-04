<?php
require_once('repositories/contact-repository.php');
$contacts = getAllContactsWCompany($conn);
// echo 'test';
require_once('views/contacts.view.php');
?>
