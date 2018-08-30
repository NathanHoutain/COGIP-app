<?php

switch ($_GET["page"]) {
	case 'factures':
		require "controller/factures.controller.php";
		break;

	default:
		// afficher la home page
	echo "Home page";
		break;
}

?>
