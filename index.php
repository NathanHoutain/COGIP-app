<?php
$pageTitle = "Dashboard";
include('includes/header.php');
require_once('includes/db-connect.php');
require_once('repositories/contact-repository.php');
$lastContacts = getLastContacts($conn,5);
var_dump($lastContacts);

?>

<div class="row justify-content-center">
    <div class="col-12 text-center">
        <p id="welcomeMsg">Hello Prénom Nom ! Bienvenue dans l'administration de la COGIP !!</p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-4 dashboardMainLink">
        <div class="contacts-bg secondary-color">
            <a href="contacts.php">
                <h3>Contacts</h3>
                <p class="nbElements text-right"><span>13</span>éléments</p>
            </a>
        </div>
    </div>
    <div class="col-4 dashboardMainLink">
        <div class="companies-bg secondary-color">
            <a href="societes.php">
                <h3>Societes</h3>
                <p class="nbElements text-right"><span>5</span>éléments</p>
            </a>
        </div>
    </div>
    <div class="col-4 dashboardMainLink">
        <div class="bills-bg secondary-color">
            <a href="factures.php">
                <h3>Factures</h3>
                <p class="nbElements text-right"><span>6</span>éléments</p>
            </a>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-4 dashboardMainLink">
        <div class="providers-bg secondary-color">
            <a href="societes.php?type=fournisseurs">
                <h3>Fournisseurs</h3>
                <p class="nbElements text-right"><span>3</span>éléments</p>
            </a>
        </div>
    </div>
    <div class="col-4 dashboardMainLink">
        <div class="clients-bg secondary-color">
            <a href="societes.php?type=clients secondary-color">
                <h3>Clients</h3>
                <p class="nbElements text-right"><span>2</span>éléments</p>
            </a>
        </div>
    </div>
</div>
<div class="row border-top">
    <div id="last5Contacts" class="col-12 last5Items">
        <h3>Les 5 dernières entrées dans Contacts</h3>
        <!-- <ul class="list-group">
            <li class="list-group-item"><a href="">5</a></li>
            <li class="list-group-item"><a href="">4</a></li>
            <li class="list-group-item"><a href="">3</a></li>
            <li class="list-group-item"><a href="">2</a></li>
            <li class="list-group-item"><a href="">1</a></li>
        </ul> -->
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
                    foreach ($lastContacts as $row) {
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
    </div>
</div>
<div class="row border-top">
    <div id="last5Companies" class="col-12 last5Items">
        <h3>Les 5 dernières entrées dans Entreprises</h3>
        <!-- <ul class="list-group">
            <li class="list-group-item"><a href="">5</a></li>
            <li class="list-group-item"><a href="">4</a></li>
            <li class="list-group-item"><a href="">3</a></li>
            <li class="list-group-item"><a href="">2</a></li>
            <li class="list-group-item"><a href="">1</a></li>
        </ul> -->
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
                <tr>
                    <td>Prénom nom</td>
                    <td>Société</td>
                    <td>Email</td>
                    <td>Téléphone</td>
                    <td>
                        <a class="elementAction" href="contact-edit.php?id=' . $contactId . '"><i class="fas fa-pen"></i></a>
                        <a class="elementAction" href="contact-delete.php?id=' . $contactId . '"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Prénom nom</td>
                    <td>Société</td>
                    <td>Email</td>
                    <td>Téléphone</td>
                    <td>
                        <a class="elementAction" href="contact-edit.php?id=' . $contactId . '"><i class="fas fa-pen"></i></a>
                        <a class="elementAction" href="contact-delete.php?id=' . $contactId . '"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Prénom nom</td>
                    <td>Société</td>
                    <td>Email</td>
                    <td>Téléphone</td>
                    <td>
                        <a class="elementAction" href="contact-edit.php?id=' . $contactId . '"><i class="fas fa-pen"></i></a>
                        <a class="elementAction" href="contact-delete.php?id=' . $contactId . '"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Prénom nom</td>
                    <td>Société</td>
                    <td>Email</td>
                    <td>Téléphone</td>
                    <td>
                        <a class="elementAction" href="contact-edit.php?id=' . $contactId . '"><i class="fas fa-pen"></i></a>
                        <a class="elementAction" href="contact-delete.php?id=' . $contactId . '"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Prénom nom</td>
                    <td>Société</td>
                    <td>Email</td>
                    <td>Téléphone</td>
                    <td>
                        <a class="elementAction" href="contact-edit.php?id=' . $contactId . '"><i class="fas fa-pen"></i></a>
                        <a class="elementAction" href="contact-delete.php?id=' . $contactId . '"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
<div class="row border-top">
    <div id="last5Bills" class="col-12 last5Items">
        <h3>Les 5 dernières entrées dans Factures</h3>
        <ul class="list-group">
            <li class="list-group-item"><a href="">5</a></li>
            <li class="list-group-item"><a href="">4</a></li>
            <li class="list-group-item"><a href="">3</a></li>
            <li class="list-group-item"><a href="">2</a></li>
            <li class="list-group-item"><a href="">1</a></li>
        </ul>
    </div>
</div>

<?php

include('includes/footer.php')

?>