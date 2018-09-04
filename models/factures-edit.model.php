<?php
include('../includes/db-connect.php');
include('../repositories/company-repository.php');
include('../repositories/contact-repository.php');
include('../repositories/bill-repository.php');
// echo 'test';
// var_dump($_POST);
if(isset($_POST['facture_edit_submit'])){
    // var_dump($_POST);
    $id = filter_var($_POST['facture_id'], FILTER_SANITIZE_STRING);
    $number = filter_var($_POST['facture_numero'], FILTER_SANITIZE_STRING);
    $date = filter_var($_POST['facture_date'], FILTER_SANITIZE_STRING);
    $motif = filter_var($_POST['facture_motif'], FILTER_SANITIZE_STRING);
    $company = intval(filter_var($_POST['facture_company'], FILTER_SANITIZE_STRING));
    $contact = intval(filter_var($_POST['facture_contact'], FILTER_SANITIZE_STRING));

    var_dump($id);
    var_dump($number);
    var_dump($date);
    var_dump($motif);
    var_dump($company);
    var_dump($contact);

    if($number != "" && $date != "" && $motif != "" && $company != "" && $contact != "") {
        updateBill($conn,$number, $date, $motif, $company, $contact,$id);
        echo '<script type="text/javascript">
            window.location = "http://localhost:8888/COGIP-app/index.php?page=facture-detail&id='.$id.'";
            exit();
            </script>';
        die;
    }
}
?>