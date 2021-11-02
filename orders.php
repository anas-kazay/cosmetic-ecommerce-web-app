 <?php
 include_once 'includes/function.php';
 include_once 'includes/db.php';
 error_reporting(E_ALL ^ E_NOTICE);
session_start();
$user_email= $_SESSION['user_email'];
 
$getInfo="SELECT * FROM users WHERE user_email= '$user_email'";
$run_info=mysqli_query($db,$getInfo);
while($row_info= mysqli_fetch_array($run_info)){
    $user_id= $row_info['user_id'];}
 ?>
<!DOCTYPE html>
<head>
    <title></title>
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
<body>

<?php
  include 'includes/header.php';
  if (!isset($_SESSION['user_email'])){

    echo "<script>window.open('authentification.php','_self')</script>";
    
  }else{
    echo"
   <div class='hero-wrap hero-bread' style='background-image: url(images/12.jpg);'>
      <div class='container'>
        <div class='row no-gutters slider-text align-items-center justify-content-center'>
          <div class='col-md-9 ftco-animate text-center'>
          	<p class='breadcrumbs'><span class='mr-2'><a href='index.php' style='color:black;'>Accueil</a></span> <span class='mr-2'><a href='#' style='color:black;'>Mon Compte</a></span></p>
            <h1 class='mb-0 bread' style='color:black;'>Ma Carte</h1>
          </div>
        </div>
      </div>
    </div>
  <div class='container' style='margin-top:70px;margin-bottom:120px'>
  <center>
    
    <h1> Mes commandes </h1>
    
    <p class='lead'>Vos commandes en un seul endroit</p>
    
    <p class='text-muted'>
        
    Si vous avez des questions, n'hésitez pas <a href='contact.php'> à nous contacter.</a> Notre service client fonctionne<strong>24/7</strong>
        
    </p>
    
</center>


<hr>


    <div class='cart-list'>
    <table class='table table-bordered table-hover'>
        
        <thead class='thead-primary'><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                <th>&nbsp;</th>
                <th> Identifiant : </th>
                <th> Produit : </th>
                <th> Qte: </th>
                <th> Totale(DHS): </th>
                <th> Date de Commande:</th>
               
            </tr>
        </thead>
        <tbody>
             ";
             orders();
             echo" 
        </tbody>
    </table>
    </div>
    
    <div class='col-lg-4 mt-5 cart-wrap ftco-animate ' style='margin-left: auto; display: block;'>
    				<div class='cart-total mb-3'>
    					<h3>Total du carte</h3>
    					<p class='d-flex total-price'>
    						<span>Prix total</span>
                <span>".
                 total_price()
                
                 ."DHS</span>
    					</p>
            </div>
            <form action=".$_SERVER['PHP_SELF']." method='POST'>
            <button name='checkout' type='submit' class='btn btn-primary py-3 px-4'> Checkout
             </button>
             </form>
    			</div>
</div>";
}
if(isset($_POST['checkout'])){
  if (!isset($_SESSION['user_email'])){
    echo "<script>window.open('authentification.php','_self')</script>";
    }else{
      echo "<script>window.open('checkout.php?user_id=$user_id','_self')</script>";
    }}
?>
<?php
  include 'includes/footer.php';
  ?>

 <!-- loader -->
 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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

