<?php 
include('connection.php');
session_start();

$query=mysqli_query($conn,"SELECT * FROM information_tb ORDER BY information_id DESC");


?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>INFORMATION CENTER</title>
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
<?php include('include/header.php'); ?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-5.jpg);">
        <div class="container">
            <h2>INFORMATIONS FOR FARMERS   </h2>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>-->
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <!-- <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog Details</span></li>
            </ul> -->
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
     
            <div class="col-xl-12 col-lg-12">
                <div class="blog-details-wrap ">
                    <?php while($row=mysqli_fetch_assoc($query)) {
                            $date=$row['date'];
                            $c=date("l jS \of F Y", strtotime($date));
                          
                         ?>
                    <div class="blog-details-top">
                        <!-- <img src="assets/img/blog/blog-details.jpg" alt=""> -->


                        
                        <div class="blog-details-content-wrap">
                            <div class="b-details-meta-wrap">
                                <div class="b-details-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?php echo $c;?></li>
                                                                           </ul>
                                </div>
                                <span>Krishibhavan</span>
                            </div>
                            <h3><?php echo $row['heading'];?></h3>
                            <p><?php echo $row['content'];?></p>
                           <!--  <blockquote>
                                <i class="quote-top fa fa-quote-left"></i>
                                Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariaatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit 
                                <i class="quote-bottom fa fa-quote-right"></i>
                            </blockquote> -->
                           
                            <div class="blog-share-tags">
                              
                            </div>
                        </div>








                    </div>
                    <?php } ?>
              
                 
          
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