<?php
 session_start();
 include_once 'includes/function.php';
 include_once 'includes/db.php';
 error_reporting(E_ALL ^ E_NOTICE);
 if (!isset( $_SESSION['user_email'])){
  header('Location: authentification.php');
  exit();
}
$user_email= $_SESSION['user_email'];
 
$getInfo="SELECT * FROM users WHERE userEmail= '$user_email'";
$run_info=mysqli_query($db,$getInfo);
while($row_info= mysqli_fetch_array($run_info)){
    //$user_id= $row_info['user_ip'];
  }
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
    <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){

      $.ajax({
        type:'post',
        url:'php/store_items.php',
        dataType:'json',
        data:{
          total_cart_items:"totalitems"
        },
        success:function(data) {
          document.getElementById("total_items").value=data.a;
          document.getElementById("total_price").innerHTML=data.b+" DH";
        }
      });

    });

    function cart(id)
    {
	  var ele=document.getElementById(id);
	  var img_src=ele.getElementsByTagName("img")[0].src;
	  var name=document.getElementById("title"+id).textContent;
	  var price=document.getElementById("price"+id).textContent;
	  $.ajax({
        type:'post',
        url:'php/store_items.php',
        data:{
          item_src:img_src,
          item_name:name,
          item_price:price
        },
        success:function(response) {
          document.getElementById("total_items").value=response;
        }
      });
	
    }

    function remove(id){
      $.ajax(
        {
          type:'post',
          url:'php/store_items.php',
          dataType:'json',
          data:{
            item_remove:id
          },
          success:function(data){
          $("#myTable").load(" #myTable");
          document.getElementById("total_items").value=data.a;
          document.getElementById("total_price").innerHTML=data.b+" DH";
        }
          
        }
        
      )
}

    function show_cart()
    {
      $.ajax({
      type:'post',
      url:'php/store_items.php',
      data:{
        showcart:"cart"
      },
      success:function(response) {
        document.getElementById("mycart").innerHTML=response;
        $("#mycart").slideToggle();
      }
     });

    }
	
</script>
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
            <h1 class='mb-0 bread' style='color:black;'>Mes commandes</h1>
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
    <table class='table table-bordered table-hover' id='myTable'>
        
        <thead class='thead-primary'><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                <th> Nombre  </th>
                <th> Date and Time  </th>
                <th> Info de lieu </th>
                <th> Total </th>
                <th> Status </th>

               
            </tr>
        </thead>
        <tbody>
             ";
             commandes();
             echo" 
        </tbody>
    </table>
    </div>
    
    
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

