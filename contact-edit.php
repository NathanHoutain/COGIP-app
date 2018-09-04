<?php
$pageTitle = "Contacts";
// if(isset($_POST['contact_edit_submit'])){
//     var_dump($_POST);
// }
require_once('includes/header.php');
require_once('includes/db-connect.php');
require_once('repositories/contact-repository.php');
require_once('repositories/company-repository.php');

if(isset($_GET['id'])) {
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
    $societes = getAllCompanies($conn);
} else {
    $contactId = $contactFirstName = $contactSurname = $contactCompany = $contactCompanyId = $contactEmail = "";
    $societes = getAllCompanies($conn);
}

?>

<h2 class="sectionTitle">
    <?php
        if(isset($_GET['id'])) {
            echo $contactName . ' - Modifier';
        } else {
            echo 'Ajouter un contact';
        }
    ?>
</h2>

<!-- <form action="contact-treatment.php" method="post"> -->
<form class="form-group" action="contact-treatment.php" method="post">
<input type="hidden" name="contact_id" value="<?= $contactId ?>">
    <label for="contact_prenom">Prénom</label>
    <input class="form-control" type="text" name="contact_prenom" id="contact_prenom" value="<?= $contactFirstName ?>">
    <label for="contact_prenom">Nom</label>
    <input class="form-control" type="text" name="contact_nom" id="contact_nom" value="<?= $contactSurname ?>">
    <label for="contact_prenom">Email</label>
    <input class="form-control" type="email" name="contact_email" id="contact_email" value="<?= $contactEmail ?>">
    <label for="contact_prenom">Téléphone</label>
    <input class="form-control" type="text" name="contact_tel" id="contact_tel" value="<?= $contactTel ?>">
    <label for="contact_prenom">Entreprise</label>
    <select class="form-control" name="contact_company" id="contact_company">
        <?php
            if(!isset($_GET['id'])) {
                echo '<option selected="true" disabled="disabled">-</option>';
            }
            foreach ($societes as $societe) {
                var_dump($societe);
                if($societe['societe_id'] === $contactCompanyId && $contactCompanyId != ""){
                    echo '<option value="' . $societe['societe_id'] . '" selected>' . $societe['societe_nom'] . '</option>';
                } else {
                    echo '<option value="' . $societe['societe_id'] . '">' . $societe['societe_nom'] . '</option>';
                }
            }
        ?>
        <?php /* <option value="<?= $contactCompanyId ?>"><?= $contactCompany ?></option> */?>
    </select>
    <!-- <input class="btn-danger" type="submit" value="contact_edit_cancel" name="contact_edit_cancel" id="contact_edit_cancel"> -->
    <fieldset class="formSubmitOptions">
    <?php
    if(!isset($_GET['id'])) {
    ?>
        <a href="contacts.php">Annuler</a>
        <input class="btn btn-primary" type="submit" value="contact_add_submit" name="contact_add_submit" id="contact_add_submit">
    <?php
    } else {
    ?>
        <a href="contact-details.php?id=<?= $contactId ?>">Annuler</a>
        <input class="btn btn-primary" type="submit" value="contact_edit_submit" name="contact_edit_submit" id="contact_edit_submit">
    <?php
    }
    ?>
    </fieldset>
</form>

<?php

require_once('includes/footer.php');
?>