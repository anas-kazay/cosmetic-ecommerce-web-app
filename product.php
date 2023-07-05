<?php
session_start();
    include("includes/db.php");
    $product_id = $_GET['product_id'];
    $get_product="select * from products join categories on products.cat_id = categories.cat_id where product_id=$product_id ";
    $run_product= mysqli_query($db,$get_product);
    while($row_product= mysqli_fetch_array($run_product)){
        $product_id= $row_product['product_id'];
        $product_title= $row_product['product_title'];
        $product_price= $row_product['product_price'];
        $product_image= $row_product['product_img'];
        $product_desc = $row_product['product_desc'];
        $cat_title = $row_product['cat_title'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AYNOU-SHOP/Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <style>
      .btn.btn-primary {
  background: #03a696 !important;
  border: 1px solid #03a696 !important;
  color: #fff;
}
.btn.btn-primary:hover {
  border: 1px solid #03a696 !important;
  background: white !important;
  color: #03a696;
}
      .product-grid{
    font-family: 'Poppins', sans-serif;
    text-align: center;
    border: 1px solid #e7e7e7;
}
.product-grid .product-image{ position: relative; }
.product-grid .product-image a.image{ display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
    transition: all 0.3s ease 0s;
}
.product-grid .product-image:hover img{ transform: translate(10px,-10px); }
.product-grid .product-sale-label{
    color: #fff;
    background: #1abc9c;
    font-size: 13px;
    text-transform: capitalize;
    line-height: 35px;
    width: 55px;
    height: 35px;
    position: absolute;
    top: 0;
    right: 0;
    animation: bg-animate 5s infinite linear;
}
.product-grid .product-links{
    padding: 0;
    margin: 0;
    list-style: none;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    bottom: 15px;
    left: 20px;
    transition: all 0.3s ease 0s;
}
.product-grid:hover .product-links{ opacity: 1; }
.product-grid .product-links li{
    margin: 0 0 5px;
    opacity: 0;
    transform: translateX(-100%);
    transition: all 0.3s ease 0s;
}
.product-grid:hover .product-links li:nth-child(2){ transition: all 0.3s ease 0.15s; }
.product-grid:hover .product-links li{
    opacity: 1;
    transform: translateX(0);
}
.product-grid .product-links li a{
    color: #fff;
    background-color: #00b894;
    font-size: 14px;
    text-shadow: 0 0 3px rgba(0,0,0,0.7);
    padding: 8px 10px;
    display: block;
    opacity: 0.9;
    transition: all 0.3s ease 0s;
    animation: bg-animate 5s infinite linear;
}
.product-grid .product-links li a:hover{
    color: #fff;
    box-shadow: 0 0 0 3px #fff inset;
    opacity: 1;
    cursor: pointer;
}
.product-grid .product-links li a i{ margin: 0 5px 0 0; }
.product-grid .product-content{ padding: 15px 0 5px; }
.product-grid .title{
    font-size: 17px;
    font-weight: 400;
    text-transform: capitalize;
    padding: 0 10px 14px;
    margin: 0 0 7px;
    border-bottom: 1px solid #dfe5e9;
}
.product-grid .title a{
    color: #000;
    transition: all 0.3s ease 0s;
}
.product-grid .title a:hover{ animation: color-animate 5s infinite linear; }
.product-grid .price{
    color: #1abc9c;
    font-size: 20px;
    font-weight: 400;
    animation: color-animate 5s infinite linear;
}

.price{
    color: #1abc9c;
    font-size: 20px;
    font-weight: 400;
    animation: color-animate 5s infinite linear;
}

.product-grid .price span{
    color: #999;
    text-decoration: line-through;
    margin: 0 3px 0 0;
}
@keyframes color-animate{
    0%{ color: #00b894; }
    20%{ color: #00cec9; }
    40%{ color: #0984e3; }
    60%{ color: #6c5ce7; }
    80%{ color: #e84393; }
    100%{ color: #00b894; }
}
@keyframes bg-animate{
    0%{ background-color: #00b894; }
    20%{ background-color: #00cec9; }
    40%{ background-color: #0984e3; }
    60%{ background-color: #6c5ce7; }
    80%{ background-color: #e84393; }
    100%{ background-color: #00b894; }
}
@media screen and (max-width:1200px){
    .product-grid{ margin: 0 0 30px; }
}
    </style>

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
          item_id:id,
          item_src:img_src,
          item_name:name,
          item_price:price
        },
        success:function(response) {
          document.getElementById("total_items").value=response;
        }
      });
	
    }
</script>
  </head>

  <body class="goto-here">
	
<?php  include 'includes/header.php' ?>

<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6" <?php echo "id='$product_id'"  ?>><img class="card-img-top mb-5 mb-md-0" <?php echo "src=\"images/products/$product_image\" "?> alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1 "><span class="subheading1" ><?php echo $cat_title ?></span></div>
                        <h1 class="display-5 fw-bolder font-weight-bold" <?php echo "id='title$product_id'"  ?>><?php echo $product_title ?></h1>
                        <div class="fs-5 mb-5">
                            <span class="price" <?php echo "id='price$product_id'"  ?>><?php echo $product_price  ?> DH</span>
                        </div>
                        <p class="lead"><?php echo $product_desc?></p>
                        <div class="d-flex">
                            
                            <button class="btn btn-primary flex-shrink-0 pl-2" type="button" <?php echo"onclick=\"cart('$product_id')\""?>>
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Produits similaires</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
			<?php bestProducts(); ?>
    		</div>
    	</div>
    </section>

    

  <footer>
    <?php include 'includes/footer.php'  ?>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

    
  </body>
</html>