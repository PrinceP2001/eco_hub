<?php 
include'../connection.php';





?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Category</title>
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
                            <li class="active">Request for equipments</li>                           
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
                                <strong class="card-title">Request Details</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Equipment Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">collected date </th>
                                              <th scope="col">Quantity</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php 
                                           $query=mysqli_query($conn,"SELECT equipment_collection_tb.collection_id,equipment_collection_tb.equipment_id,equipment_collection_tb.taken_date,equipment_collection_tb.reg_id,equipment_collection_tb.quantity,equipment_collection_tb.collection_status,equipment_collection_tb.status2,equipment_tb.equipment_id,equipment_tb.equipment_name,equipment_tb.image,equipment_tb.current_quantity,equipment_tb.rent_rate,register_tb.reg_id,register_tb.login_id,register_tb.name FROM equipment_collection_tb JOIN equipment_tb ON equipment_collection_tb.equipment_id=equipment_tb.equipment_id JOIN register_tb ON equipment_collection_tb.reg_id=register_tb.reg_id WHERE status2='1' AND collection_status='1' ");
                                            $count=0;
                                            while ($row=mysqli_fetch_assoc($query)) { $count++;
                                            ?>
                                        <tr>                                      
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $row['equipment_name'];?></td>
                                            <td> <img src="image/<?php echo $row['image'];?>" width="100" height="100"></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['taken_date'];?></td>
                                            <td><?php echo $row['quantity'];?></td>
                                            <!-- <td><?php echo $row['taken_date'];?></td> -->
                                            <td>

                                                <a class="btn btn-primary btn-sm" style="width: 58px;"  href="details.php?details_id=<?php echo $row['reg_id'];?> ">Details </a>

                                                 <a class="btn btn-danger btn-sm" style="width: 58px;" onclick="return confirm('ARE YOU SURE?');" href="delete_equipment.php?equipment_delete=<?php echo $row['equipment_id'];?>">delete</a>

                                                <a class="btn btn-success btn-sm" style="width: 58px;"  href="give_equipment.php?collection_id=<?php echo $row['collection_id'];?> & eq_id=<?php echo $row['equipment_id'];?>"> Give </a>
                                               </td>
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
