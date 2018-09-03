<?php
session_start();
include('includes/header.php');
require_once('includes/db-connect.php');
session_destroy();
echo '<script type="text/javascript">
window.location = "http://localhost:8888/COGIP-app/index.php";
exit();
</script>';
?>