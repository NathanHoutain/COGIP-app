<?php

switch ($_GET["page"]) {
	case 'user':
		require "controllers/user.controller.php";
		break;

	default:
		// afficher la home page
	echo "Home page";
		break;
}




?>
