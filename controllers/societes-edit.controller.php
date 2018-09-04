<?php
require_once('includes/db-connect.php');
require_once('repositories/company-repository.php');
require_once('repositories/type-repository.php');
require_once('models/societes-edit.model.php');
$id = $_GET['id'];
$company = getcompanyById($conn,$id);
$companyId = $company['societe_id'];
$companyName = $company['societe_nom'];
$companyAddress = $company['societe_adresse'];
$companyCountry = $company['societe_pays'];
$companyTel = $company['societe_tel'];
$companyTva = $company['societe_tva'];
$companyType = $company['type_id'];
var_dump($companyType);
$types = getAllTypes($conn);
require_once('views/societes-edit.view.php');
?>