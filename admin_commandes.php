<?php
 include_once 'includes/function.php';
 session_start();

 if (!isset($_SESSION['user_email']) || $_SESSION['user_email']!='admin@gmail.com'){

  header("Location: authentification.php");
  
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
      function change(id){
      var v=document.getElementById(id).value;
      $.ajax({
        type:'post',
        url:'php/store_items.php',
        data:{
          change:id,
          val:v
        },
        success:function(data) {
          
        }
      });
}




    </script>

    <style>
      .button-group {
  margin: auto;
  display: flex;
  flex-direction: row;
  justify-content: center;
}
    </style>
</head>
<body>

<?php
  include 'includes/header.php';
  include 'includes/admin_header.php';
    echo"
   <div class='hero-wrap hero-bread' style='background-image: url(images/commandesd.jpeg);'>
      <div class='container'>
        <div class='row no-gutters slider-text align-items-center justify-content-center'>
          <div class='col-md-9 ftco-animate text-center'>
          	<p class='breadcrumbs'><span class='mr-2'><a href='index.php'>Accueil</a></span><span class='mr-2'><a>Espace Admin</a></span></p>
            <h1 class='mb-0 bread'> Commandes</h1>
          </div>
        </div>
      </div>
    </div>

  <center>
    
    <h1> Les commandes </h1>
    
    
</center>





    <section class=\"content\">
	<div class=\"row\">
		<div class=\"col-md-12\">
			<div class=\"box box-info\">
				<div class=\"box-body table-responsive\">
					<table id=\"example1\" class=\"table table-bordered table-striped\">
						<thead><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                <th> Identifiant  </th>
                <th> Nom du client  </th>
                <th> Les produits </th>
                <th> Totale(DHS) </th>
                <th> Date de Commande</th>
                <th> Telephone</th>
                <th> Info de lieu</th>
                <th> Status</th>
               
            </tr>
        </thead>
        <tbody>
             ";
             admin_commandes();
             echo" 
        </tbody>
        </table>
				</div>
			</div>
		</div>
	</div>
</section>";

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

