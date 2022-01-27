<?php
include('../connection.php');
session_start();


$id=$_GET['collection_id'];

$equipment_query=mysqli_query($conn,"SELECT * FROM equipment_collection_tb WHERE collection_id='$id'");
$data=mysqli_fetch_assoc($equipment_query);
$e_id=$data['equipment_id'];
 $query=mysqli_query($conn,"UPDATE equipment_collection_tb SET status2='3' WHERE collection_id='$id'");
 $query1=mysqli_query($conn,"UPDATE equipment_tb SET current_quantity=current_quantity + 1 WHERE equipment_id='$e_id'");

 echo "<script>alert('item returned');</script>";
   echo "<script>window.location.href='return_equipment.php';</script>";


?>