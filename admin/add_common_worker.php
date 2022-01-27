<?php
include('../connection.php');
if(isset($_POST['sub']))
{

    $name=$_POST['name'];
    $place=$_POST['place'];
    $mobile=$_POST['mobile'];

    mysqli_query($conn,"INSERT INTO common_worker_tb (name,place,mobile) VALUES ('$name','$place','$mobile')");
    echo "<script>alert('new worker added');</script>";
    header('location:common_worker.php');
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<script></script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Information</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


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

    <?php include'include/left_panel.php';?><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
    <?php include'include/header.php';?>
    <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
           
            <div class="col-sm-8">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>                            
                            <li class="active">Add common workers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">                    
 
                                            <div class="col-lg-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Information</strong> Form
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                           
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" onKeyUp="clearmsg('spheading')" id="mobile" name="name" placeholder="" class="form-control" required=""><small class="form-text text-muted"></small><span id="spheading" style="color:#F00"></span></div>
                                                            </div>
                                                           
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Place</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" onKeyUp="clearmsg('spheading')" id="mobile" name="place" placeholder="" class="form-control" required=""><small class="form-text text-muted"></small><span id="spheading" style="color:#F00"></span></div>
                                                            </div>
                                                           
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mobile</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" onKeyUp="clearmsg('spheading')" id="mobile" name="mobile" placeholder="" class="form-control" required=""><small class="form-text text-muted"  ></small><span id="spheading" style="color:#F00"></span></div>
                                                            </div>
                                                               
                                                              <div class="card-footer ">
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
                                var head=document.getElementById("heading_id").value.trim();
                                var content=document.getElementById('content_id').value.trim();

                                if(head==""){
                                    document.getElementById("spheading").innerHTML="* empty field";
                                    return false;
                                }
                                if(content==""){
                                    document.getElementById("spcontent").innerHTML="*empty field";
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
