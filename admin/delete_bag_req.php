<?php 
include('../connection.php');

$delete_req=$_GET['worker_delete'];

$delete_bag_req=mysqli_query($conn,"DELETE FROM `bag_req_tb` WHERE bag_req_id='$delete_req'");
header('location:view_bag_req.php');



?>