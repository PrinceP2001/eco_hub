<?php
include('../connection.php');
 $edd=$_GET['edit_id'];
///$edd=mysqli_query($conn,"SELECT * FROM equipment_tb WHERE equipment_id='$edd'");
//$result=mysqli_fetch_assoc($edd);

if(isset($_POST['sub']))
{

   
  
    $qua=$_POST['quantity'];
  

   

    {
        $fetch=mysqli_query($conn,"UPDATE equipment_tb SET quantity='$qua' WHERE equipment_id='$edd'"); 
    }

    echo "<script>alert('Quantity updated');</script>";
    echo "<script>window.location.href='view_equipment.php'</script>";
    //header('location:add_equipment.php');
    
    //echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
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
    <title>Add Equipment</title>
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
                            <li class="active">Add equipment</li>
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
                                                        <strong>Equipment</strong> Form
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                         
                                                           <!--  <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" onkeyup="clearmsg('spe_id')" id="e_id" name="name" placeholder="Equipment name..." class="form-control"><small class="form-text text-muted"></small><span id="spe_id" style="color:#F00"></span></div>
                                                            </div>
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="description" onkeyup="clearmsg('spdes')" id="des_id" rows="5" placeholder="why we use this equipment..." class="form-control"></textarea><span id="spdes" style="color:#F00"></span></div>
                                                            </div> -->
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantity</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" onkeyup="clearmsg('spquantity')" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" id="quantity_id" name="quantity" placeholder="Equipment quantity..." class="form-control"><small class="form-text text-muted"></small><span id="spquantity" style="color:#F00"></span></div>
                                                            </div>
                                                            <!-- <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Rate</label></div>
                                                                <div class="col-12 col-md-9"><input type="text"  maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onkeyup="clearmsg('sprate_id')" id="rate_id" name="rate" placeholder="Equipment rate per day..." class="form-control"><small class="form-text text-muted"></small><span id="sprate_id" style="color:#F00"></span></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                                                    <div class="col-12 col-md-9"><input type="file" onclick="clearmsg('spfile')" id="file_id" name="f1" class="form-control-file"><span id="spfile" style="color:#F00"></span></div>
                                                            </div>
                                                           -->
                                                              <div class="card-footer">
                                                        <button type="submit" name="sub" onclick="return validate()" class="btn btn-primary btn-sm">
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
                                var name=document.getElementById("e_id").value.trim();
                                var desc=document.getElementById('des_id').value.trim();
                                 var qua=document.getElementById("quantity_id").value.trim();
                                 var rate=document.getElementById("rate_id").value.trim();
                                var img=document.getElementById('file_id').value.trim();

                                if(name==""){
                                    document.getElementById("spe_id").innerHTML="* empty field";
                                    return false;
                                }
                                if(desc==""){
                                    document.getElementById("spdes").innerHTML="*empty field";
                                    return false;
                                }  
                                 if(qua==""){
                                    document.getElementById("spquantity").innerHTML="*empty field";
                                    return false;
                                }  

                                 if(rate==""){
                                    document.getElementById("sprate_id").innerHTML="* empty field";
                                    return false;
                                }
                                 if(img==""){
                                    document.getElementById("spfile").innerHTML="*empty field";
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
