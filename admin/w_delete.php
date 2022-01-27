<?php 
include('../connection.php');

$delete_id=$_GET['w_id'];

$delete_category=mysqli_query($conn,"DELETE FROM `common_worker_tb` WHERE common_worker_id='$delete_id'");
header('location:common_worker.php');



?>