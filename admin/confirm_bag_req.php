<?php
include'../connection.php';
$req_id=$_GET['id'];

mysqli_query($conn,"UPDATE bag_req_tb SET status='1' WHERE bag_req_id='$req_id'");
echo "<script>alert('success');</script>";
echo "<script>window.location.href='view_bag_req.php';</script>";



?>