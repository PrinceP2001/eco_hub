<?php 
include('../connection.php');

$delete_user=$_GET['user_delete'];

$delete_wrkr=mysqli_query($conn,"DELETE FROM `register_tb` WHERE login_id='$delete_user'");
$delete_wrkr_login=mysqli_query($conn,"DELETE FROM login_tb WHERE login_id='$delete_user'");
header('location:view_users.php'); 



?>