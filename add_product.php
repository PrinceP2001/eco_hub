
<?php 
include('connection.php');
session_start();
$login_id=$_SESSION['login_id'];
$query=mysqli_query($conn,"SELECT * FROM category_tb");
if(isset($_POST['sub']))
{

    $nm=$_POST['p_name'];
    $category=$_POST['category'];
    $qua=$_POST['Quantity'];
    $amount=$_POST['Amount'];
    $qty=$_POST['qty'];
    $ds=$_POST['description'];
   

    $file_data = pathinfo($_FILES['f12']['name']);

  //  $extension=$file_data["extension"];

    $targetfolder = "product/";

    $file_name=basename($_FILES['f12']['name']);

    $targetfolder = $targetfolder . basename($_FILES['f12']['name']) ;

    if(check_ext($file_data["extension"]))
    {
    if(move_uploaded_file($_FILES['f12']['tmp_name'], $targetfolder))

    {
        mysqli_query($conn,"INSERT INTO product_tb(login_id,category_id,product_name,quantity,amount,kg,image,description) VALUES('$login_id','$category','$nm','$qua','$amount','$qty','$file_name','$ds')"); 

    echo "<script>alert('product added');</script>";
    header('location:add_product.php');

    //echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

    }

    else 
    {

    echo "Problem uploading file";

    }
    }
    else
    {
        echo "<script>alert('file format not supported');</script>";
       
    }
}
function check_ext($ext)
    {
      $allowed=array('jpg','jpeg','JPG','JPEG');
  
      if(in_array($ext,$allowed))
      {
        return true;
      }
  
      else
  
      {
        return false;
      }
   
    }

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADD PRODUCT</title>
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
</head>

<body>
<?php include'include/header.php';?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>PRODUCT</h2>
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






<div class="login-register-area pt-130 pb-130 ">
    <div class="container">
     
             <div class="col-lg-7  ml-lg-5" >
                <form method="post" enctype="multipart/form-data">
                <div class="billing-info-wrap">
                    <h3>Add Product</h3>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="billing-info mb-20">
                                <label>Product Name</label>
                                <input type="text" name="p_name" onkeyup="clearmsg('spname')" id="name_id"><span id="spname" style="color: #F00"></span>
                            </div>
                        </div>
                         <div class="col-lg-12">
                            <div class="billing-select mb-20">
                                <label>Category name</label>
                                <select name="category" id="cat_id" onchange="clearmsg('sptype')">
                                    <option value="">Select category</option>
                                    <?php while($row=mysqli_fetch_assoc($query)){?>
                                    <option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></option>
                                   <?php } ?>
                                  
                                </select><span id="sptype" style="color: #F00"></span>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Posted Quantity</label>
                                <input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                                name="Quantity" id="quantity_id" onkeyup="clearmsg('spquantity')"><span id="spquantity" style="color: #F00"></span>

                            </div>
                        </div>
                        
                           <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Amount</label>
                                <input type="text" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="Amount" id="amount_id" onkeyup="clearmsg('spamount')"><span id="spamount" style="color: #F00"></span>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Quantity (Kg)</label>
                                <input type="text" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="qty" id="qty_id" onkeyup="clearmsg('amount')"><span id="amount" style="color: #F00"></span>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="billing-select mb-20">
                                <label>Image</label>
                               <input type="file" name="f12" id="file_id" onclick="clearmsg('spfile')">
                               <span id="spfile" style="color: #F00"></span>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Description</label>
                                 <textarea   name="description" id="des_id" onkeyup="clearmsg('spdes')"></textarea><span id="spdes" style="color: #F00"></span>

                                
                               
                            </div>
                        </div>
                        
                       
                    

                     
                        
                     
                    </div>

                    
                    <div class="checkout-account-toggle open-toggle2 mb-30">
                    
                        <button class="btn-hover checkout-btn" name="sub" onclick="return validate();" type="submit">Submit</button>
                    </div>
                    
                  
          
                </div>
                </form>
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
<script>
function validate()
{
    var name=document.getElementById("name_id").value.trim();
     var type=document.getElementById("cat_id").value;
    var qua=document.getElementById("quantity_id").value;
    var amount=document.getElementById("amount_id").value;
     var file=document.getElementById("file_id").value;
    var descrip=document.getElementById("des_id").value;    
   
  
    
    if(name=="")
    {
        
        document.getElementById("spname").innerHTML="*Please enter your name";
            
        return false;
    }
     if(type=="")
    {
        document.getElementById("sptype").innerHTML="Please select a category";
        return false;
    }

    if(qua=="")
    {
        
        document.getElementById("spquantity").innerHTML="Please enter quantity";
        
        return false;
    }
    
    if(amount=="")
    {
            document.getElementById("spamount").innerHTML="*Enter amount";
        return false;
    }
    
    if(file=="")
    {
        document.getElementById("spfile").innerHTML="*Please select image";
        return false;
    }
    if(descrip=="")
    {
        document.getElementById("spdes").innerHTML="*Please enter description";
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