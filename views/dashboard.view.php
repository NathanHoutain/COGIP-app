<div class="row justify-content-center">
    <div class="col-12 text-center">
        <p id="welcomeMsg">Hello <?php echo $user['user_prenom']; ?> ! Bienvenue dans l'administration de la COGIP !!</p>
    </div>
</div>

<?php if(isset($_SESSION['currentUser'])){ ?>

<div class="row justify-content-center">
    <div class="col-4 dashboardMainLink">
        <div class="contacts-bg secondary-color">
            <a href="index.php?page=contacts">
                <h3>Contacts</h3>
                <p class="nbElements text-right"><span>13</span>éléments</p>
            </a>
        </div>
    </div>
    <div class="col-4 dashboardMainLink">
        <div class="companies-bg secondary-color">
            <a href="index.php?page=societes">
                <h3>Societes</h3>
                <p class="nbElements text-right"><span>5</span>éléments</p>
            </a>
        </div>
    </div>
    <div class="col-4 dashboardMainLink">
        <div class="bills-bg secondary-color">
            <a href="index.php?page=factures">
                <h3>Factures</h3>
                <p class="nbElements text-right"><span>6</span>éléments</p>
            </a>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-4 dashboardMainLink">
        <div class="providers-bg secondary-color">
            <a href="index.php?page=fournisseurs">
                <h3>Fournisseurs</h3>
                <p class="nbElements text-right"><span>3</span>éléments</p>
            </a>
        </div>
    </div>
    <div class="col-4 dashboardMainLink">
        <div class="clients-bg secondary-color">
            <a href="index.php?page=clients">
                <h3>Clients</h3>
                <p class="nbElements text-right"><span>2</span>éléments</p>
            </a>
        </div>
    </div>
</div>

<?php } ?>

<div class="row border-top">
    <div id="last5Contacts" class="col-12 last5Items">
        <h3>Les 5 dernières entrées dans Contacts</h3>
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
    </div>
</div>
<div class="row border-top">
    <div id="last5Companies" class="col-12 last5Items">
        <h3>Les 5 dernières entrées dans Entreprises</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Pays</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">TVA</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($societes as $row) {
                        echo '<tr>';
                        echo '<td><a href="contact-details.php?id=' . $row['societe_id'] . '">' . $row['societe_nom'] . '</a></td>';
                        echo '<td>' . $row['societe_adresse'] . '</td>';
                        echo '<td>' . $row['societe_pays'] . '</td>';
                        echo '<td>' . $row['societe_tel'] . '</td>';
                        echo '<td>' . $row['societe_tva'] . '</td>';
                        echo '<td>';
                        echo '<a class="elementAction" href="societe-edit.php?id=' . $row['contact_id'] . '"><i class="fas fa-pen"></i></a>';
                        echo '<a class="elementAction" href="societe-delete.php?id=' . $row['contact_id'] . '"><i class="fas fa-trash"></i></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>

    </div>
</div>
<div class="row border-top">
    <div id="last5Bills" class="col-12 last5Items">
        <h3>Les 5 dernières entrées dans Factures</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Date</th>
                    <th scope="col">Motif</th>
                    <th scope="col">Société</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($bills as $row) {
                        echo '<tr>';
                        echo '<td><a href="contact-details.php?id=' . $row['facture_id'] . '">' . $row['facture_numero'] . '</a></td>';
                        echo '<td>' . $row['facture_numero'] . '</td>';
                        echo '<td>' . $row['facture_numero'] . '</td>';
                        echo '<td>' . $row['societe_id'] . '</td>';
                        echo '<td>' . $row['contact_id'] . '</td>';
                        echo '<td>';
                        echo '<a class="elementAction" href="facture-edit.php?id=' . $row['facture_id'] . '"><i class="fas fa-pen"></i></a>';
                        echo '<a class="elementAction" href="facture-delete.php?id=' . $row['facture_id'] . '"><i class="fas fa-trash"></i></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
