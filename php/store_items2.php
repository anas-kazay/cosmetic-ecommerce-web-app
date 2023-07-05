<?php
session_start();

if(isset($_POST['mod'])){
   
    $id= $_POST['mod'];
    $db = new mysqli("localhost","root","","beautifulLady");
    $sql = "select * from slider where id=$id";
  $run_product= mysqli_query($db,$sql);
  while($row_product= mysqli_fetch_array($run_product)){
      $photo= $row_product['photo'];
      $_SESSION['slider_id']=$id;
      $heading= $row_product['heading'];
      $content= $row_product['content'];
      $button_text= $row_product['button_text'];
      $button_url = $row_product['button_url'];


  }


    
    
    echo json_encode(array("photo" => "$photo", "heading" => "$heading", "content" => "$content", "button_text" => "$button_text", "button_url" => "$button_url"));
    exit();	
  }


  if(isset($_POST['delete'])){
    $_SESSION['delete']=$_POST['delete'];
      }



      if(isset($_POST['delete2'])){
        $id=$_SESSION['delete'];
        $db = new mysqli("localhost","root","","beautifulLady");
    
        $sql = "select photo from slider where id=$id";
      $run_product= mysqli_query($db,$sql);
      while($row_product= mysqli_fetch_array($run_product)){
          $product_image= $row_product['photo'];
      }
        $query = "delete from slider where id=$id";
        $_SESSION['delete2']=$query;
        $query_run = mysqli_query($db, $query);
        unlink('images/products/'.$product_image);
    
    
    }













?>