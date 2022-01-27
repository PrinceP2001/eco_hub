<?php 
include('../connection.php');

$delete_product=$_GET['product_delete'];

$delete_products=mysqli_query($conn,"DELETE FROM `product_tb` WHERE product_id='$delete_product'");

header('location:product_request.php'); 



?>