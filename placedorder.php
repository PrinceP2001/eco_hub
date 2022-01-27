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

 $query=mysqli_query($conn,"SELECT equipment_collection_tb.quantity,equipment_tb.equipment_name,equipment_collection_tb.status2,equipment_collection_tb.collection_status,equipment_tb.rent_rate FROM equipment_tb JOIN equipment_collection_tb ON equipment_tb.equipment_id=equipment_collection_tb.equipment_id  WHERE equipment_collection_tb.reg_id='$reg_id' AND equipment_collection_tb.status2='1' AND equipment_collection_tb.collection_status='0' ");


if (isset($_POST['sub'])) {
   
       mysqli_query($conn,"UPDATE equipment_collection_tb SET collection_status='1' WHERE collection_status!='2' AND status2!='2' ");
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
                               $p_name=$row['equipment_name'];
                               $qua=$row['quantity'];
                               $final=$row['rent_rate'];
                               // $product_final=$final*$qua;
                                $amount=$final*$qua;
                            ?>
                            <div class="your-order-middle">
                                <ul>
                                    <li><span class="order-middle-left"><?php echo $row['equipment_name'];?>  X <?php echo $row['quantity'];?></span> <span class="order-price"><?php echo $amount;?> </span></li>
                                  
                                </ul>
                                <?php } ?> 
                            </div>
                            <hr>

                            <div class="your-order-bottom">
                                <ul>
                                    <li class="order-total"><b>Total</b></li>
                                    <li><input type="text" name="final_amount" value="<?php echo $amount;?>" hidden="true"><?php echo $amount;?>
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