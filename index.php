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
    <style>
       @media only screen and (max-width: 500px) {
        .commrnt-toggle {
      margin-left: 0; } }
    </style>
</head>

<body>
<?php include('include/head.php');?>
<div class="slider-area ">
    <div class="slider-active-2 owl-carousel nav-style-2">
        <div class="single-slider slider-height-3 bg-img pt-170" style="background-image:url(assets/img/slider/slider-bg1.jpg);">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="slider-content-3 slider-animated-2 pt-115 ml-55">
                            <h1 class="animated"><span class="text-blue">S</span>hop<span class="text-pink">P</span>ing Time</h1>
                           <!-- <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor eiusmod incididunt ut labore et dolore magna aliqua. </p>-->
                          <!--   <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="cart.html">ADD TO CART</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height-3 bg-img pt-170" style="background-image:url(assets/img/slider/slider-5.jpg);">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="slider-content-3 slider-animated-2 pt-115 ml-55">
                            <h1 class="animated"><span class="text-blue">S</span>hop<span class="text-pink">P</span>ing Time</h1>
                            <!--<p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor eiusmod incididunt ut labore et dolore magna aliqua.</p>-->
                           <!--  <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="cart.html">ADD TO CART</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area pt-130 pb-100">
    <div class="container">
       <!--  <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/book-1.png" alt=""></a>
                    </div>
                    <div class="banner-content">
                        <h5>Adventure</h5>
                        <h2>BOOK 2018</h2>
                        <div class="banner-shape">
                            <img src="assets/img/icon-img/banner-shape.png" alt="">
                        </div>
                        <div class="banner-btn">
                            <a class="default-btn" href="#">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner second-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/book-2.png" alt=""></a>
                    </div>
                    <div class="banner-content">
                        <h5>Adventure</h5>
                        <h2>BOOK 2018</h2>
                        <div class="banner-shape">
                            <img src="assets/img/icon-img/banner-shape.png" alt="">
                        </div>
                        <div class="banner-btn">
                            <a class="default-btn" href="#">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/book-3.png" alt=""></a>
                    </div>
                    <div class="banner-content">
                        <h5>Adventure</h5>
                        <h2>BOOK 2018</h2>
                        <div class="banner-shape">
                            <img src="assets/img/icon-img/banner-shape.png" alt="">
                        </div>
                        <div class="banner-btn">
                            <a class="default-btn" href="#">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<div class="producta-area pb-130">
    <div class="container">
        <div class="section-title mb-75 mrg-bottom-small">
            <h2>Organic <span>Products</span></h2>
              <!--<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>-->
        </div>
        <div class="producta-active">
            <?php while($row=mysqli_fetch_assoc($product_query)){?>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="javascript:void()"><img src="product/<?php echo $row['image'];?>" width="270" height="343"></a>
                    <span>Sale</span>
                    <div class="product-action">
                        <ul>                           
                           <li></li>
                                                    <li><a title="Add To Cart" href="cart.php" style="width:100%;"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <!-- <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class=""></i></a></li> -->
                                                    <li></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="product-content"> 
                    <div class="product-content">
                                            <div class="pro-category-price">
                                                        <span class="pro-category"><?php echo $row['product_name'];?></span>
                                                        <span class="pro-price"><?php echo $row['kg'];?>Kg</span>
                                                    </div>
                       
                    </div>
                    <div class="pro-category-price">
                        <span class="pro-category">Available :</span>
                        <span class="pro-price"><?php echo $row['quantity'];?></span>
                    </div>
                    <div class="pro-category-price">
                        <span class="pro-category">AMOUNT</span>
                        <span class="pro-price"><?php echo $row['amount'];?></span>
                    </div>
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
                    <a href="javascript:void()"><img src="admin/image/<?php echo $row1['bag_image'];?>" width="270" height="343"></a>
                    <span>Sale</span>
                    <div class="product-action">
                        <ul>                           
                          <li></li>
                                                    <li><a title="request for product" href="cart.php" style="width:100%;">Request</a></li>
                                                    <!-- <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class=""></i></a></li> -->
 
                          <li></li> 
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
                    <a href="javascript:void()"><img src="admin/image/<?php echo $row['image'];?>" width="270" height="343"></a>
                    <span>Sale</span>
                    <div class="product-action">
                        <ul>                           
                           <li></li>
                                                    <li><a title="Add To Cart" href="rent_cart.php" style="width:100%;"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <!-- <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class=""></i></a></li> -->
                                                    <li></li>
                           
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



<!--
<footer class="footer-area">
    <div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url(assets/img/bg/bg-4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>ABOUT US</h4>
                        </div>
                        <div class="footer-about">
                            <p>Ugiat nulla pariatur. Edeserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natu</p>
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>Uttara, Dhaka, Bangladesh</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="#">education@email.com</a></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span> +98 558 547 589</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>QUICK LINK</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="course.html">Courses</a></li>
                                <li><a href="#">Admission</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>COURSES</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">Under Graduate Programmes </a></li>
                                <li><a href="#">Graduate Programmes </a></li>
                                <li><a href="#">Diploma Courses</a></li>
                                <li><a href="#">Others Programmes</a></li>
                                <li><a href="#">Short Courses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>GALLERY</h4>
                        </div>
                        <div class="footer-gallery">
                            <ul>
                                <li><a href="#"><img src="assets/img/gallery/gallery-1.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/gallery/gallery-2.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/gallery/gallery-3.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/gallery/gallery-4.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>News Latter</h4>
                        </div>
                        <div class="subscribe-style">
                            <p>Dugiat nulla pariatur. Edeserunt mollit anim id est laborum. Sed ut perspiciatis unde</p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder="Your E-mail Address" name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="SUBMIT">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="#">Eco Hub</a>
                            . All Rights Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privecy & Policy</a></li>
                                <li><a href="#">Terms & Conditions of Use</a></li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>-->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/img/product/quickview-l1.jpg" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l3.jpg" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <div class="thumb-menu owl-carousel nav nav-style" role="tablist">
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/img/product/quickview-s1.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-2"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-3"><img src="assets/img/product/quickview-s3.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-4"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Product Name</h2>
                            <div class="pro-details-rating-wrap">
                                <div class="pro-details-rating">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
                                <span>(1 customer review)</span>
                            </div>
                            <h3>$329</h3>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunca augue quis neque ultrices placerat sit amet quis mauris. Integer urna libero, aliquet neque posu ullamcorper fringilla dolor. Maecenas id mattis magna. </p>-->
                            <div class="pro-details-size-color2 mt-30">
                                <div class="pro-details-color2-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color2-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                            <li class="gray"></li>
                                            <li class="green"></li>
                                            <li class="yellow"></li>
                                            <li class="white"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size2">
                                    <span>Size</span>
                                    <div class="pro-details-size2-content">
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality mt-50 mb-45">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <div class="pro-details-cart">
                                    <a class="default-btn btn-hover" href="#">Add To Cart</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <a class=" btn-hover" href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <span><i class="fa fa-check"></i> In stock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->










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