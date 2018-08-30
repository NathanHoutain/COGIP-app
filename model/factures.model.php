<?php

function getFactures(){
	try
	{
	  $bdd = new PDO('mysql:host=localhost;dbname=COGIP;charset=utf8', 'root', '');

	   // On recupere tout le contenu de la table factures
	$result = $bdd->query('SELECT factures.*, contacts.contact_prenom, contacts.contact_nom, societes.societe_nom
	FROM ((factures
	INNER JOIN contacts ON factures.contact_id=contacts.contact_id)
	INNER JOIN societes ON factures.societe_id=societes.societe_id)
	ORDER BY facture_id');
	$data = '';

	}
	catch(Exception $e)
	{
	   die('Erreur : '.$e->getMessage());
	}
?>
