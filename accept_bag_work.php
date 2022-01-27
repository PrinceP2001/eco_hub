<?php 
include'connection.php';
session_start();

$login_id=$_SESSION['login_id'];

$request=$_GET['req_id'];

$query1=mysqli_query($conn,"SELECT * FROM register_tb WHERE login_id='$login_id'");
$reg_query=mysqli_fetch_assoc($query1);
$reg_id=$reg_query['reg_id'];

if(isset($_POST['sub']))
{
    $no_of_bags=$_POST['num'];


    mysqli_query($conn,"INSERT INTO bag_work_tb ( `bag_req_id`, `reg_id`, `no_of_bags`) VALUES ('$request','$reg_id','$no_of_bags')");
    echo "<script>alert('success..');</script>";
    echo "<script>window.location.href='worker_index.php';</script>";
}

?>