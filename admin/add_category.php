<?php 
include'../connection.php';
if(isset($_POST['sub'])){
    $name=$_POST['name'];

    mysqli_query($conn,"INSERT INTO category_tb (category_name) VALUES('$name')");
    echo "<script> alert('New Category Added');</script> ";
    header('location:add_category.php');
}



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
                            <li class="active">add category</li>                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                                            <div class="col-lg-8 ">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Add Category</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" onKeyUp="clearmsg('spname')" id="name_id" name="name" placeholder="" class="form-control"><span id="spname" style="color:#F00"></span></div>
                                                            </div>
                                                       <div class="card-footer text-center">
                                                        <button type="submit" name="sub" onClick="return validate()" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>                                               
                                                        </form>
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
                            <script>
                                function validate()
                                 {
                                    var nm=document.getElementById("name_id").value;
                                    if(nm=="")
                                        {                                           
                                            document.getElementById("spname").innerHTML="* Please enter your name";                                                
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
