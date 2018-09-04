<?php
session_start();
$pageTitle = "Dashboard";
include('includes/header.php');
require_once('includes/db-connect.php');
switch ($_GET['page']) {
	case 'contacts':
		require "controllers/contacts.controller.php";
		break;
	case 'add-contact':
		require "controllers/contacts-add.controller.php";
		break;
	case 'edit-contact':
		require "controllers/contacts-edit.controller.php";
		break;
		case 'delete-contact':
		require "controllers/contacts-delete.controller.php";
		break;
	case 'contact-details':
		require "controllers/contacts-details.controller.php";
		break;
	case 'societes':
        require "controllers/societes.controller.php";
        break;
	case 'societe-details':
		require "controllers/societes-details.controller.php";
		break;
	case 'add-societe':
		require "controllers/societes-add.controller.php";
		break;
	case 'edit-societe':
		require "controllers/societes-edit.controller.php";
		break;
	case 'delete-societe':
		require "controllers/societes-delete.controller.php";
		break;
	case 'factures':
        require "controllers/factures.controller.php";
        break;
	case 'facture-details':
		require "controllers/factures-details.controller.php";
		break;
	case 'add-facture':
		require "controllers/factures-add.controller.php";
		break;
	case 'edit-facture':
		require "controllers/factures-edit.controller.php";
		break;
	case 'delete-facture':
		require "controllers/factures-delete.controller.php";
		break;
	default:
		require "homepage.php";
		break;
}
include('includes/footer.php');
?>
