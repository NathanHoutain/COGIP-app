<?php
switch ($_GET['page']) {
    case 'factures':
        require "controller/factures.controller.php";
        break;

    case 'societes':
        require "controller/societes.controller.php";
        break;

    default:
    require "controller/login.controller.php";
    break;
        break;
}

?>