<?php 
session_start();
include_once 'includes/db.php';

error_reporting(E_ALL ^ E_NOTICE);
session_start();
$user_email= $_SESSION['user_email'];
 
$getInfo="SELECT * FROM users WHERE userEmail= '$user_email'";
$run_info=mysqli_query($db,$getInfo);
while($row_info= mysqli_fetch_array($run_info)){
    $user_name= $row_info['userName'];
    $user_add= $row_info['adresse'];
    $user_city= $row_info['city'];
	  $user_country= $row_info['zipCode'];
    $telephone= $row_info['telephone'];
    $_SESSION['userId']=$row_info['id'];
	
    
    
} 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BIOTIFUL LADY - confirmation</title>
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
  <body class="goto-here">

  <?php
  include 'includes/header.php';
  ?>
    <!-- END nav -->
	

    <div class="hero-wrap hero-bread " style="background-image: url('https://images.pexels.com/photos/8293649/pexels-photo-8293649.jpeg?auto=compress&cs=tinysrgb&w=1600'); background-size:cover; image-width:80%;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread" style="color:black;">confirmation</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section " >
      <div class="container  d-felx">
        <div class="row ">
          
          <div class="col-xl-7 ftco-animate">
            
						<form action="add-commande.php" method="POST" class="billing-form" style='display:flex;justify-content: center;'>
	          	<div class="row align-items-end">
	          		
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="lastname">Nom & Prenom</label>
	                  <input name="name" type="text" class="form-control"value="<?php echo $user_name  ?>">
	                </div>
                </div>
                <div class="w-100"></div>

                
				<div class="col-md-12">
	                <div class="form-group">
	                	<label for="pays">Telephone</label>
	                  <input name="telephone" type="text" class="form-control" value="<?php echo $telephone  ?>">
	                </div>
                </div>
<div class="w-100"></div>
		            <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress"> Addresse</label>
	                  <input name="add" type="text" class="form-control" value="<?php echo $user_add  ?>">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Ville</label>
	                  <input name="city" type="text" class="form-control" value="<?php echo $user_city  ?>">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input name='zipCode' type="text" class="form-control" value="<?php echo $user_country  ?>">
	                </div>
		            </div>
		           
                
	            </div>
	          <!-- END -->
					</div>
					<div class="col-xl-5">
	         
	          	</div
	          	<div class="col-xl-5">
	          		<div class="cart-detail p-3 p-md-3">
									
									
								
								<button  name="valider" class="btn btn-primary col-lg-6">Valider</button>
								</div>
	          	</div>
				  </form>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

    <footer >
     <?php include 'includes/footer.php';  ?>
      </div>
    </footer>
    
  

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
 
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>