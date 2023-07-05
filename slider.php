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
<title>Beautiful Lady/Gestion de sliders</title>
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
        url:'php/store_items2.php',
        dataType:'json',
        data:{
          mod:id,
        },
        success:function(data) {
          //document.getElementById("id_id").value=data.id;
          document.getElementById("current_photo").value=data.photo;
          document.getElementById("heading").value=data.heading;
          document.getElementById("content").value=data.content;
          document.getElementById("button_text").value=data.button_text;
          document.getElementById("button_url").value=data.button_url;
          //document.getElementById("kazay").innerHTML="hi";
          
        }
      });
    }


    function remove(id){
      $.ajax(
        {
          type:'post',
          url:'php/store_items2.php',
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
          url:'php/store_items2.php',
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
      style="background-image: url('images/banner.jpg');"
      >
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs">
              <span class="mr-2"><a href="index.php" style="color: white;">Acceuil</a></span><span id='kazay'> Espace Admin </span>
              
            </p>
            <h1 class="mb-0 bread" style="color: white">Gestion des bannières</h1>
          </div>
        </div>
      </div>
    </div>
     <!-- END nav -->

     <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insert-slider.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Le titre </label>
                <input type="text" name="titre" class="form-control" placeholder="Enter le titre">
            </div>

            <div class="form-group">
                <label>Le contenue</label>
                <textarea name="content" cols="40" rows="2" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Le text du botton</label>
                <input type="text" name="button_text" class="form-control" placeholder="Enter le text du botton">
                <small class="error_email" style="color: red;"></small>
            </div>

            

            <div class="form-group">
                <label>L'URL du botton</label>
                <input type="text" name="button_url" class="form-control" placeholder="Enter l'URL du botton'">
                <small class="error_email" style="color: red;"></small>
            </div>

            

            <div class="form-group">
                <label>Image de slider</label>
                <input name="photo" type="file" class="form-control" >
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
       Ajouter un slider 
</button>

<div class="modal fade" id="modifieradminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier le slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="modifier_slider.php" method="POST" enctype="multipart/form-data">

      <div class="modal-body">

<div class="form-group">
    <label> Le titre </label>
    <input type="text" name="heading" class="form-control" placeholder="Enter le titre" id="heading">
</div>

<div class="form-group">
    <label>Le contenue</label>
    <textarea name="content" cols="40" rows="2" class="form-control" id="content"></textarea>
</div>

<div class="form-group">
    <label>Le text du botton</label>
    <input type="text" name="button_text" class="form-control" placeholder="Enter le text du botton" id="button_text" >
    <small class="error_email" style="color: red;"></small>
</div>



<div class="form-group">
    <label>L'URL du botton</label>
    <input type="text" name="button_url" class="form-control" placeholder="Enter l'URL du botton'" id="button_url">
    <small class="error_email" style="color: red;"></small>
</div>



<div class="form-group">
    <label>Image de slider</label>
    <input name="photo" type="file" class="form-control" >
    <input type="hidden"  name="current_photo" id="current_photo" value="">
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
								<th>L'image</th>
								<th width="200">Le titre</th>
								<th >Le contenue</th>
								<th width="60">texte du botton</th>
								<th>URL du botton</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
                $sql = "select *  from slider";
                $run_product= mysqli_query($db,$sql);
                while($row_product= mysqli_fetch_array($run_product)){
                    $id= $row_product['id'];
                    $photo = $row_product['photo'];
                    $heading= $row_product['heading'];
                    $content = $row_product['content'];
                    $button_text = $row_product['button_text'];
                    $button_url = $row_product['button_url'];
                




								?>
								<tr>
									<td><?php echo $id; ?></td>
									<td style="width:130px;"><img src="./images/sliders/<?php echo $photo; ?>" alt="photo n'existe pas" style="width:100px;"></td>
									<td><?php echo $heading; ?></td>
									<td><?php echo $content; ?></td>
									<td><?php echo $button_text; ?></td>
                                    <td><?php echo $button_url; ?></td>
									<td>										
                  
                  <a data-toggle="modal" data-target="#modifieradminprofile" class="btn btn-primary btn-xs"<?php echo " onclick=\"modifier('$id')\"" ?> >
                <button type="button" class="btn btn-primary"  <?php echo " onclick=\"modifier('$id')\"" ?>  > Edit</button>
                </a>
      
                    <a  class="btn btn-danger" data-toggle="modal" data-target="#deletemodal" <?php echo " onclick=\"remove('$id')\"" ?>>delete</a>
							
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
        Do you want to delete this slider 
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