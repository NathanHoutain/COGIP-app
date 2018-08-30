<!DOCTYPE HTML>
<html>
	<head>
		<title>COGIP Admin - <?= $pageTitle ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body>
		<div id="wrapper" class="container-fluid">
			<div id="titles" class="row">
				<h1 class="text-center"><a href="index.php">COGIP - Admin</a></h1>
				<h2 class="text-center"><?= $pageTitle ?></h2>
			</div>
			<div id="mainContent" class="row">
				<?php require_once('nav.php'); ?>
				<div id="adminContent" class="col-9">
				