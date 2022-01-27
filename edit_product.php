<?php
include('connection.php');
session_start(); 
$p_id=$_GET['product_id'];
$query=mysqli_query($conn,"SELECT * FROM product_tb WHERE product_id=$p_id");

if(isset($_POST['save']))
{
    $amount=$_POST['amt'];
    $quantity=$_POST['quanti'];

    mysqli_query($conn,"UPDATE product_tb SET amount='$amount',quantity='$quantity' WHERE product_id='$p_id' ");

    echo"<script>alert('details updated');</script>";
    header('location:view_sell_product.php');
}

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Glaxdu - Education Bootstrap 4 Template</title>
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
    <style type="text/css">.pt-130 {padding-top:60px;}</style>
</head>

<body>
<?php include('include/header.php');?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>PRODUCT VIEW</h2>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>-->
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <!-- <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Cart</span></li> -->
            </ul>
        </div>
    </div>
</div>
<div class="cart-main-area pt-130 pb-130">
    <div class="container">
        <h3 class="cart-page-title">Your products</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#" method="post">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Amount</th>
                                    <th>Qty</th>
                                   
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                               
                            
                                  <?php while($row=mysqli_fetch_assoc($query))
                                {
                                    ?>
                              <tr>
                                    <td class="product-thumbnail">
                                        <a><img src="product/<?php echo $row['image'];?>" width="100" height="100" alt=""></a>
                                    </td>
                                    <td class="product-name"><a><?php echo $row['product_name'];?></a></td>
                                   
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus" style="margin-left:30%; ">
                                            <input class="cart-plus-minus-box" type="text" name="amt" value="<?php echo $row['amount'];?>">
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus" style="margin-left:30%; ">
                                            <input class="cart-plus-minus-box" type="text" name="quanti" value="<?php echo $row['quantity'];?>">
                                        </div>
                                    </td>
                                    
                                    <td class="product-remove">
                                        <button type="submit" name="save"><i class="fa fa-save"></i></button>
                                        <!-- <a href="#" type="reset"><i class="fa fa-times"></i></a> -->
                                   </td>
                                </tr>
                                  <?php } ?>
                            </tbody>
                        </table>
                    </div>
              
                </form>
             
            </div>
        </div>
    </div>
</div>

<footer class="footer-area">
    
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="#">ECO HUB</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Terms & Conditions of Use</a></li>
                            </ul>
                        </div>
                        <!--<div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>













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