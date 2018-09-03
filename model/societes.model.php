<?php
    function getSocietes(){
            try
        {
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=becode_cogip;charset=utf8', 'root', 'root');
            $societes = $bdd->query('SELECT * FROM societes ORDER BY societe_nom ASC');
        }
        catch(Exception $e)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
        }
        return $societes;
    }
?>