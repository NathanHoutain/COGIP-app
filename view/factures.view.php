<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tableau factures</title>
</head>

<body>

<table BORDER="1">
  <caption><h3> Tableau des factures </h3></caption>
   <th> Numero </th>
   <th> Date de facturation </th>
   <th> Date de la prestation </th>
   <th> Motif </th>
   <th> Société </th>
   <th> Contact </th>

<?php

  while ($data = $result->fetch())
  {?>
     <tr>
      <td> <?= $data['facture_numero'];?>  </td>
      <td> <?= $data['facture_date'];?>  </td>
      <td> <?= $data['facture_date_presta'];?>  </td>
      <td> <?= $data['facture_motif'];?>  </td>
      <td> <?= $data['societe_nom'];?>  </td>
      <td> <?= $data['contact_prenom'].' '.$data['contact_nom'];?>  </td>
    </tr>
<?php
}
  ?>

  	<h1></h1>
  	<form action="factures.php" method="post">
  		<div>
  			<label for="facture_numero">Numero</label>
  			<input type="text" name="facture_numero" value="">
  		</div>

  		<div>
  			<label for="facture_date">Date</label>
  			<input type="date" name="facture_date" value="">
  		</div>
  		<div>
  			<label for="facture_date_presta">Date prestation</label>
  			<input type="date" name="facture_date_presta" value="">
  		</div>
  		<div>
  			<label for="facture_motif">Motif</label>
  			<input type="textarea" name="facture_motif" value="">
  		</div>
      <div>
  			<label for="societe_id">Id Société</label>
  			<input type="number" name="societe_id" value="">
  		</div>
      <div>
  			<label for="contact_id">Id Contact</label>
  			<input type="number" name="contact_id" value="">
  		</div>
  		<button type="submit" name="submit">Ajouter</button>
  </form>
</table>
