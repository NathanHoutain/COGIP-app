<?php
session_start();
$pageTitle = "Login";
if(isset($_SESSION['currentUser'])){
    include('includes/header.php');
}
require_once('includes/db-connect.php');
require_once('repositories/contact-repository.php');

?>
<form action="login-treatment.php" method="post">
    <label for="loginEmail">Email</label>
    <input type="email" name="loginEmail" id="loginEmail">
    <label for="loginPwd">Mot de passe</label>
    <input type="password" name="loginPwd" id="loginPwd">
    <input type="submit" value="Se connecter">
</form>