<?php
include('../connection.php');
session_start();
$id=$_GET['collection_id'];
$id_eq=$_GET['eq_id'];


$date=date("Y-m-d");
mysqli_query($conn,"UPDATE equipment_collection_tb SET collection_status='2', taken_date='$date' WHERE collection_id='$id'");
mysqli_query($conn,"UPDATE equipment_tb SET current_quantity=current_quantity - 1 	WHERE equipment_id='$id_eq'");
echo "<script>window.location.href='view_req_equipment.php';</script>";

?>