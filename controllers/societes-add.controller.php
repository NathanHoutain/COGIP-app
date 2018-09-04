<?php
require_once('includes/db-connect.php');
require_once('repositories/company-repository.php');
require_once('repositories/type-repository.php');
require_once('models/societes-add.model.php');
$types = getAllTypes($conn);
require_once('views/societes-add.view.php');
?>