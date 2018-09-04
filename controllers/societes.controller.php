<?php
require_once('repositories/company-repository.php');
$companies = getAllCompaniesOrdered($conn);
require_once('views/societes.view.php');
?>