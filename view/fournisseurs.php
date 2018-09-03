<?php
// Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);

        try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=becode_cogip;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    $societes = $bdd->query('SELECT * FROM societes WHERE type_id = 1 ORDER BY societe_nom ASC');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fournisseurs</title>
</head>
<body>

<h1>Page fournisseurs</h1>
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
                <form method="post" action="societe-delete.php">
                    <button type="submit" class="btn btn-light" name="trash_button" value="<?php echo $societe['societe_id'];?>"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>