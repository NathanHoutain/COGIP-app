<?php
require_once('includes/header.php');
require_once('includes/db-connect.php');
require_once('repositories/contact-repository.php');

$id = intval($_GET['id']);
$contact = getContactById($conn,$id);
$contactId = $contact['contact_id'];
$contactName = $contact['contact_prenom'] . ' ' . $contact['contact_nom'];
$contactCompany = $contact['societe_nom'];
$contactTel = $contact['contact_tel'];
$contactEmail = $contact['contact_email'];

?>

<h2>Contacts</h2>
<ul>
<?php
    foreach ($contacts as $row) {
        // var_dump($row);
        // var_dump($row['contact_id']);
        echo '<li><a href="contact-details.php?id=' . $row['contact_id'] . '">';
        echo $row['contact_prenom'] . ' ' . $row['contact_nom'] . ' - ' . $row['societe_nom'] . ' - ' . $row['contact_email'] . ' - ' . $row['contact_tel'];
        echo '</a></li>';
    }
?>
</ul>

<?php

require_once('includes/footer.php');
?>