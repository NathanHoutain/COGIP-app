<?php
require_once('repositories/company-repository.php');
$id = $_GET['id'];
$company = getcompanyById($conn,$id);
$companyId = $company['societe_id'];
$companyName = $company['societe_nom'];
$companyAddress = $company['societe_adresse'];
$companyCountry = $company['societe_pays'];
$companyTel = $company['societe_tel'];
$companyTva = $company['societe_tva'];
require_once('views/societes-details.view.php');
?>