<?php 
include'../connection.php';





?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PRODUCTS</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- Left Panel -->
   <?php include'include/left_panel.php'; ?>
    <!-- Left Panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
       <?php include'include/header.php';?>
        <!-- Header-->
        <div class="breadcrumbs">            
            <div class="col-sm-8">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="active">Products Request</li>                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Product Details</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Amount</th>  
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Description</th> 
                                            <th scope="col">User details</th>                                              
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php 
                                           $query=mysqli_query($conn,"SELECT * FROM product_tb ");
                                            $count=0;
                                            while ($row=mysqli_fetch_assoc($query)) { $count++;
                                            ?>
                                        <tr>                                       
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $row['product_name'];?></td>
                                            <td><?php echo $row['amount'];?></td>      
                                            <td><?php echo $row['quantity'];?></td>  
                                            <td><img src="../product/<?php echo $row['image'];?>" style="width:250px; height: 100px;"></td> 
                                            <td><?php echo $row['description'];?></td>
                                            <td>
                                                <a class="btn btn-danger btn-sm"  href="user.php?user_id=<?php echo $row['product_id'];?>">details</a></td>
                                              
                                            <td>
                                                <a class="btn btn-danger btn-sm"  onclick="return confirm('ARE YOU SURE?');" href="delete_product.php?product_delete=<?php echo $row['product_id'];?>">delete</a></td>

                                                <?php
                                                $sts=$row['status'];
                                                if($row['status']==0)

                                                {
                                             ?>

                                                <td>
                                                <a class="btn btn-danger btn-sm"  onclick="return confirm('ARE YOU APPROVE THIS PRODUCT?');" href="product_req.php?req_id=<?php echo $row['product_id'];?>">Approve</a></td>
                                            <?php } ?>

                                            <?php                    
                                                 if($row['status']==1)
                                                 {
                                                ?>
                                                <td><a class="btn btn-primary btn-sm"  href="">Approved</a></td>
                                                <?php
                                                 }
                                                ?>
                                                 

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                                                                               
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->
                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
                          
</body>
</html>
