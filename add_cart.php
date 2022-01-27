<?php 
include('connection.php');
session_start();
$login_id=$_SESSION['login_id'];
$p_id=$_GET['id'];
$register=mysqli_query($conn,"SELECT * FROM register_tb WHERE login_id='$login_id'");
$reg=mysqli_fetch_assoc($register);
$user=$reg['reg_id'];

$query=mysqli_query($conn,"SELECT * FROM product_tb  WHERE product_id='$p_id'");
$row=mysqli_fetch_assoc($query);
$amount=$row['amount'];


mysqli_query($conn,"INSERT INTO `cart_tb`(product_id,reg_id,quantity,amount) VALUES ('$p_id','$user','1','$amount')");

echo "<script> alert('added to cart');</script>";
echo "<script> window.location.href='cart.php';</script>";



?>