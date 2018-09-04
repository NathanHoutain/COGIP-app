<?php
include('../includes/db-connect.php');
include('../repositories/bill-repository.php');
include('../repositories/contact-repository.php');
include('../repositories/company-repository.php');
if(isset($_POST['facture_add_submit'])){
    $name = filter_var($_POST['facture_numero'], FILTER_SANITIZE_STRING);
    $date = filter_var($_POST['facture_date'], FILTER_SANITIZE_STRING);
    $motif = filter_var($_POST['facture_motif'], FILTER_SANITIZE_STRING);
    $companyId = intval(filter_var($_POST['facture_company'], FILTER_SANITIZE_STRING));
    $contactId = intval(filter_var($_POST['facture_contact'], FILTER_SANITIZE_STRING));
    echo $name . ' - ' .$date . ' - ' .$motif . ' - ' .$companyId . ' - ' .$contactId;
    if($name != "" && $date != "" && $motif != "" && $companyId != "" && $contactId != "") {
        createBill($conn,$name, $date, $motif, $companyId, $contactId);
        echo '<script type="text/javascript">
                window.location = "http://localhost:8888/COGIP-app/index.php?page=factures";
                exit();
            </script>';
        die;
    }
}

?>