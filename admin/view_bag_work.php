<?php 
include'../connection.php';




?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REQUESTS</title>
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
                            <li class="active">view bag works</li>                           
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
                                <strong class="card-title">Bag Work Details</strong>
                            </div>
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
                                            <th scope="col">Action</th>
                                             <th scope="col">Work status</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php 


                                           $query=mysqli_query($conn,"SELECT * FROM bag_work_tb JOIN register_tb ON bag_work_tb.reg_id=register_tb.reg_id JOIN bag_req_tb ON bag_req_tb.bag_req_id=bag_work_tb.bag_req_id JOIN paper_bag_tb ON paper_bag_tb.bag_id=bag_req_tb.bag_id  ");
                                            $count=0;
                                            while ($row=mysqli_fetch_assoc($query)) { $count++;
                                            ?>
                                        <tr>                                       
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['phone'];?></td>
                                            <!-- <td><?php echo $row['bag_req_id'];?></td> -->
                                            <td><?php echo $row['no_of_bags'];?></td>
                                            <td><a href="#"><img src="image/<?php echo $row['bag_image'];?>" width="100" height="100" alt=""></a></td>
                                            <td><a class="btn btn-danger btn-sm" onclick="return confirm('ARE YOU SURE?');" href="delete_bag_work.php?work_delete=<?php echo $row['bag_work_id'];?>">delete</a></td>
                                            
                                            <?php
                                                $sts=$row['status1'];
                                                if($row['status1']==0)

                                                {
                                             ?>

                                            <td><a class="btn btn-danger btn-sm" onclick="return confirm('');" href="">Pending</a></td>
                                            <?php
                                                 }
                                                ?>
                                                <?php                    
                                                 if($row['status1']==1)
                                                 {
                                                ?>
                                                <td><a class="btn btn-primary btn-sm"  href="">completed</a></td>
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
