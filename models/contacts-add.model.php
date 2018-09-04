<?php
include('../includes/db-connect.php');
include('../repositories/contact-repository.php');
if(isset($_POST['contact_add_submit'])){
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
    $companyId = intval(filter_var($_POST['contact_company'], FILTER_SANITIZE_STRING));
    echo '<br>';
    echo '<br>';
    var_dump($firstName);
    echo '<br>';
    echo '<br>';
    var_dump($surname);
    echo '<br>';
    echo '<br>';
    var_dump($email);
    echo '<br>';
    echo '<br>';
    var_dump($phone);
    echo '<br>';
    echo '<br>';
    var_dump($companyId);
    echo '<br>';
    echo '<br>';
    var_dump($conn);
    if($firstName != "" && $surname != "" && $email != "" && $phone != "" && $companyId != 0) {
        echo 'inside';
        createContact($conn,$firstName, $surname, $phone, $email, $companyId);
        echo '<script type="text/javascript">
                window.location = "http://localhost:8888/COGIP-app/login.php";
                exit();
            </script>';
        die;
    }
}/*else{
    $contactId = $contactFirstName = $contactSurname = $contactCompany = $contactCompanyId = $contactEmail = "";
}*/

?>