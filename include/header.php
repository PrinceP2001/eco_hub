







<!-----------------------------worker------------------------------>










<?php 
if($_SESSION['role']=='worker'){
?>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(assets/img/icon-img/header-shape.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +91 558 547 5894</li>
                            <!--<li><i class="fa fa-envelope-o"></i><a href="#">education@email.com</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.php">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="worker_index.php"> HOME </a>
                                       
                                    </li>
                                   
                                    <li><a> SHOP </a>
                                        <ul class="submenu">
                                            <li><a href="organic.php">Organic Products</a></li>
                                            <li><a href="rentequipment.php">Rent Equipments</a></li>
                                            
                                        </ul>
                                    </li>
                          
                                      <li><a> WORK </a>
                                        <ul class="submenu">
                                           <li><a href="work_details.php">View Work </a></li>
                                          
                                            
                                        </ul>
                                    </li>

                                     <li><a href="collected.php"> COLLECTED </a></li>
                                    
                                    <li><a href="logout.php">LOGOUT</a></li>
                                </ul>
                            </nav>
                        </div>
                     
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                                  <li><a href="worker_index.php"> HOME </a>
                               
                            </li>
                          
                              <li><a> SHOP </a>
                                        <ul class="submenu">
                                            <li><a href="organic.php">Organic Products</a></li>
                                          <li><a href="rentequipment.php">Rent Equipments</a></li>
                                            
                                        </ul>
                                    </li>
                         
                              <li><a> WORK </a>
                                        <ul class="submenu">
                                           <li><a href="work_details.php">View Work </a></li>
                                          
                                            
                                        </ul>
                                    </li>
                             <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php } ?>


<!--------------------------user header------------------------>




<?php 
if($_SESSION['role']=='user'){
?>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(assets/img/icon-img/header-shape.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +98 558 547 589</li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">education@email.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <!-- <ul>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo"  >
                        <a href="index.php">
                            <img alt="" src="assets/img/logo/logo.png" height="10%";>
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="user_index.php"> HOME </a>
                                       
                                    </li>
                                    <li><a href="workers.php">WORKERS  </a></li>
                                   <li><a> SHOP </a>
                                        <ul class="submenu">
                                            <li><a href="organic.php">Organic Products</a></li>
                                            <li><a href="bag.php">Eco Products</a></li>
                                            <li><a href="rentequipment.php">Rent Equipments</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href=""> SELL PRODUCT </a> 
                                        <ul class="submenu">
                                            <li><a href="add_product.php">add your product</a></li>
                                            <li><a href="view_sell_product.php">view your product</a></li>
                                            <li><a href="view_earnings.php">view Earnings</a></li>                                          
                                           
                                        </ul>
                                    </li> 
                                  
                                     <li><a href="informations.php"> INFORMATION </a></li>
                                     <li><a href="collected.php"> COLLECTED </a></li>
                                    
                                     <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </nav>
                        </div>
                         <div class="cart-search-wrap">
                            <div class="cart-wrap">
                                <button class="icon-cart">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>

                                  
                                </button>
                           
                            </div>
                           
                        </div> 
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="user_index.php"> HOME </a>
                              
                            </li>
                             <li><a href="req_worker.php">    WORKERS  </a></li>
                            <li><a> SHOP </a>
                                        <ul class="submenu">
                                            <li><a href="organic.php">Organic Products</a></li>
                                            <li><a href="bag.php">Eco Products</a></li>
                                            <li><a href="rentequipment.php">Rent Equipments</a></li>
                                            
                                        </ul>
                                    </li>
                              <li><a href=""> SELL PRODUCT </a> 
                                        <ul class="submenu">
                                            <li><a href="add_product.php">add your product</a></li>
                                            <li><a href="view_sell_product.php">view your product</a></li>
                                            <li><a href="view_earnings.php">view Earnings</a></li>                                          
                                           
                                        </ul>
                                    </li> 
                           <!--  <li><a href="about-us.html">About us</a></li>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                </ul>
                            </li> -->
                              <li><a href="informations.php"> INFORMATION </a></li>
                                     <li><a href="collected.php"> COLLECTED </a></li>
                                    
                                     <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php } ?>