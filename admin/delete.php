<?php 
include('../connection.php');

$delete_cat=$_GET['category_delete'];

$delete_category=mysqli_query($conn,"DELETE FROM `category_tb` WHERE category_id='$delete_cat'");
header('location:view_category.php');



?>