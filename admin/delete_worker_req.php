<?php 
include('../connection.php');

$delete_wrkr=$_GET['worker_delete'];

$delete_wrkr_req=mysqli_query($conn,"DELETE FROM `worker_req_tb` WHERE req_id='$delete_wrkr'");

header('location:view_workers_req.php');



?>