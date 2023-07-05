<?php 
session_start();
include("includes/db.php");
include("includes/function.php");
if(isset($_POST['modifier'])){
  $_SESSION['q'] = "ioasf";
  $heading = $_POST['heading'];
  $content = $_POST['content'];
  $id=$_POST['cat_id'];


  $query = "UPDATE  categories set cat_title='$heading',cat_desc='$content' where cat_id=$id ";
  $_SESSION['q']=$query;
  $query_run = mysqli_query($db, $query);
  header("Location: categories.php");
} 







  

?>