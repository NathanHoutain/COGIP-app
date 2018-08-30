<?php

function facturesPage(){
	// recuperation des données
	require "model/factures.model.php";

	if(isset($_POST['submit'])){
	        $addvalue = $bdd->query('INSERT INTO factures (facture_id, facture_numero, facture_date, facture_date_presta, facture_motif, societe_id, contact_id) VALUES("", "'.$_POST['facture_numero'].'", "'.$_POST['facture_date'].'", "'.$_POST['facture_date_presta'].'", "'.$_POST['facture_motif'].'", "'.$_POST['societe_id'].'", "'.$_POST['contact_id'].'") ');
	        header("Refresh:0");
	    }

	// chargement de view
	require "view/factures.view.php";
}

?>
