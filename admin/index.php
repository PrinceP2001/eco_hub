<?php
include'../connection.php';
session_start();
if(!$_SESSION["role"])
{
    header("location:../login.php");
}

$query=mysqli_query($conn,"SELECT * FROM register_tb JOIN login_tb ON register_tb.login_id=login_tb.login_id WHERE login_tb.role='user'");
$query2=mysqli_query($conn,"SELECT * FROM register_tb JOIN login_tb ON register_tb.login_id=login_tb.login_id
 WHERE login_tb.role='worker'");
$query_product=mysqli_query($conn,"SELECT * FROM product_tb WHERE status ='1'");
$equipment_query=mysqli_query($conn,"SELECT * FROM equipment_tb");
$paperbag_query=mysqli_query($conn,"SELECT * FROM paper_bag_tb");
$user_count=mysqli_num_rows($query);
$worker_count=mysqli_num_rows($query2);
$product_count=mysqli_num_rows($query_product);
$equipment_count=mysqli_num_rows($equipment_query);
$paperbag_count=mysqli_num_rows($paperbag_query);


?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eco Hub Admin </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/logo.png">
    <link rel="shortcut icon" href="images/logo.png">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

   <?php include 'include/left_panel.php'; ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
    <?php include 'include/header.php';?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

          


            <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="view_users.php">View</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                        <h4 class="mb-0">
                            <span class="count"><?php echo $user_count; ?></span>
                        </h4>
                        <p class="text-light">Registered Users</p>
                        </div>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                           
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="view_workers.php">View</a>
                                   
                                </div>
                            </div>
                        </div>
                       <div class="text-center">
                        <h4 class="mb-0">
                            <span class="count"><?php echo $worker_count; ?></span>
                        </h4>
                        <p class="text-light">Registered Workers</p>
                        </div>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                  
                                    <a class="dropdown-item" href="viewproducts.php">View</a>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                        <h4 class="mb-0">
                            <span class="count"><?php echo $product_count; ?></span>
                        </h4>
                        <p class="text-light">Organic Products</p>
                        </div>
                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                       
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="add_equipment.php">Add</a>
                                    <a class="dropdown-item" href="view_equipment.php">View</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                        <h4 class="mb-0">
                            <span class="count"><?php echo $equipment_count; ?></span>
                        </h4>
                        <p class="text-light">Rent Equipments</p>
                        </div>
                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->
             <div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="add_eco_product.php">Add</a>
                                    <a class="dropdown-item" href="view_eco.php">View</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                        <h4 class="mb-0">
                            <span class="count"><?php echo $paperbag_count; ?></span>
                        </h4>
                        <p class="text-light">Eco Products</p>
                        </div>
                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            
                        </div>

                    </div>
                </div>
            </div>
             <!--/.col-->
           


           


           

           


          

           


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'include/script.php';?>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
