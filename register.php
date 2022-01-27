
<?php 
include('connection.php');
session_start();


if(isset($_POST['sub']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$type=$_POST['role'];
$addres=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];

            @$check_mobile=mysqli_query($conn,"SELECT * FROM register_tb WHERE mobile='$phone'");
            @$check_email=mysqli_query($conn,"SELECT * FROM register_tb WHERE email='$email'");
         
            if(mysqli_num_rows($check_mobile)>0)
           {

            echo "<script> alert('Mobile number already exists!');</script>";
            echo "<script>window.history.back();</script>";
            
           }


           else if(mysqli_num_rows($check_email)>0)
           {
            echo "<script> alert('email id already exists!');</script>";
            echo "<script>window.history.back();</script>";
            

           }

          
           else
               {  



 mysqli_query($conn,"INSERT INTO login_tb (username,password,role) VALUES ('$username','$password','$type')");
 $last_login_id=mysqli_insert_id($conn); 
 mysqli_query($conn,"INSERT INTO register_tb(login_id,name,phone,email,address) VALUES ('$last_login_id','$name','$phone','$email','$addres')");
 echo "<script>alert('Registration completed.');</script>";
 //echo "<script> window.location.href='register.php';</script>";  
 header('location:login.php');

}
}

?>
<!DOCTYPE html>
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
</head>

<body>
<?php include'include/head.php';?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>Register</h2>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>-->
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
               
            </ul>
        </div>
    </div>
</div>






<div class="login-register-area pt-130 pb-130 ">
    <div class="container">
     
             <div class="col-lg-7">
                <form method="post">
                <div class="billing-info-wrap">
                    <h3>Registration Form</h3>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="billing-info mb-20">
                                <label>Name</label>
                                <input type="text" name="name" onkeyup="clearmsg('spname')" id="name_id"><span id="spname" style="color: #F00"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Phone</label>
                                <input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                                name="phone" id="phone_id" onkeyup="clearmsg('spphone')"><span id="spphone" style="color: #F00"></span>

                            </div>
                        </div>
                        
                           <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Email Address</label>
                                <input type="email" name="email" id="email_id" onkeyup="clearmsg('spemail')"><span id="spemail" style="color: #F00"></span>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-select mb-20">
                                <label>Type</label>
                                <select name="role" id="type_id" onchange="clearmsg('sptype')">
                                    <option value="">Select type</option>
                                    <option value="user">user</option>
                                    <option value="worker">worker</option>
                                  
                                </select><span id="sptype" style="color: #F00"></span>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Address</label>
                                 <textarea   name="address" id="address_id" onkeyup="clearmsg('spaddress')"></textarea><span id="spaddress" style="color: #F00"></span>

                                
                               
                            </div>
                        </div>
                        
                       
                      <div class="col-lg-12 ">
                            <div class="billing-info mb-20">
                                <label>Username</label>
                                <input type="text" name="username" id="user_id" onkeyup="clearmsg('spuser')" ><span id="spuser" style="color: #F00"></span>
                            </div>
                        </div> 

                        <div class="col-lg-12 ">
                            <div class="billing-info mb-20">
                                <label>Password</label>
                                <input type="password" name="password" onkeyup="clearmsg('sppass')" id="pass_id"><span id="sppass" style="color: #F00"></span>
                            </div>
                        </div>
                        
                     
                    </div>

                    
                    <div class="checkout-account-toggle open-toggle2 mb-30">
                    
                        <button class="btn-hover checkout-btn" name="sub" onclick="return validate();" type="submit">register</button>
                    </div>
                    
                  
          
                </div>
                </form>
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
<script>
function validate()
{
    var name=document.getElementById("name_id").value.trim();
    var mobile=document.getElementById("phone_id").value;
    var email=document.getElementById("email_id").value;
     var type=document.getElementById("type_id").value;
    var address=document.getElementById("address_id").value;    
    var username=document.getElementById("user_id").value;
    var password=document.getElementById("pass_id").value;
  
    
    if(name=="")
    {
        
        document.getElementById("spname").innerHTML="*Please enter your name";
            
        return false;
    }

    if(mobile=="")
    {
        
        document.getElementById("spphone").innerHTML="Please enter your mobile";
        
        return false;
    }
    
    if(email==""||email.indexOf("@")==-1||email.indexOf(".")==-1)
    {
            document.getElementById("spemail").innerHTML="Please give valid email";
        return false;
    }
    
    if(type=="")
    {
        document.getElementById("sptype").innerHTML="Please select a type";
        return false;
    }
    if(address=="")
    {
        document.getElementById("spaddress").innerHTML="Please enter your address";
        return false;
    }
    
    if(username=="")
    {
        document.getElementById("spuser").innerHTML="Please enter username";
        return false;
    }
    
    if(password=="")
    {
        document.getElementById("sppass").innerHTML="Please enter password";
        return false;
    }               
    
   
}

function clearmsg(sp)
{
    document.getElementById(sp).innerHTML="";
}

</script>

</body>

</html>