<?php
require_once('includes/db-connect.php');
require_once('repositories/contact-repository.php');

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
    var_dump($id);
    deleteContact($conn,$id);
    // header("Location: http://localhost:8888/COGIP-app/contacts.php");
    // die();
}

?>