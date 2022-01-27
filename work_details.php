<?php 
include'connection.php';
session_start();
 $lid= $_SESSION['login_id'];
 //var_dump($lid);exit();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>work details</title>
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
        #btn-ok{
            font-size: 16px;
    font-weight: bold;
    display: inline-block;
    line-height: 1;
    color: #00a651;
    -webkit-box-shadow: 0px 6px 12px 0.8px rgb(42 42 42 / 22%);
    box-shadow: 0px 6px 12px 0.8px rgb(42 42 42 / 22%);
    border-radius: 50px;
    padding: 22px 40px;
        }
    </style>
</head>

<body>
<?php include'include/header.php';?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-5.jpg);">
        <div class="container">
            <h2>WORKER</h2>
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
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row" style="text-align: center;" >
            <div class=" col-lg-12">
                <div class="blog-details-wrap mr-40">
                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4></h4>
                            <div id="btn-ok" class="blog-comment-btn mb-20 mt-20 commrnt-toggle">
                            <a href="" >Work Details</a>
                            </div>
                        </div>
                         
                        <div class="category-list">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Worker Name</th>
                                            <th scope="col">Worker Number</th>
                                            <!-- <th scope="col">Req Id</th> -->

                                            <th scope="col">No:Of Bags</th>
                                            <th scope="col">Bag</th>
                                           <th  scope="col">Are you completed?</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php 


                                           $query=mysqli_query($conn,"SELECT * FROM bag_work_tb JOIN register_tb ON bag_work_tb.reg_id=register_tb.reg_id JOIN bag_req_tb ON bag_req_tb.bag_req_id=bag_work_tb.bag_req_id JOIN paper_bag_tb ON paper_bag_tb.bag_id=bag_req_tb.bag_id WHERE login_id='$lid' ");
                                            $count=0;
                                            while ($row=mysqli_fetch_assoc($query)) { 
                                                $count++;
                                            ?>
                                        <tr>                                       
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['phone'];?></td>
                                            <!-- <td><?php echo $row['bag_req_id'];?></td> -->
                                            <td><?php echo $row['no_of_bags'];?></td>
                                            <td><a href="#"><img src="admin/image/<?php echo $row['bag_image'];?>" width="100" height="100" alt=""></a></td>
                                            <?php
                                                $sts=$row['status1'];
                                                if($row['status1']==0)

                                                {
                                             ?>
                                            
                                            <td><a class="btn btn-danger btn-sm" onclick="return confirm('ARE YOU SURE?');" href="work.php?edit_id=<?php echo $row['bag_work_id'];?>">Yes</a></td>
                                             <?php } ?>
                                            <?php                    
                                                 if($row['status1']==1)
                                                 {
                                                ?>
                                                <td><a class="btn btn-danger btn-sm"  href="">completed</a></td>
                                                <?php
                                                 }
                                                ?>
                                                 
                                        </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            

                               
                                

                            <br>
                        
                            </div>
                        </div>
                    </div>
                    </li>
                         
                            </ul>
                               
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


</body>

</html>