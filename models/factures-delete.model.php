<?php
include('../includes/db-connect.php');
include('../repositories/bill-repository.php');
$id = $_GET['id'];
deleteBill($conn,$id);
echo '<script type="text/javascript">
window.location = "http://localhost:8888/COGIP-app/index.php?page=factures";
exit();
</script>';
die;
?>