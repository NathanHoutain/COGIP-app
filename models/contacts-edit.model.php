<?php
include('../includes/db-connect.php');
include('../repositories/contact-repository.php');
// echo 'test';
if(isset($_POST['contact_edit_submit'])){
    // var_dump($_POST);
    $firstName = filter_var($_POST['contact_prenom'], FILTER_SANITIZE_STRING);
    $surname = filter_var($_POST['contact_nom'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['contact_email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Cette adresse email est valide.";
    } else {
        echo "Cette adresse email n'est pas valide.";
    }
    $phone = filter_var($_POST['contact_tel'], FILTER_SANITIZE_STRING);
    $id = intval(filter_var($_POST['contact_id'], FILTER_SANITIZE_STRING));
    $company = filter_var($_POST['contact_company'], FILTER_SANITIZE_STRING);

    if($firstName != "" && $surname != "" && $email != "" && $phone != "" && $id != "" && $company != "") {
        updateContact($conn,$firstName, $surname, $phone, $email, $company, $id);
        echo '<script type="text/javascript">
            window.location = "http://localhost:8888/COGIP-app/index.php?page=contact-detail&id='.$id.'";
            exit();
            </script>';
        die;
    }
}/*else{
    $id = intval($_GET['id']);
    $contact = getContactById($conn,$id);
    // var_dump($contact);
    $contactId = $contact['contact_id'];
    $contactFirstName = $contact['contact_prenom'];
    $contactSurname = $contact['contact_nom'];
    $contactName = $contact['contact_prenom'] . ' ' . $contact['contact_nom'];
    $contactCompany = $contact['societe_nom'];
    $contactCompanyId = $contact['societe_id'];
    $contactTel = $contact['contact_tel'];
    $contactEmail = $contact['contact_email'];
    echo '1';
    echo '<br>';
    var_dump($contactFirstName);
}*/
?>