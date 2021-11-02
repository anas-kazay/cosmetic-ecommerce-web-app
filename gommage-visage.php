<!DOCTYPE html>
<html lang="en">
<head>
    <title>AYNOU-SHOP/Gommage Visage</title>
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

<?php
include 'includes/header.php';
?>
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('images/visage.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php" style="color: white">Acceuil</a></span> <span class="mr-2"><a href="shop.php"  style="color: white">Produits</a></span><span  style="color: white">Visage</span></p>
                <h1 class="mb-0 bread"  style="color: white">Gommage Visage</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="images/argane-visage4.png" class="image-popup"><img src="images/argane-visage4.png" class="img-fluid" alt="argane-visage"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>Gommage Visage</h3>
                
                <p class="price"><span>50.00 dH</span></p>
                <p>Le gommage visage  combine l’effet de l’extrait de feuilles d’arganier au complexe de trois huiles mythiques (l’huile d’argan, d’avocat et huile
                    d’amande douce). Il exfolie en douceur les cellules mortes de l’épiderme, élimine la rugosité, et stimule la microcirculation.
                    Sa texture crèmeuse à la délicate fragrance et aux particules douces et exfoliantes, lisse, adoucit, éclaircit et rafraîchit votre peau
                    en la laissant naturellement purifiée et fraîche.
                </p>
                <form action="add-cart.php" method="POST">
                <div class="row mt-4">

                    <div class="w-100">
                    <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                        <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
                    </div>
                    </div>
                   
                </div>
                <button name="add-cart" id="add-cart" type="submit" href="orders.php">Ajouter au panier</button>
            </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Produits</span>
                <h2 class="mb-4">Produits connexes</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="figue-barbarie-savon.php" class="img-prod" >
                        <img
                            class="img-fluid"
                            src="images/figue-barbarie-visage1.jpg"
                            alt="figue-barbarie-visage"
                        />
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="figue-barbarie-savon.php">Savon de figue de barbarie</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>30.00DH</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a
                                    href="figue-barbarie-savon.php"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center"
                                >
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a  href="#" class="buy-now d-flex justify-content-center align-items-center mx-1"  >
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="creme-jour.php" class="img-prod" >
                        <img class="img-fluid"  src="images/argane-visage1.png"  alt="argane-visage"  />
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="creme-jour.php">Crème de jour</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>75.00 DH</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a  href="creme-jour.php" class="add-to-cart d-flex justify-content-center align-items-center text-center"  >
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1" >
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="huile-vegitale-amande.php" class="img-prod" ><img class="img-fluid" src="images/amande-visage2.png" alt="Colorlib Template"  />
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="huile-vegitale-amande.php">HUILE VÉGÉTALE D’AMANDE DOUCE</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>97.00DH</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a  href="huile-vegitale-amande.php" class="add-to-cart d-flex justify-content-center align-items-center text-center" >
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#"  class="buy-now d-flex justify-content-center align-items-center mx-1" >
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="lait-demaquillant.php" class="img-prod"><img class="img-fluid" src="images/argane-visage2.png" alt="argane-visage"/>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="lait-demaquillant.php">Lait Démaquillant</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale">89.00 DH</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="lait-demaquillant.php" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <!--<a href="#" class="heart d-flex justify-content-center align-items-center ">
                                  <span><i class="ion-ios-heart"></i></span>
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include  'includes/footer.php';?>



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
