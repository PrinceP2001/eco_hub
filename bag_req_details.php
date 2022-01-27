<?php
include('connection.php');
session_start();
if(!$_SESSION["role"])
{
    // echo "<script>alert('you have to login first')</script>";
    echo "<script>window.location.href='login.php';</script>";
} 

$login_id=$_SESSION['login_id'];



$query1=mysqli_query($conn,"SELECT * FROM register_tb WHERE login_id='$login_id'");
$reg_query=mysqli_fetch_assoc($query1);
$reg_id=$reg_query['reg_id'];

// if(isset($_POST['sub']))
// {
//     $no_of_bags=$_POST['num'];
//     $request=$_POST['req'];

//     mysqli_query($conn,"INSERT INTO bag_work_tb ( `bag_req_id`, `reg_id`, `no_of_bags`) VALUES ('$request','$reg_id','$no_of_bags')");
//     echo "<script>alert('success..');</script>";
//     echo "<script>window.location.href='worker_index.php';</script>";
// }



?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>REQUESTs</title>
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
<?php include'include/header.php';?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>BAG REQUESTS</h2>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>-->
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
               <!--  <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Cart</span></li> -->
            </ul>
        </div>
    </div>
</div>
<div class="cart-main-area pt-130 pb-130">
    <div class="container">
        <h3 class="cart-page-title"></h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form method="post">
                    <div class="table-content table-responsive cart-table-content">

                        <table style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Model Name</th>
                                    <th>Due date</th>
                                    <th>Qty</th>
                                   
                                    <th>Action</th>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query=mysqli_query($conn,"SELECT * FROM bag_req_tb JOIN paper_bag_tb ON bag_req_tb.bag_id=paper_bag_tb.bag_id WHERE req_quantity>0 AND status=1");
                                 while($row=mysqli_fetch_assoc($query))
                                {
                                    ?>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="admin/image/<?php echo $row['bag_image'];?>" width="100" height="100" alt=""></a>
                                         
                                         <input class="cart-plus-minus-box" type="text" value="<?php echo $row['bag_req_id'];?>" name="req" hidden="ture">
                                    </td>
                                    <td class="product-name"><a href="#"><?php echo $row['model_name'];?></a></td>
                                    <td class="product-price-cart"><input class="cart-plus-minus-box" type="text" value="<?php echo $row['amount'];?>" name="rate[]" hidden="ture"><span class="amount"><?php echo $row['date'];?></span></td>
                                     <td class="product-quantity">
                                        <div   >
                                            <span class="amount"><?php echo $row['req_quantity'];?></span>
                                           
                                        </div>
                                    </td>
                                   
                                    <td><a href="commit_bag_work.php?req_id=<?php echo $row['bag_req_id'];?>" type="submit"  name="sub"><i style="color:green;">commit</i></a></td>
                                   
                                    
                                </tr>
                              <?php } ?>
                            </tbody>
                        </table>
                    </div>
               

                                       <!--  <button class="default-btn text-center mt-20" style="background-color: white; float: right;" type="submit" name="sub"><i style="color:green;">CONFIRM ORDER</i></button> -->
                                     
                                   
                </form>
             
            </div>
        </div>
    </div>
</div>

<footer class="footer-area">
    <!--<div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url(assets/img/bg/bg-4.jpg);">
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
    </div>-->
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