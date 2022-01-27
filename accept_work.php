<?php 
include'connection.php';
session_start();

$login_id=$_SESSION['login_id'];

$work=$_GET['work_id'];
$reg=$_GET['reg_id'];


$quer=mysqli_query($conn,"SELECT * FROM work_accept_tb WHERE work_id='$work' AND reg_id='$reg'");
$data=mysqli_fetch_assoc($quer);

if($data>0)
{
	 echo "<script>alert('already commited work');</script>";
    echo "<script>window.location.href='work_details.php';</script>";
}

else{


    mysqli_query($conn,"INSERT INTO work_accept_tb (reg_id,work_id) VALUES ('$reg','$work')");
    mysqli_query($conn,"UPDATE worker_req_tb SET pending_workers=pending_workers - 1");
    echo "<script>alert('success..');</script>";
    echo "<script>window.location.href='work_details.php';</script>";

}
?>