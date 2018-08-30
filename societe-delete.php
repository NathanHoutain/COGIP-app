<?php
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

    $del_row = 'DELETE FROM societes WHERE societe_id = ?' ;
    $q = $bdd->prepare($del_row);
    $q->execute([$_POST['trash_button']]);
    header("Refresh:0; url=societes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
</head>
<body>
    <?php echo $_POST['trash_button'];
    ?>
    
</body>
</html>