<?php
include('connection.php'); 
session_start();
if(!$_SESSION["role"])
{
    // echo "<script>alert('you have to login first')</script>";
    echo "<script>window.location.href='login.php';</script>";
} 

$login_id=$_SESSION['login_id'];

$register=mysqli_query($conn,"SELECT * FROM register_tb WHERE login_id='$login_id'");
$reg=mysqli_fetch_assoc($register);
$user=$reg['reg_id'];
 $query=mysqli_query($conn,"SELECT * FROM equipment_collection_tb JOIN equipment_tb ON equipment_collection_tb.equipment_id=equipment_tb.equipment_id WHERE reg_id='$user' AND status2='0' ");
 

if(isset($_POST['sub']))
{
    

    $product_id_array[]=$_POST['product'];
    $cart_array[]=$_POST['cart'];
    $qua_array[]=$_POST['quanti'];
    $amount_array[]=$_POST['rate'];
    $quantity_array[]=$_POST['quantity'];

      // var_dump($amount_array);exit();
    $count=count($cart_array['0']);
    

    $total_rate=0;
        $i=0;
        for($i=0;$i<$count;$i++)
        {
            $amt=0;
            $collection_id=$cart_array['0'][$i];
            
            // $data=mysqli_query($conn,"SELECT * FROM rent_collection_tb WHERE collection_id='$cart_id'");
            // $row_data=mysqli_fetch_assoc($data);
          $qty= $qua[$i]=$qua_array['0'][$i];

            $equipment_id=$product_id_array['0'][$i];
            $p_amount=$amount_array['0'][$i];
            // $amt=$p_amount*$qua[$i];
            //$total_rate=$total_rate + $amt;
             $available_qty = $quantity_array['0'][$i];


             // var_dump($amt);exit();
 
             // $order_query=mysqli_query($conn,"INSERT INTO order_tb (reg_id,final_amount) VALUES ('$user','$amt')");
             // $ordr_id=mysqli_insert_id($order_query);
             // mysqli_query($conn,"INSERT INTO order_item_tb(order_id,product_id,quantity,amount) VALUES ('$ordr_id','$product_id','$qua','$amt')");
             // // mysqli_query($conn,"DELETE FROM cart_tb WHERE cart_id='$cart_id'");
             // mysqli_query($conn,"UPDATE product_tb SET quantity= quantity -'$qua'   WHERE product_id='$product_id'");
             //  echo "<script>alert('success');</script>";
            if($available_qty>=$qty){
                        $update_cart="UPDATE `equipment_collection_tb` SET `status2`='1' WHERE collection_id=$collection_id";
                         mysqli_query($conn,$update_cart);  
                         // echo "<script>window.location.href='place_order.php';</script>";

                        $update_cart="UPDATE `equipment_collection_tb` SET `quantity`=$qty WHERE collection_id=$collection_id";
                         mysqli_query($conn,$update_cart);  




                        $update_eqp="UPDATE `equipment_tb` SET `quantity`=`quantity`-$qty WHERE equipment_id=$equipment_id";
                        mysqli_query($conn,$update_eqp);  
                        
        
            }else{
               echo "<script>alert('Sorry...Available quantity is $available_qty');</script>";

                        echo "<script>window.location.href='rent_cart.php';</script>";  
            }


// echo $update_eqp.'<br>'.$update_cart.'<br>';
        }


   mysqli_query($conn,"SELECT *FROM equipment_collection_tb WHERE collection_status='1'");
    

              
    echo "<script>alert('success');</script>";

    echo "<script>window.location.href='placedorder.php';</script>";
        

// die();
    
   
 

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
</head>

<body>
<?php include'include/header.php';?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>Cart</h2>
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
        <h3 class="cart-page-title">Your cart</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form method="post">
                    <div class="table-content table-responsive cart-table-content">

                        <table style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Rent Amount Per Day</th>
                                    <th>Qty</th>
                                   
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row=mysqli_fetch_assoc($query))
                                {

                                    $quantity=$row['quantity'];
                                    ?>
                                    
                                <tr>
                                    <td class="product-thumbnail">
                                        <input type="hidden" name="quantity[]" value="<?php echo $quantity ?>">
                                        <a href="#"><img src="admin/image/<?php echo $row['image'];?>" width="100" height="100" alt=""></a>
                                         <input class="cart-plus-minus-box" type="text" value="<?php echo $row['collection_id'];?>" name="cart[]" hidden="ture">
                                         <input class="cart-plus-minus-box" type="text" value="<?php echo $row['equipment_id'];?>" name="product[]" hidden="ture">
                                    </td>
                                    <td class="product-name"><a href="#"><?php echo $row['equipment_name'];?></a></td>
                                    <td class="product-price-cart"><input class="cart-plus-minus-box" type="text" value="<?php echo $row['amount'];?>" name="rate[]" hidden="ture"><span class="amount"><?php echo $row['rent_rate'];?></span></td>
                                    
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus" style="margin-left:30%; ">
                                            <input class="cart-plus-minus-box" type="number" name="quanti[]" value="1">
                                           
                                        </div>
                                    </td>
                                   
                                    
                                </tr>
                              <?php } ?>
                            </tbody>
                        </table>
                    </div>
               

                                        <button class="default-btn text-center mt-20" style="background-color: white; float: right;" type="submit" name="sub"><i style="color:green;">CONFIRM</i></button>
                                     
                                   
                </form>
             
            </div>
        </div>
    </div>
</div>

<footer class="footer-area">
   <!-- <div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url(assets/img/bg/bg-4.jpg);">
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