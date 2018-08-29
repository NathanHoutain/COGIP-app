<?php
require_once('includes/header.php');
require_once('includes/db-connect.php');
require_once('repositories/contact-repository.php');

// $contacts = getAllContacts($conn);
$contacts = getAllContactsWCompany($conn);

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