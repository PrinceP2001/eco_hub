<?php
include('connection.php');
session_start();
 

$login_id=$_SESSION['login_id'];

$register=mysqli_query($conn,"SELECT * FROM register_tb WHERE login_id='$login_id'");
$reg=mysqli_fetch_assoc($register);
$user=$reg['reg_id'];

$id=$_GET['eq_id'];
 $query=mysqli_query($conn,"SELECT * FROM equipment_collection_tb WHERE reg_id='$user' AND equipment_id='$id' AND collection_status='0'");

if(mysqli_num_rows($query)>0)
{
	echo "<script>alert(confirm request);</script>";
   echo "<script>window.location.href='rent_cart.php';</script>";
}
else{	

mysqli_query($conn,"INSERT INTO equipment_collection_tb (equipment_id,reg_id) VALUES ('$id','$user')");
echo "<script>window.location.href='rent_cart.php';</script>";
}
?>