<?php
$pageTitle = "Contacts";
require_once('includes/header.php');
require_once('includes/db-connect.php');
require_once('repositories/contact-repository.php');

// $contacts = getAllContacts($conn);
// $test = getAllContacts($conn);
$contacts = getAllContactsWCompany($conn);
// var_dump($contacts);

?>
<div id="mainContent" class="row">
    <div class="col-12">
        <h2 class="sectionTitle">Liste des contacts</h2>
        <a class="addButton" href="contact-edit.php"><i class="fas fa-plus"></i></a>
        <ul class="list-group">
        <?php
            /*foreach ($contacts as $row) {
                // var_dump($row);
                // var_dump($row['contact_id']);
                echo '<li class="list-group-item"><a href="contact-details.php?id=' . $row['contact_id'] . '">';
                echo $row['contact_prenom'] . ' ' . $row['contact_nom'] . ' - ' . $row['societe_nom'] . ' - ' . $row['contact_email'] . ' - ' . $row['contact_tel'];
                echo '</a>';
                // echo '<div class="entryActions">';
                echo '<a href="contact-edit.php?id=<?= $contactId ?>"><i class="fas fa-pen"></i></a>';
                echo '<a href="contact-delete.php?id=<?= $contactId ?>"><i class="fas fa-trash"></i></a>';
                // echo '</div>';
                echo '</li>';
            }*/
        ?>
        </ul>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom complet</th>
                    <th scope="col">Société</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($contacts as $row) {
                        echo '<tr>';
                        echo '<td><a href="contact-details.php?id=' . $row['contact_id'] . '">' . $row['contact_prenom'] . ' ' . $row['contact_nom'] . '</a></td>';
                        echo '<td>' . $row['societe_nom'] . '</td>';
                        echo '<td>' . $row['contact_email'] . '</td>';
                        echo '<td>' . $row['contact_tel'] . '</td>';
                        echo '<td>';
                        echo '<a class="elementAction" href="contact-edit.php?id=' . $row['contact_id'] . '"><i class="fas fa-pen"></i></a>';
                        echo '<a class="elementAction" href="contact-delete.php?id=' . $row['contact_id'] . '"><i class="fas fa-trash"></i></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
  </thead>
  <tbody>

    </div>
</div>

<?php

require_once('includes/footer.php');
?>