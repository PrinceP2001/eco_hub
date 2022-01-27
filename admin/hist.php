<?php 
include('../connection.php');

$item_id=$_GET['item_id'];

$clear=mysqli_query($conn,"DELETE  FROM `order_item_tb` WHERE item_id='$item_id' ");
header('location:placed_order.php');


 
?>