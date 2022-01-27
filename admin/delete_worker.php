<?php 
include('../connection.php');

$delete_wrkr=$_GET['worker_delete'];

$delete_wrkr=mysqli_query($conn,"DELETE FROM `register_tb` WHERE login_id='$delete_wrkr'");
$delete_wrkr_login=mysqli_query($conn,"DELETE FROM login_tb WHERE login_id='$delete_wrkr'");
header('location:view_workers.php');



?>