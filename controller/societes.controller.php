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

        $del_row = 'DELETE FROM societes WHERE societe_id = ?' ;
        $q = $bdd->prepare($del_row);
        $q->execute([$_POST['trash_button']]);
        header("Refresh:0");

        $societes = getSocietes();
        require "view/societes.view.php";

    }
    
    societesPage();
  
?>
