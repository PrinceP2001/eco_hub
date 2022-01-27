<?php
include'../connection.php';
$req_id=$_GET['id'];
mysqli_query($conn,"INSERT INTO work_tb (req_id,status) VALUES ('$req_id','0')");
mysqli_query($conn,"UPDATE worker_req_tb SET status='2'");
echo "<script>alert('success');</script>";
echo "<script>window.location.href='view_workers_req.php';</script>";



?>