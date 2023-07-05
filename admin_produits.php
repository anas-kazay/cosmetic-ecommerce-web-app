<?php 
session_start();
include("includes/db.php");
include("includes/function.php");
if($_SESSION['user_email']!='admin@gmail.com'){
    header('Location: index.php');
}



  

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BIOTIFUL LADY/Products</title>
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
    <!-- CSS only -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
              function modifier(id)
    {

	  $.ajax({
        type:'post',
        url:'php/store_items.php',
        dataType:'json',
        data:{
          mod:id,
        },
        success:function(data) {
          document.getElementById("id_name").value=data.title;
          document.getElementById("id_cat").value=data.cat;
          document.getElementById("id_price").value=data.price;
          document.getElementById("id_desc").value=data.desc;
          document.getElementById("id_active").value=data.status;
          document.getElementById("id_img").value=data.img;
          
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
            delete:id
          },
          success:function(data){
        }
          
        }
        
      )
}


function remove2(){
      $.ajax(
        {
          type:'post',
          url:'php/store_items.php',
          data:{
            delete2:1
          },
          success:function(){
          $("#example1").load(" #example1");

        }
          
        }
        
      )
}
</script>
    <style>
      .button-group,.addbtn {
  margin: auto;
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.addbtn {
  margin-top:10px;
}

    </style>


</head>
<body>

<?php
    include 'includes/header.php';
    include 'includes/admin_header.php';
?> 





 <div
      class="hero-wrap hero-bread"
      style="background-image: url('images/products.jpeg');"
      >
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs">
              <span class="mr-2"><a href="index.php" style="color: white;">Acceuil</a></span><span id='kazay'> Espace Admin </span>
              
            </p>
            <h1 class="mb-0 bread" style="color: white">Gestion des produits</h1>
          </div>
        </div>
      </div>
    </div>
     <!-- END nav -->

     
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insert-product.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Nom du produit </label>
                <input type="text" name="name" class="form-control" placeholder="Enter le nom du produit">
            </div>
            <div class="form-group">
                <label>Categorie du produit</label>
                <select name="product_categ" class="form-control"  id="select1"><!-- form-control Begin --> 
                              <option>Sélectionnez la catégorie de produit</option>
                            
                              <?php 
                              $get_product_categs = "select * from categories";
                              $run_product_categs = mysqli_query($db,$get_product_categs);
                              
                              while ($row_product_categs=mysqli_fetch_array($run_product_categs)){
                                  
                                  $categ_id = $row_product_categs['cat_id'];
                                  $categ_title = $row_product_categs['cat_title'];
                                  
                                  echo "<option value='$categ_id'> $categ_title </option>";
                                  
                              }
                              ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Prix du produit</label>
                <input type="text" name="prix" class="form-control checking_email" placeholder="Enter le prix">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Image de produit</label>
                <input name="product_image" type="file" class="form-control" >
            </div>
            <div class="form-group">
                <label>Description du produit</label>
                <textarea name="product_desc" cols="40" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
				<label>Is Active?</label>
					<select name="active" class="form-control" style="width:auto;" id="select2">
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select> 
			</div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary" >Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<button type="button" class="btn btn-primary addbtn" data-toggle="modal" data-target="#addadminprofile">
       Ajouter un produit 
</button>

<div class="modal fade" id="modifieradminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier le produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="modifier_produit.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Nom du produit </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Username" id="id_name" >
            </div>
            <div class="form-group">
                <label>Categorie du produit</label>
                <select name="product_categ" class="form-control"  id="id_cat"><!-- form-control Begin --> 
                              <option >Sélectionnez la catégorie de produit</option>
                            
                              <?php 
                              $get_product_categs = "select * from categories";
                              $run_product_categs = mysqli_query($db,$get_product_categs);
                              
                              while ($row_product_categs=mysqli_fetch_array($run_product_categs)){
                                  
                                  $categ_id = $row_product_categs['cat_id'];
                                  $categ_title = $row_product_categs['cat_title'];
                                  
                                  echo "<option value='$categ_id'> $categ_title </option>";
                                  
                              }
                              ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Prix du produit</label>
                <input type="text" name="prix" class="form-control checking_email" placeholder="Enter le Prix" id="id_price">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Image de produit</label>
                <input name="product_image" type="file" class="form-control"  >
                <input type="hidden" id="id_img" name="currnt_photo" value="">
            </div>
            <div class="form-group">
                <label>Description du produit</label>
                <textarea name="product_desc" cols="40" rows="8" class="form-control" id="id_desc"></textarea>
            </div>
            <div class="form-group">
				<label>Is Active?</label>
					<select name="active" class="form-control" style="width:auto;" id="id_active">
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select> 
			</div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="modifier" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


           

     <section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30">SL</th>
								<th>Photo</th>
								<th width="100">Product Name</th>
								<th width="60">Price</th>
								<th width="60">Description</th>
								<th width="60">Is Active?</th>
								<th width="60">Category</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
                $sql = "select * from categories";
                $run_product= mysqli_query($db,$sql);
                while($row_product= mysqli_fetch_array($run_product)){
                    $product_id= $row_product['cat_id'];
                    
                    $product_title= $row_product['cat_title'];
                    $cats[$product_id]=$product_title;
                }

							$i=0;
	$sql = "SELECT product_id,cat_id,product_title,product_img,product_price,product_desc,status FROM products";
									
                              $run_product_categs = mysqli_query($db,$sql);
                              



                              while ($row=mysqli_fetch_array($run_product_categs)){
								$i++;
                $product_id=$row['product_id'];
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td style="width:130px;"><img src="./images/products/<?php echo $row['product_img']; ?>" alt="<?php echo $row['product_title']; ?>" style="width:100px;"></td>
									<td><?php echo $row['product_title']; ?></td>
									<td><?php echo $row['product_price']; ?></td>
									<td style="width:700px;"><?php echo $row['product_desc']; ?></td>
									<td>
										<?php if($row['status'] == 1) {echo 'Yes';} else {echo 'No';} ?>
									</td>
									<td><?php echo $cats[$row['cat_id']]; ?></td>
									<td>										
                  
                  <a data-toggle="modal" data-target="#modifieradminprofile" class="btn btn-primary btn-xs"<?php echo " onclick=\"modifier('$product_id')\"" ?> >
                <button type="button" class="btn btn-primary"  <?php echo " onclick=\"modifier('$product_id')\"" ?>  > Edit</button>
                </a>
      
                    <a  class="btn btn-danger" data-toggle="modal" data-target="#deletemodal" <?php echo " onclick=\"remove('$product_id')\"" ?>>delete</a>
							
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>






<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to delete this product 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="remove2()" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id=""></div>



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
    
</body>
</html>


<?php 
 insertProduct();
?>