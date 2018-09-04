<?php
include('../includes/db-connect.php');
include('../repositories/company-repository.php');
// var_dump($conn);
if(isset($_POST['societe_add_submit'])){
    $name = filter_var($_POST['societe_nom'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['societe_adresse'], FILTER_SANITIZE_STRING);
    $country = filter_var($_POST['societe_pays'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['societe_tel'], FILTER_SANITIZE_STRING);
    $tva = filter_var($_POST['societe_tva'], FILTER_SANITIZE_STRING);
    $typeId = intval(filter_var($_POST['societe_type'], FILTER_SANITIZE_STRING));
    $id = intval(filter_var($_POST['societe_id'], FILTER_SANITIZE_STRING));
    echo $name . ' - ' .$address . ' - ' .$country . ' - ' .$phone . ' - ' .$tva . ' - ' .$typeId;
    if($name != "" && $address != "" && $country != "" && $phone != "" && $tva != "" && $typeId != "") {
        updateCompany($conn,$name, $address, $country, $phone, $tva, $typeId, $id);
        echo '<script type="text/javascript">
                window.location = "http://localhost:8888/COGIP-app/index.php?page=societes";
                exit();
            </script>';
        die;
    }
}

?>