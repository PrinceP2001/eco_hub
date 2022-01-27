<?php
include('connection.php');
session_start();
@$role=$_SESSION['role'];
if($role!==NULL)
{
  if($role=='admin')
{
  header("location:admin/index.php");  
}
if($role=='user')
{
  header("location:user_index.php");  
}
if($role=='worker')

{
    header('location:worker_index.php');
}
}


if(isset($_POST['sub']))
{
$name=$_POST['username'];
$pass=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM login_tb WHERE username='$name' AND password='$pass'");
$result=mysqli_fetch_assoc($query);
if(mysqli_num_rows($query)>0)
{
    $role=$result['role'];
     $lid=$result['login_id'];
     //var_dump($lid);exit();
    if($role=='admin')
    {
        $_SESSION['login_id']=$result['login_id'];
        $_SESSION['role']=$result['role'];
        header('location:admin/index.php');
    }
    if($role=='worker')
    {

        $aprove=mysqli_query($conn,"SELECT * FROM register_tb WHERE login_id='$lid'");
          $checking_aproval=mysqli_fetch_assoc($aprove);
          //var_dump($checking_aproval);exit();
          if($checking_aproval['status']=='1')
          {
             $_SESSION['login_id']=$result['login_id'];
             $_SESSION['role']=$result['role'];
             header('location:worker_index.php');
          }
          else
          {
            echo"<script>alert('waiting for approval...!')</script>";
          }

       
    }

     if($role=='user')
    {
        $_SESSION['login_id']=$result['login_id'];
        $_SESSION['role']=$result['role'];
        header('location:user_index.php');
    }
}
else
 {
   echo "<script>alert('invalid username or password!');</script>";
 }


}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LOGIN</title>
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
<?php include('include/head.php');?>
<!-- <div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>Login</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                 <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>login/Register</span></li> 
            </ul>
        </div>
    </div>
</div> -->
<div class="login-register-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                      
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <span id="spname" style="color: #F00"></span>
                                        <input type="text" name="username" id="name_id" onkeyup="clearmsg('spname')"  placeholder="Username">
                                        <span id="sppass" style="color: #F00"></span>
                                        <input type="password" name="password" id="pass_id" onkeyup="clearmsg('sppass')" placeholder="Password">
                                        <div class="button-box">
                                            <!-- <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div> -->
                                            <button class="default-btn" name="sub" onclick="return validate()" type="submit"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
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
<script>
function validate()
{
    var username=document.getElementById("name_id").value.trim();
   
    var password=document.getElementById("pass_id").value;
  
    
 

    
    if(username=="")
    {
        document.getElementById("spname").innerHTML=" *Please enter username";
        return false;
    }
    
    if(password=="")
    {
        document.getElementById("sppass").innerHTML=" *Please enter password";
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