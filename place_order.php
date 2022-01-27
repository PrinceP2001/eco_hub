<?php
include('connection.php');
session_start();
if(!$_SESSION["role"]) 
{
   
    echo "<script>window.location.href='login.php';</script>";
} 

$login=$_SESSION['login_id'];
$register_query=mysqli_query($conn,"SELECT * FROM register_tb WHERE login_id='$login'");
$row_data=mysqli_fetch_assoc($register_query);
$reg_id=$row_data['reg_id'];

 $query=mysqli_query($conn,"SELECT order_item_tb.quantity,product_name,final_amount,product_tb.amount FROM order_tb JOIN order_item_tb ON order_tb.order_id=order_item_tb.order_id JOIN product_tb ON order_item_tb.product_id=product_tb.product_id WHERE order_tb.reg_id='$reg_id' AND order_tb.status='0' ");


if (isset($_POST['sub'])) {
   
        mysqli_query($conn,"UPDATE order_tb SET status='1'");
        echo "<script> alert('ORDER PLACED');</script>";
        echo "<script>window.location.href='user_index.php';</script>";

    
}



?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CART</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        #ordr-btn{
           background-color: #00a651;
    border: medium none;
    border-radius: 50px;
    color: #fff;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    padding: 13px 42px 12px;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
        }
    </style>
</head>

<body>
<?php include'include/header.php';?>
<!-- <div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>Cart</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                 <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Cart</span></li> 
            </ul>
        </div>
    </div>
</div> -->
<div class="cart-main-area pt-130 pb-130">
    <div class="container">
                    <div class="col-lg-7" style="margin: auto;">
                        <form method="post">
                <div class="your-order-area">
                    <h3>Your order</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Product</li>
                                    <li>Total</li>
                                </ul>
                            </div>

                            <?php while($row=mysqli_fetch_assoc($query)) {
                               $p_name=$row['product_name'];
                               $qua=$row['quantity'];
                               $final=$row['amount'];
                               $product_final=$final*$qua;
                            ?>
                            <div class="your-order-middle">
                                <ul>
                                    <li><span class="order-middle-left"><?php echo $row['product_name'];?>  X <?php echo $row['quantity'];?></span> <span class="order-price"><?php echo $product_final;?> </span></li>
                                  
                                </ul>
                                <?php } ?> 
                            </div>
                            <hr>
                           <?php
                           $query_sum=mysqli_query($conn,"SELECT SUM(final_amount) AS total FROM order_tb WHERE reg_id='$reg_id' AND status='0'");   
                           $sum=mysqli_fetch_assoc($query_sum);
                     
                           $total=$sum['total'];  ?>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="order-total"><b>Total</b></li>
                                    <li><input type="text" name="final_amount" value="<?php echo $total;?>" hidden="true"><?php echo $total;?>
                                    </li>
                                </ul>
                            </div>
                         
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion element-mrg">
                                <div class="panel-group" id="accordion">
                                    <div class="panel payment-accordion">
                                    
                                      
                                    </div>
                           
                                    <div class="panel payment-accordion">
                                        <div class="panel-heading" id="method-three">
                                            <h4 class="panel-title">
                                               <!--  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#method3">
                                                    Cash on delivery
                                                </a> -->
                                            </h4>
                                        </div>
                                       <!--  <div id="method3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Place-order mt-25 text-center " >
                        <button type="submit"  name="sub" id="ordr-btn">Place Order</button>
                    </div>
                </div>
                </form>
            </div>
    </div>
</div>















<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>