<?php 
include('../connection.php');

$delete_info=$_GET['information_delete'];

$delete_infor=mysqli_query($conn,"DELETE FROM `information_tb` WHERE information_id='$delete_info'");
header('location:view_information.php');



?>