<!-- onclick de société => informations de la société -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détail société</title>
</head>
<body>

    <table>
        <tr>
            <th>Nom</th>
            <td>BeCode<?php $societe['societe_nom']?></td>
            <th>Adresse</th>
            <td>Cantersteen<?php $societe['societe_adresse']?></td>
        </tr>
        <tr>
            <th>N° TVA</th>
            <td>123456789<?php $societe['societe_tva']?></td>
            <th>N° tél</th>
            <td>0499999999<?php $societe['societe_tel']?></td>
        </tr>
        <tr>
            <th colspan="2">Personne de contact</th>
            <td colspan="2">Cédric Fournier<?php $societe['societe_tva']?></td>
        </tr>
    </table>
    
</body>
    <style>
        th{
            background-color: rgb(232, 234, 237);
        }
    </style>
</html>