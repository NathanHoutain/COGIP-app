<?php
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);

    function societesPage(){
        require "model/societes.model.php";

        // $del_row = 'DELETE FROM societes WHERE societe_id = ?' ;
        // $q = $bdd->prepare($del_row);
        // $q->execute([$_POST['trash_button']]);
        // header("Refresh:0");

        $societes = getSocietes();

        if(isset($_POST['submit'])){
            $addvalue = $bdd->query('INSERT INTO societes (societe_id, societe_nom, societe_adresse, societe_pays, societe_tel, societe_tva, type_id) VALUES("", "'.$_POST['societe_nom'].'", "'.$_POST['societe_adresse'].'", "'.$_POST['societe_pays'].'", "'.$_POST['societe_tel'].'", "'.$_POST['societe_tva'].'", "'.$_POST['type_id'].'") ');
            header("Refresh:0");
        }
        require "view/societes.view.php";
        
    }
    
    societesPage();
  
?>
