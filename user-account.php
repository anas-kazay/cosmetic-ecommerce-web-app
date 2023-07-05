<?php 
session_start();
include_once 'includes/db.php';
if (!isset( $_SESSION['user_email'])){
    header('Location: authentification.php');
    exit();
}
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$user_email= $_SESSION['user_email'];
 
$getInfo="SELECT * FROM users WHERE userEmail= '$user_email'";
$run_info=mysqli_query($db,$getInfo);
while($row_info= mysqli_fetch_array($run_info)){
    $user_name= $row_info['userName'];
    $password= $row_info['userPwd'];
    $user_contact= $row_info['telephone'];
    $user_add= $row_info['adresse'];
    $user_city= $row_info['city'];
    $user_zipCode= $row_info['zipCode'];
    
    
} 

?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <title>AYNOU-SHOP/Mon Compte</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
 
	  <!--Start nav-->
  <?php
  include_once ('includes/header.php');
  ?>
  <div class="hero-wrap hero-bread" style="background-image: url('images/13.jpg'); background-size:cover; image-width:80%;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php" style="color:black;">Accueil</a></span></p>
            <h1 class="mb-0 bread" style="color:black;">Mon Compte</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- END nav -->
    <div id="content"><!-- #content Begin -->
       <div class="container" ><!-- container Begin -->
           <div class="col-md-12" ><!-- col-md-12 Begin -->
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9" style="margin-top:50px;margin-bottom:200px"><!-- col-md-9 Begin -->
               
               <div class="boxe" ><!-- box Begin -->
                   
                   <div class="boxe-header"><!-- box-header Begin -->
                    
                       <center><!-- center Begin -->
                           
                           <h2> Mon Compte </h2>
                           
                       </center><!-- center Finish -->
                       
                       <form action="<?php $_SERVER['PHP_SELF'] ; ?>" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Nom & Prenom</label>
                               
                               <input type="text" value="<?php echo $user_name; ?>" class="form-control" name="c_name" required>
                               
                           </div><!-- form-group Finish -->
                          
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Email</label>
                               
                               <input type="text" value="<?php echo $user_email; ?>" class="form-control" name="c_email" required readonly="readonly">
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Mot de pass</label>
                               
                               <input type="text" value="<?php echo $password; ?>" class="form-control" name="c_password" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Numéro de Téléphone</label>
                               
                               <input type="text" value="<?php echo $user_contact; ?>" class="form-control" name="c_contact" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Adresse</label>
                               
                               <input type="text" value="<?php echo $user_add; ?>" class="form-control" name="c_address" required>
                               
                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Ville</label>
                               
                               <input type="text" value="<?php echo $user_city; ?>" class="form-control" name="c_city" required>
                               
                           </div><!-- form-group Finish -->
                           
                           
                           
                           

                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Zip Code</label>
                               
                               <input type="text" value="<?php echo $user_zipCode; ?>" class="form-control" name="c_country" required>
                               
                           </div><!-- form-group Finish -->


                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="valider"  style="margin-top:30px;width:200px" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Valider
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   <?php
  include 'includes/footer.php';
  ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php 
 if(isset($_POST['valider'])){
    $name=$_POST['c_name'];
    $password=$_POST['c_password'];
    $zipCode=$_POST['c_country'];
    $city=$_POST['c_city'];
    $contact=$_POST['c_contact'];
    $add=$_POST['c_address'];
    $temp_name = $_FILES['c_image']['tmp_name'];
    move_uploaded_file($temp_name,'images/$product_image');
      
      $update_user="UPDATE users SET userName='$name' , zipCode='$zipCode', city='$city', telephone='$contact',userPwd='$password',adresse='$add' WHERE userEmail='$user_email'";
      $run=mysqli_query($db,$update_user);
      echo "<script>alert('vos informations ont été mises à jour avec succès')</script>";
      echo "<script>window.open('user-account.php','_self')</script>";
   }

?>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
    
    
</body>
</html>