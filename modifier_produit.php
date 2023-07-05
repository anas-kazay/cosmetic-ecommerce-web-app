<?php 
session_start();
include("includes/db.php");
include("includes/function.php");
if(isset($_POST['modifier'])){
  $_SESSION['q'] = "ioasf";
  $name = $_POST['name'];
  $product_categ = $_POST['product_categ'];
  $prix = $_POST['prix'];
  $product_desc = $_POST['product_desc'];
  $active = $_POST['active'];
  $path = $_FILES['product_image']['name'];
  $path_tmp = $_FILES['product_image']['tmp_name'];
  $product_id = $_SESSION['product_id'];
  if($path!='') {
    $ext = pathinfo( $path, PATHINFO_EXTENSION );
    $file_name = basename( $path, '.' . $ext );

}
if($path == '') {
  $query = "UPDATE  products set cat_id=$product_categ,product_title='$name',product_price=$prix,product_desc='$product_desc',status='$active' where product_id=$product_id";
  $_SESSION['q']=$query;
  $query_run = mysqli_query($db, $query);
  header("Location: admin_produits.php");
} else {

  unlink('images/products/'.$_POST['currnt_photo']);

  

$final_name = 'product-'.$product_id.'.'.$ext;
  move_uploaded_file( $path_tmp, 'images/products/'.$final_name );


  $query = "UPDATE  products set cat_id=$product_categ,product_title='$name',product_price=$prix,product_desc='$product_desc',status='$active' , product_img='$final_name' where product_id=$product_id";
  $_SESSION['q']=$query;
  $query_run = mysqli_query($db, $query);
  header("Location: admin_produits.php");
}







  
}
?>