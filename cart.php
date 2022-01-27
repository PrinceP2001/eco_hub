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
//var_dump($user);exit();
 $query=mysqli_query($conn,"SELECT cart_tb.cart_id,cart_tb.quantity,product_tb.product_name,product_tb.amount,product_tb.image,product_tb.product_id FROM cart_tb JOIN register_tb ON cart_tb.reg_id=register_tb.reg_id JOIN product_tb ON cart_tb.product_id=product_tb.product_id WHERE register_tb.login_id='$login_id'");
   

// $data=mysqli_query($conn,"SELECT product_tb.product_id,product_tb.quantity,order_item_tb.order_id,product_tb.amount,order_tb.reg_id FROM order_item_tb JOIN product_tb ON product_tb.product_id=order_item_tb.product_id JOIN order_tb ON order_tb.order_id=order_item_tb.order_id");
// $dat=mysqli_fetch_assoc($data);
//var_dump($dat);exit();
// $var=$dat['quantity'];
//var_dump($var);exit();

// $one=mysqli_query($conn,"SELECT quantity,total_quantity, total_quantity - quantity AS available FROM order_item_tb ");
// $data1=mysqli_fetch_assoc($one);
//var_dump($data1);exit();
// $data2=$data1['available'];
//var_dump($data2);exit();

if(isset($_POST['sub']))
{


     $query1=mysqli_query($conn,"SELECT * FROM cart_tb WHERE reg_id='$user'");

     
    
    // $p_amount=$product['amount'];
    //var_dump($p_amount);exit();
    $product_id_array[]=$_POST['product'];
    $cart_array[]=$_POST['cart'];
    $qua_array[]=$_POST['quanti'];
    $amount_array[]=$_POST['rate'];

      // var_dump($amount_array);exit();
    $count=count($cart_array['0']);
    
    
$total_rate=0;
        $i=0;
        for($i=0;$i<$count;$i++)
        {
            $amt=0;
            $cart_id=$cart_array['0'][$i];
            
            $data=mysqli_query($conn,"SELECT * FROM cart_tb WHERE cart_id='$cart_id'");
            $row_data=mysqli_fetch_assoc($data);
            $qua[$i]=$qua_array['0'][$i];
            $product_id=$product_id_array['0'][$i];
            $p_amount=$amount_array['0'][$i];
            $amt=$p_amount*$qua[$i];
            $total_rate=$total_rate + $amt;

             // var_dump($amt);exit();
 
             // $order_query=mysqli_query($conn,"INSERT INTO order_tb (reg_id,final_amount) VALUES ('$user','$amt')");
             // $ordr_id=mysqli_insert_id($order_query);
             // mysqli_query($conn,"INSERT INTO order_item_tb(order_id,product_id,quantity,amount) VALUES ('$ordr_id','$product_id','$qua','$amt')");
             // // mysqli_query($conn,"DELETE FROM cart_tb WHERE cart_id='$cart_id'");
             // mysqli_query($conn,"UPDATE product_tb SET quantity= quantity -'$qua'   WHERE product_id='$product_id'");
             //  echo "<script>alert('success');</script>";

             // echo "<script>window.location.href='place_order.php';</script>";
        }
        $order_query=mysqli_query($conn,"INSERT INTO order_tb (reg_id,final_amount) VALUES ('$user','$total_rate')");
        $ordr_id=mysqli_insert_id($conn);
       
$j=0;
 while ($product=mysqli_fetch_assoc($query1)) 
           {

            $id_product=$product['product_id'];
            $qty=$qua[$j];
            $cart_amount=$product['amount'];
            // $var=$dat['quantity'];
            
            mysqli_query($conn,"INSERT INTO order_item_tb(order_id,product_id,quantity,amount) VALUES ('$ordr_id','$id_product','$qty','$cart_amount')");
            $j++;
              
            mysqli_query($conn,"UPDATE `product_tb` SET `quantity`=`quantity`-$qty WHERE product_id=$id_product");    
           

       }
   
   mysqli_query($conn,"DELETE FROM cart_tb WHERE reg_id='$user'");
          
echo "<script>window.location.href='place_order.php';</script>";

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
                                    <th>Amount</th>
                                    <th>Qty</th>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row=mysqli_fetch_assoc($query))
                                {
                                    ?>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="product/<?php echo $row['image'];?>" width="100" height="100" alt=""></a>
                                         <input class="cart-plus-minus-box" type="text" value="<?php echo $row['cart_id'];?>" name="cart[]" hidden="ture">
                                         <input class="cart-plus-minus-box" type="text" value="<?php echo $row['product_id'];?>" name="product[]" hidden="ture">
                                    </td>
                                    <td class="product-name"><a href="#"><?php echo $row['product_name'];?></a></td>
                                    <td class="product-price-cart"><input class="cart-plus-minus-box" type="text" value="<?php echo $row['amount'];?>" name="rate[]" hidden="ture"><span class="amount"><?php echo $row['amount'];?></span></td>
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
               

                                        <button class="default-btn text-center mt-20" style="background-color: white; float: right;" type="submit" name="sub"><i style="color:green;">CONFIRM ORDER</i></button>
                                     
                                   
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