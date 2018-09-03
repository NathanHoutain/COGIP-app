<?php
    
    //DELETE AN ELEMENT
    if(isset($_POST['id'])) $id=intval($_POST['id']);
    if(isset($_POST['trash_button'])){
    $trash_button = $_POST['trash_button'];
}
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Sociétés</title>
</head>
<body>

<h1>Page sociétés</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Pays</th>
            <th>N° téléphone</th>
            <th>TVA</th>
        </tr>
        <?php while ($societe = $societes->fetch()){ ?>
        <tr>
            <td><?= $societe['societe_nom']; ?></td>
            <td><?= $societe['societe_adresse'];?></td>
            <td><?= $societe['societe_pays']; ?></td>
            <td><?= $societe['societe_tel']; ?></td> 
            <td><?= $societe['societe_tva']; ?></td>
            <td>
                <form method="post" action="controller/societes.controller.php">
                    <button type="submit" class="btn btn-light" name="trash_button" value="<?php echo $societe['societe_id'];?>"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        <?php }
            echo $_POST['trash_button'];
        ?>
        
    </table>

</body>
    <style>
    </style>
</html>