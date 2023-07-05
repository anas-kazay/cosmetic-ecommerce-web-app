<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Beautiful Lady/À propos</title>
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
  <?php
  include 'includes/header.php';
  ?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/about.jpeg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil</a></span> <span>À propos</span></p>
            <h1 class="mb-0 bread">QUI SOMMES NOUS ?</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" >
						<a  class=" d-flex justify-content-center align-items-center" >
							<img src="images/logo.png" style="width:500px;">
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Bienvenue chez Beautiful Lady</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
              <p> Beautiful Lady est un boutique en ligne qui vous offre des produits cosmetiques à 100% BIO.</p>
              <p>Trop souvent, les produits bio et naturels disponibles sur le marché ne sont pas adaptés aux attentes du consommateur, que ce soit à cause d’un mauvais rapport qualité prix (trop chers ou de faible qualité) ou à cause d’origines douteuses.
                Et por cela Beautiful Lady supprimant les intermédiaires, en mettant en place un processus de sélection adapté des fournisseurs(coopératives), et en offrant un service de livraison rapide à domicile, Beautiful Lady fait de la satisfaction de ses clients sa première priorité.
                En misant majoritairement sur la production locale, Beautiful Lady essayé de mis en valeur les produits produisent par des femmes des coopératives locaux</p>
							<p>Paiement cash à livraion ou par internet. Paiements sécurisés. Livraison à domicile.</p>
							<p><a href="products.php" class="btn btn-primary">Achetez maintenant</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		
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
                    <p class="name">Oumaima Amkane</p>
                    <span class="position">Etudiante en gènie informatique</span>
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
                    <p class="name">Nouhaila Dargane</p>
                    <span class="position">Photographer</span>
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
                    <p class="name">Hanane Ait Dabel</p>
                    <span class="position">blogger</span>
                  </div>
                </div>
			  </div>
            </div>
          </div>
        </div>
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

    <footer >
    <?php include 'includes/footer.php';?>
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