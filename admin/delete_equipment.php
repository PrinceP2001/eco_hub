<?php 
include('../connection.php');

$delete_equipment=$_GET['equipment_delete'];

$delete_equipments=mysqli_query($conn,"DELETE FROM `equipment_tb` WHERE equipment_id='$delete_equipment'");

header('location:view_equipment.php'); 



?>