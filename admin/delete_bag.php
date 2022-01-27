<?php 
include('../connection.php');

$delete_bag=$_GET['bag_delete'];

$delete_equipments=mysqli_query($conn,"DELETE FROM `paper_bag_tb` WHERE bag_id='$delete_bag'");

header('location:view_eco.php'); 



?>