<?php

session_start();
include('../connection.php');
$edd=$_GET['req_id'];
// var_dump($edd);exit();
mysqli_query($conn,"UPDATE `product_tb` SET `status`=1 WHERE product_id='$edd'");

echo"<script>alert('request aproved');</script>";

echo"<script>window.location.href='product_request.php';</script>";
?>