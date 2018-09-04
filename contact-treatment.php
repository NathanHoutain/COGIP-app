<?php
require_once('includes/db-connect.php');
require_once('repositories/contact-repository.php');

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
            window.location = "http://localhost:8888/COGIP-app/contacts.php";
            exit();
            </script>';
        die;
    }

}

if(isset($_POST['contact_add_submit'])){
    var_dump($_POST);
    $firstName = filter_var($_POST['contact_prenom'], FILTER_SANITIZE_STRING);
    echo '<br>';
    echo '<br>';
    echo 'firstname<br>';
    var_dump($firstName);
    echo '<br>';
    echo '<br>';
    $surname = filter_var($_POST['contact_nom'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['contact_email'], FILTER_SANITIZE_EMAIL);
    // if (true === filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Cette adresse email est valide.";
    } else {
        echo "Cette adresse email n'est pas valide.";
    }
    $phone = filter_var($_POST['contact_tel'], FILTER_SANITIZE_STRING);
    $id = intval(filter_var($_POST['contact_id'], FILTER_SANITIZE_STRING));
    $companyId = intval(filter_var($_POST['contact_company'], FILTER_SANITIZE_STRING));
    echo '<br>';
    var_dump($firstName);
    echo '<br>';

    var_dump($surname);
    echo '<br>';

    var_dump($email);
    echo '<br>';

    var_dump($phone);
    echo '<br>';

    var_dump($companyId);
    echo '<br>';

    if($firstName != "" && $surname != "" && $email != "" && $phone != "" && $companyId != 0) {
        echo '<br>';
        echo 'should be working';
        echo '<br>';
        createContact($conn,$firstName, $surname, $phone, $email, $companyId);
        echo '<br>';
        echo 'Really';
        echo '<br>';
    }

}

?>