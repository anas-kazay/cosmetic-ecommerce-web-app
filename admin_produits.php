<?php 

include("includes/db.php");
include("includes/function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AYNOU-SHOP/Insert Products</title>
    <meta charset="utf-8" />
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
    include 'includes/header.php'
?> 
 <div
      class="hero-wrap hero-bread"
      style="background-image: url('images/insererproduits.jpg');"
    >
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs">
              <span class="mr-2"><a href="index.php" style="color: white;">Acceuil</a></span><span> Espace Admin </span>
              
            </p>
            <h1 class="mb-0 bread" style="color: white">Gestion de Produits</h1>
          </div>
        </div>
      </div>
    </div>
     <!-- END nav -->
           

       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12 col-md-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               <center>
               <h3 class="panel-title" style='margin-top:2em;'><!-- panel-title Begin -->
                 <strong>  Ajouter/Modifier un produit  </strong> 
               </h3><!-- panel-title Finish -->
               </center>
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body" style="margin-left:10em;"><!-- panel-body Begin -->
               
               <form method="POST" class="form-horizontal" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>" style='margin-bottom: 10em;'>
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Nom du produit </label> 
                      
                      <div class="col-md-8"><!-- col-md-6 Begin -->
                          
                          <input name="product_title" type="text" class="form-control" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Categorie du produit </label> 
                      
                      <div class="col-md-8"><!-- col-md-6 Begin -->
                          
                          <select name="product_categ" class="form-control"><!-- form-control Begin -->
                              
                              <option> Select a Category Product </option>
                              
                              <?php 
                              
                              $get_product_categs = "select * from product_categories";
                              $run_product_categs = mysqli_query($db,$get_product_categs);
                              
                              while ($row_product_categs=mysqli_fetch_array($run_product_categs)){
                                  
                                  $product_categ_id = $row_product_categs['product_categ_id'];
                                  $product_categ_title = $row_product_categs['product_categ_title'];
                                  
                                  echo "
                                  
                                  <option value='$product_categ_id'> $product_categ_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Categorie </label> 
                      
                      <div class="col-md-8"><!-- col-md-6 Begin -->
                          
                          <select name="categs" class="form-control"><!-- form-control Begin -->
                              
                              <option> Selectioner la Categorie </option>
                              
                              <?php 
                              
                              $get_categs = "select * from categories";
                              $run_categs = mysqli_query($db,$get_categs);
                              
                              while ($row_categs=mysqli_fetch_array($run_categs)){
                                  
                                  $categ_id = $row_categs['categ_id'];
                                  $categ_title = $row_categs['categ_title'];
                                  
                                  echo "
                                  
                                  <option value='$categ_id'> $categ_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Image de produit </label> 
                      
                      <div class="col-md-8"><!-- col-md-6 Begin -->
                          
                          <input name="product_image" type="file" class="form-control" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                  
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Prix du produit </label> 
                      
                      <div class="col-md-8"><!-- col-md-6 Begin -->
                          
                          <input name="product_price" type="text" class="form-control" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Description du produit</label> 
                      
                      <div class="col-md-8"><!-- col-md-6 Begin -->
                          
                          <textarea name="product_desc" cols="40" rows="15" class="form-control"></textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> lien du page detaillé du produit </label> 
                       
                       <div class="col-md-8"><!-- col-md-6 Begin -->
                           
                           <input name="product_detail_link" type="text" class="form-control" >
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    
                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-8"><!-- col-md-6 Begin -->
                          
                      <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="ajouter"  style="margin-top:30px;width:200px" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Ajouter
                               
                               </button>
                               <button type="submit" name="supprimer"  style="margin-top:30px;width:200px" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Supprimer
                               
                               </button>
                               </div>
                               </div>
                           </div><!-- text-center Finish -->
                                                    
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
    <footer>
    <?php include 'includes/footer.php';  ?>
</footer>
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
<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>


<?php 
 insertProduct();
?>