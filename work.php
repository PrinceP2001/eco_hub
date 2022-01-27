<?php

session_start();
include'connection.php';
$edd=$_GET['edit_id'];
// var_dump($edd);exit();
mysqli_query($conn,"UPDATE `bag_work_tb` SET `status1`=1 WHERE bag_work_id='$edd'");

echo"<script>alert('Good...');</script>";

echo"<script>window.location.href='work_details.php';</script>";
?>