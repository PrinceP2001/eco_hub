<?php 
session_start();


include('connection.php');

$product_query=mysqli_query($conn,"SELECT * FROM product_tb WHERE status='1' ORDER BY product_id DESC");

$equipment_query=mysqli_query($conn,"SELECT * FROM equipment_tb  ORDER BY equipment_id DESC");

?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>INDEX</title>
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
</head>

<body>
<?php include('include/header.php');?>
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider slider-height-2 bg-img align-items-center d-flex slider-overlay2-1 default-overlay" style="background-image:url(assets/img/slider/slider-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="slider-content slider-content-2 slider-animated-2 text-center">
                            <h1 class="animated">Welcome to Eco Hub</h1>
                            <!--<p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>-->
                            <div class="slider-btn">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height-2 align-items-center d-flex bg-img slider-overlay2-2 default-overlay" style="background-image:url(assets/img/slider/slider-3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="slider-content slider-content-2 slider-animated-2 text-center">
                            <h1 class="animated">Welcome to Eco Hub</h1>
                            <!--<p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>-->
                            <div class="slider-btn">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height-2 align-items-center d-flex bg-img slider-overlay2-3 default-overlay" style="background-image:url(assets/img/slider/slider-4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="slider-content slider-content-2 slider-animated-2 text-center">
                            <h1 class="animated">Welcome to Eco Hub</h1>
                            <!--<p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>-->
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











<div class="producta-area pb-130">
    <div class="container">
        <div class="section-title mb-75 mt-50 mrg-bottom-small">
            <h2>New <span>Products</span></h2>
            <!--<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>-->
        </div>
        <div class="producta-active">
            <?php while($row=mysqli_fetch_assoc($product_query)){?>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="single-product.html"><img src="product/<?php echo $row['image'];?>" width="270" height="343"></a>
                    <span>Sale</span>
                    <div class="product-action">
                        <ul>                           
                           <li><a title="Compare" style="width:100%;"><i class=""></i></a></li>
                                                    <li><a title="Add To Cart" href="add_cart.php?id=<?php echo $row['product_id'];?>" style="width:100%;"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <!-- <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class=""></i></a></li> -->
                                                    <li><a title="Wishlist" style="width:100%;"><i class=""></i></a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="product-content"> 
                    <div class="product-content">
                                            <div class="pro-category-price">
                                                        <span class="pro-category"><?php echo $row['product_name'];?></span>
                                                        <span class="pro-price"><?php echo $row['kg'];?>Kg</span>
                                                    </div>
                       <!--  <div class="product-rating">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </div> -->
                    </div>
           
                     <div class="pro-category-price">
                        <span class="pro-category">AMOUNT</span>
                        <span class="pro-price"><?php echo $row['amount'];?></span>
                    </div>
                         <?php if($row['quantity']=='0'){?>


                    <div class="pro-category-price">
                        <span class="pro-category" style="color: red; margin-left: 22%; margin-top: 6%;">OUT OF STOCK</span>
                      
                    </div>

                 <?php  } else { ?>


                     <div class="pro-category-price">
                        <span class="pro-category">Available :</span>
                        <span class="pro-price"><?php echo $row['quantity'];?></span>
                    </div>
                    
               <?php } ?>
                </div>
            </div>

        <?php } ?>

          
          
        </div>
    </div>
    <div class="blog-comment" style="margin-left: 43%; margin-top: 5%;">
       <div class="blog-comment-btn mb-80 ">
           <a href="organic.php">SEE ALL</a>
       </div>
   </div>

</div>

<div class="producta-area pb-130">
    <div class="container">
        <div class="section-title mb-75 mrg-bottom-small">
            <h2>ECO <span>Products</span></h2>
            <!--<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>-->
        </div>
        <div class="producta-active">
            <?php
            $bag_query=mysqli_query($conn,"SELECT * FROM paper_bag_tb ");
             while($row1=mysqli_fetch_assoc($bag_query)){?>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="single-product.html"><img src="admin/image/<?php echo $row1['bag_image'];?>" width="270" height="343"></a>
                    <span>Sale</span>
                    <div class="product-action">
                        <ul>                           
                           <li><a title="Compare" style="width:100%;"><i class=""></i></a></li>
                                                    <li><a title="request for product" href="bag_request.php?id=<?php echo $row1['bag_id'];?>" style="width:100%;">Request</a></li>
                                                    <!-- <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class=""></i></a></li> -->
                                                    <li><a title="Wishlist" style="width:100%;"><i class=""></i></a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="product-content">
                    <div class="pro-title-rating-wrap">
                        <div class="product-title">
                            <h3><a href="single-product.html"><?php echo $row1['model_name'];?></a></h3>
                        </div>
                       <!--  <div class="product-rating">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </div> -->
                    </div>
                    <div class="pro-category-price">
                       <!--  <span class="pro-category">AMOUNT</span>
                        <span class="pro-price"><?php echo $row['amount'];?></span> -->
                    </div>
                </div>
            </div>

        <?php } ?>

          
          
        </div>
    </div>
    <div class="blog-comment" style="margin-left: 43%; margin-top: 5%;">
       <div class="blog-comment-btn mb-80 ">
           <a href="bag.php">SEE ALL</a>
       </div>
   </div>

</div>

<div class="producta-area pb-130">
    <div class="container">
        <div class="section-title mb-75 mrg-bottom-small">
            <h2>RENT <span>Equipments</span></h2>
            <!--<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>-->
        </div>
        <div class="producta-active">
            <?php while($row=mysqli_fetch_assoc($equipment_query)){?>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="single-product.html"><img src="admin/image/<?php echo $row['image'];?>" width="270" height="343"></a>
                    <span>Sale</span>
                    <div class="product-action">
                        <ul>                           
                           <li><a title="Compare" style="width:100%;"><i class=""></i></a></li>
                                                    <li><a title="rent" href="rent_equip.php?eq_id=<?php echo $row['equipment_id']; ?>" style="width:100%;"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <!-- <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class=""></i></a></li> -->
                                                    <li><a title="Wishlist" style="width:100%;"><i class=""></i></a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="product-content">
                    <div class="pro-title-rating-wrap">
                        <div class="product-title">
                            <h3><a href="single-product.html"><?php echo $row['equipment_name'];?></a></h3>
                        </div>
                       <!--  <div class="product-rating">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </div> -->
                    </div>
                <?php    if($row['quantity']=='0'){ ?>
                    <div class="pro-category-price">
                        <span class="pro-category" style="color: red; margin-left: 22%; margin-top: 6%;">OUT OF STOCK</span>
                       
                    </div>
              <?php  } else { ?>


                     <div class="pro-category-price">
                        <span class="pro-category">Available :</span>
                        <span class="pro-price"><?php echo $row['quantity'];?></span>
                    </div>
                    <div class="pro-category-price">
                        <span class="pro-category">AMOUNT per day :</span>
                        <span class="pro-price"><?php echo $row['rent_rate'];?></span>
                    </div>

               <?php } ?>
                </div>
            </div>

        <?php } ?>

          
          
        </div>
    </div>
    <div class="blog-comment" style="margin-left: 43%; margin-top: 5%;">
       <div class="blog-comment-btn mb-80 ">
           <a href="rentequipment.php">SEE ALL</a>
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