<?php 
include('../connection.php');

$delete_wrk=$_GET['work_delete'];

$delete_wrk=mysqli_query($conn,"DELETE FROM `bag_work_tb` WHERE bag_work_id='$delete_wrk' ");
header('location:view_bag_work.php');



?>