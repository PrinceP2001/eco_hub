<?php 
include('../connection.php');

$collection_id=$_GET['collection_id'];

$dlt_collection=mysqli_query($conn,"UPDATE `equipment_collection_tb` SET status2='4' WHERE collection_id='$collection_id' ");
header('location:return_equipment.php');



?>