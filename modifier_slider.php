<?php 
session_start();
include("includes/db.php");
include("includes/function.php");
if(isset($_POST['modifier'])){
  $_SESSION['q'] = "ioasf";
  $heading = $_POST['heading'];
  $content = $_POST['content'];
  $button_text = $_POST['button_text'];
  $button_url = $_POST['button_url'];
  $path = $_FILES['photo']['name'];
  $path_tmp = $_FILES['photo']['tmp_name'];
  $id = $_SESSION['slider_id'];
  if($path!='') {
    $ext = pathinfo( $path, PATHINFO_EXTENSION );
    $file_name = basename( $path, '.' . $ext );

}
if($path == '') {
  $query = "UPDATE  slider set heading='$heading',content='$content',button_text='$button_text',button_url='$button_url' where id=$id";
  $_SESSION['q']=$query;
  $query_run = mysqli_query($db, $query);
  header("Location: slider.php");
} else {

  unlink('images/sliders/'.$_POST['current_photo']);

  

$final_name = 'slider-'.$id.'.'.$ext;
  move_uploaded_file( $path_tmp, 'images/sliders/'.$final_name );


  $query = "UPDATE  slider set heading='$heading',content='$content',button_text='$button_text',button_url='$button_url',photo='$final_name' where id=$id";
  $_SESSION['q']=$query;
  $query_run = mysqli_query($db, $query);
  header("Location: slider.php");
}







  
}
?>