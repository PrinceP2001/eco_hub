<?php

session_start();
include'connection.php';
$edd=$_GET['edit_id'];
// var_dump($edd);exit();
mysqli_query($conn,"UPDATE `equipment_collection_tb` SET `status2`=2 WHERE collection_id='$edd'");

echo"<script>alert('DONE...');</script>";

echo"<script>window.location.href='collected.php';</script>";
?>  