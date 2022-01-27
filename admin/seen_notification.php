<?php
include'../connection.php';
$req_id=$_GET['edit_id'];
mysqli_query($conn,"UPDATE worker_req_tb SET status='1'");
echo "<script>window.location.href='view_workers_req.php';</script>";
?>