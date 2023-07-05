<?php
session_start();

$_SESSION['cart'] = array();

  //$_SESSION['name'] = array();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BIOTIFUL LADY</title>
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
    <style>
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

.product-image {
    height: 250px; /* Set a fixed height for the product image container */
    overflow: hidden; /* Hide any overflow */
  }

  .product-image img {
    width: 100%; /* Set the width of the image to fill the container */
    height: auto; /* Maintain the aspect ratio of the image */
    object-fit: cover; /* Scale the image to cover the container */
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

	  <!--Start nav-->
  <?php
  include 'includes/header.php';

  ?>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <?php  slider(); ?>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Livraison Gratuite !!</h3>
                <span>Sur Commande Plus de 1000Dhs</span>
              </div>
            </div>      
          </div>
          
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superieure Qualité</h3>
                <span>Meilleure Qualité</span>
              </div>
            </div>      
          </div>
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Soutien</h3>
                <span>Soutien 24/7</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
    <!--Promotion-->
		<section class="ftco-section img" style="background-image: url(images/ProduitDuJour.jpg);">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          	<span class="subheading">Le meilleur prix pour vous</span>
            <h2 class="mb-4"> Promo du jour	</h2>
            <p>Loin loin, derrière le mot montagnes, loin des pays Vokalia et Consonantia
			</p>
            <h3><a href="gel-nettoyant-visage.php">Gel Nettoyant Visage</a></h3>
            <span class="price"><a href="gel-nettoyant-visage.php">Pour 80DHS seulement</a></span>
            <div id="timer" class="d-flex mt-5">
						  <div class="time pl-3" id="hours"></div>
						  <div class="time pl-3" id="minutes"></div>
						  <div class="time pl-3" id="seconds"></div>
						</div>
						</div>
						</div>   		
						</div>
   		 </section>
			<!--Produits-->				
		






    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Produits populaires
			</span>
            <h2 class="mb-4">Nos Produits</h2>
            <div id="filters" class="button-group text-right">

              <button class="btn is-checked" data-filter="*">Toutes catégories</button>
              <?php categories(); ?>
            </div>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row fill">
			<?php randomProducts(); ?>
    		</div>
    	</div>
    </section>




    





		
		<!--Clients-->
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Témoignage</span>
            <h2 class="mb-4">Notre client satisfait dit</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/oumaima.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">J'adore les produits , ils sont vraiments quelquechose de qualité .</p>
                    <p class="name">Dounia es-shaimi</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/nouhaila.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">un magnifique service et des produits 100% BIO.</p>
                    <p class="name">Doha Harmouch</p>
                  </div>
                </div>
			  </div>

			  <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/hanane.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">J'ai bien reçu mes produits, et je les trouvé parfait .</p>
                    <p class="name">Oumaima Bennari</p>
                  </div>
                </div>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>



	<?php include 'includes/footer.php';?>


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
  <!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
<script>
var $grid = $(".fill").isotope({
        itemSelector : '.item',
        layoutMode : 'fitRows'
    });


    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })

</script>
    
  </body>
</html>