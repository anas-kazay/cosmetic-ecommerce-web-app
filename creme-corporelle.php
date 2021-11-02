<!DOCTYPE html>
<html lang="en">
<head>
    <title>AYNOU-SHOP/Crème ِCorporelle</title>
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

<div class="hero-wrap hero-bread" style="background-image: url('images/Amande.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Acceuil</a></span> <span class="mr-2"><a href="shop.php">Produits</a></span><span>Corps</span></p>
                <h1 class="mb-0 bread">Crème Corporelle</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="images/amande-corps.jpg" class="image-popup"><img src="images/amande-corps.jpg" class="img-fluid" alt="amande-corps"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>Crème Corporelle</h3>
                
                <p class="price"><span>80.00 DH</span></p>
                <p>La crème corporelle Original à base d'amande douce,d'huiles d'argan et de beurre de karité, laisse sur la peau une sensation de douceur
                    et d’hydratation intense. Sa formule réparatrice et protectrice, délicatement parfumée aux notes voluptueuses, enveloppe les peaux sèches
                    d'un cocon de confort.
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
                    <a href="huile-douche.php" class="img-prod" >
                        <img class="img-fluid"  src="images/argane-corps2.jpg"  alt="argane-corps"  />
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="huile-douche.php">Huile de douche</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>139.00 DH</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a  href="huile-douche.php" class="add-to-cart d-flex justify-content-center align-items-center text-center"  >
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
                    <a href="creme-mains.php" class="img-prod" ><img  class="img-fluid" src="images/argane-corps1.jpg" alt="argane-corps"=/>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="creme-mains.php">Crème des mains</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>72.00 DH</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a  href="creme-mains.php"  class="add-to-cart d-flex justify-content-center align-items-center text-center"  >
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a   href="#"  class="buy-now d-flex justify-content-center align-items-center mx-1"  >
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="amande-geldouche.php" class="img-prod" >
                        <img class="img-fluid"  src="images/amande-corps2.jpg"  alt="amande-corps"  />
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="amande-geldouche.php">Amande Gel Douche</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>35.00 DH</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a  href="amande-geldouche.php" class="add-to-cart d-flex justify-content-center align-items-center text-center"  >
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
                    <a href="serum.php" class="img-prod" >
                        <img class="img-fluid"  src="images/argane-cheveux3.jpg"  alt="argane-cheveux"  />
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="serum.php">Sérum cheveux de nuit</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>70.00 DH</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a  href="serum.php" class="add-to-cart d-flex justify-content-center align-items-center text-center"  >
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

