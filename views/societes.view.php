<?php

// echo 'contacts';
// echo '<br>';
// echo '<br>';
// var_dump($contacts);

?>
<div id="mainContent" class="row">
    <div class="col-12">
        <h2 class="sectionTitle">Liste des entreprises</h2>
        <a class="addButton" href="index.php?page=add-societe"><i class="fas fa-plus"></i></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Pays</th>
                    <th scope="col">N° téléphone</th>
                    <th scope="col">TVA</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($companies as $row) {
                        echo '<tr>';
                        echo '<td><a href="?page=societe-details&id=' . $row['societe_id'] . '">' . $row['societe_nom'] . '</a></td>';
                        echo '<td>' . $row['societe_adresse'] . '</td>';
                        echo '<td>' . $row['societe_pays'] . '</td>';
                        echo '<td>' . $row['societe_tel'] . '</td>';
                        echo '<td>' . $row['societe_tva'] . '</td>';
                        echo '<td>';
                        echo '<a class="elementAction" href="index.php?page=edit-societe&id=' . $row['societe_id'] . '"><i class="fas fa-pen"></i></a>';
                        echo '<a class="elementAction" href="index.php?page=delete-societe&id=' . $row['societe_id'] . '"><i class="fas fa-trash"></i></a>';
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
