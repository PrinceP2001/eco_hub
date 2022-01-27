<?php
include('connection.php');
session_start(); 
$login=$_SESSION['login_id'];
$register_query=mysqli_query($conn,"SELECT * FROM register_tb WHERE login_id='$login' ");
$row_data=mysqli_fetch_assoc($register_query);
$reg_id=$row_data['reg_id'];
$query=mysqli_query($conn,"SELECT equipment_tb.equipment_name,equipment_tb.image,equipment_collection_tb.quantity,equipment_collection_tb.collection_id,equipment_collection_tb.taken_date,equipment_tb.rent_rate,equipment_collection_tb.status2 FROM equipment_collection_tb JOIN equipment_tb ON equipment_collection_tb.equipment_id=equipment_tb.equipment_id WHERE reg_id='$reg_id' AND collection_status='2' AND status2!='5' " );
$data=mysqli_query($conn,"SELECT * FROM equipment_collection_tb WHERE reg_id='$reg_id'");
$dat=mysqli_fetch_assoc($data);

//var_dump($dat);exit();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Collected </title>
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
            <h2>COLLECTED EQUIPMENTS</h2>
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
        <h3 class="cart-page-title">Rent Equipment</h3>
        <div class="row">
            <div class="col-lg-15 col-md-15 col-sm-15 col-15">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Taken date</th>
                                    <th>Rent_rate</th>
                                    <th>quantity</th>
                                    <th> Final Amount</th>
                                    
                                    <th> Are you ready for return?</th>

                                    
                                   
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row=mysqli_fetch_assoc($query))
                                {
                                    $rent_rate= $row['rent_rate'];

                                    $quantity=$row['quantity'];
                                    $amount=$rent_rate*$quantity;
                                   
                                    ?>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="admin/image/<?php echo $row['image'];?>" width="100" height="100" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#"><?php echo $row['equipment_name'];?></a></td>
                                    <td class="product-name"><a href="#"><?php echo $row['taken_date'];?></a></td>
                                    <td class="product-name"><a href="#"><?php echo $row['rent_rate'];?></td>
                                    <td class="product-name"><a href="#"><?php echo $row['quantity'];?></a></td>
                                    <td class="product-price-cart"><span class="amount"><?php echo $amount;?></span></td>
                                       
                                     <?php
                                                $sts=$row['status2'];
                                                if($row['status2']==1)

                                                {
                                             ?>

                                   <td><a class="btn btn-danger btn-sm" onclick="return confirm('ARE YOU SURE?');" href="equip.php?edit_id=<?php echo $row['collection_id'];?>">Yes</a></td>
                                   
                                   <?php } ?>
                                            <?php                    
                                                 if($row['status2']==2)
                                                 {
                                                ?>
                                                <td><a class="btn btn-primary btn-sm"  href="">Waiting for admin's confirmation...!</a></td>
                                                <?php
                                                 }
                                                ?>
                                                 <?php                    
                                                 if($row['status2']==3 OR $row['status2']==4)
                                                 {
                                                ?>
                                                <td><a class="btn btn-success btn-sm"  href="">SuccessfullybReturned...</a>
                                                    <a href="dlt1.php?collection_id=<?php echo $row['collection_id'];?>" onclick="return confirm('ARE YOU SURE?');" class="btn btn-danger btn-sm" >Clear</a></td>
                                                <?php
                                                 }
                                                ?>
                                  
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