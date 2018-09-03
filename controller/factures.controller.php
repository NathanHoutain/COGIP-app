<?php

function facturesPage(){
	// recuperation des données
	require "model/factures.model.php";

  // add
	if(isset($_POST['submit'])){
	        $addvalue = $bdd->query('INSERT INTO factures (facture_id, facture_numero, facture_date, facture_date_presta, facture_motif, societe_id, contact_id) VALUES("", "'.$_POST['facture_numero'].'", "'.$_POST['facture_date'].'", "'.$_POST['facture_date_presta'].'", "'.$_POST['facture_motif'].'", "'.$_POST['societe_id'].'", "'.$_POST['contact_id'].'") ');
	        header("Refresh:0");
	    }
  // delete

	//
	// if(isset($_POST['id'])) $id=intval($_POST['id']);
  //    if(isset($_POST['trash_button'])){
  //    $trash_button = $_POST['trash_button'];
	//  }
	//  $del_row = 'DELETE FROM factures WHERE facture_id = ?' ;
  //    $q = $data->prepare($del_row);
	// 	 var_dump($data);
  //    $q->execute([$_POST['trash_button']]);
  //    header("Refresh:0; url=factures.view.php");
	// modif

	$result = getFactures();
	// chargement de view
	require "view/factures.view.php";
}

facturesPage();
?>
