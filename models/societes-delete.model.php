<?php
echo 'test';
include('../includes/db-connect.php');
include('../repositories/contact-repository.php');
$id = $_GET['id'];
deleteCompany($conn,$id);
echo '<script type="text/javascript">
window.location = "http://localhost:8888/COGIP-app/index.php?page=societes";
exit();
</script>';
die;
?>