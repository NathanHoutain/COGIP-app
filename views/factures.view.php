<?php

?>
<div id="mainContent" class="row">
    <div class="col-12">
        <h2 class="sectionTitle">Liste des factures</h2>
        <a class="addButton" href="index.php?page=add-facture"><i class="fas fa-plus"></i></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Date</th>
                    <!-- <th scope="col">Date 2</th> -->
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
                        echo '<td><a href="?page=facture-details&id=' . $row['facture_id'] . '">' . $row['facture_numero'] . '</a></td>';
                        echo '<td>' . $row['facture_date'] . '</td>';
                        // echo '<td>' . $row['facture_date_presta'] . '</td>';
                        echo '<td>' . $row['facture_motif'] . '</td>';
                        echo '<td>' . $row['societe_nom'] . '</td>';
                        echo '<td>' . $row['contact_prenom'] . ' ' . $row['contact_nom'] . '</td>';
                        echo '<td>';
                        echo '<a class="elementAction" href="index.php?page=edit-facture&id=' . $row['facture_id'] . '"><i class="fas fa-pen"></i></a>';
                        echo '<a class="elementAction" href="index.php?page=delete-facture&id=' . $row['facture_id'] . '"><i class="fas fa-trash"></i></a>';
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
