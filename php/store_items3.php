<?php
session_start();

if(isset($_POST['mod'])){
    $id= $_POST['mod'];
    $db = new mysqli("localhost","root","","beautifulLady");
    $sql = "select * from categories where cat_id=$id";
    $_SESSION['q']=$sql;
  $run_product= mysqli_query($db,$sql);
  while($row_product= mysqli_fetch_array($run_product)){
      $_SESSION['categorie_id']=$id;
      $heading= $row_product['cat_title'];
      $content= $row_product['cat_desc'];
  }


    
    
    echo json_encode(array("heading" => "$heading", "content" => "$content", "id" => "$id"));
    exit();	
  }





  if(isset($_POST['delete'])){
    $_SESSION['delete']=$_POST['delete'];
      }



      if(isset($_POST['delete2'])){
        $id=$_SESSION['delete'];
        $db = new mysqli("localhost","root","","beautifulLady");
        $query = "delete from categories where cat_id=$id";
        $_SESSION['delete2']=$query;
        if(!$query_run = mysqli_query($db, $query)){
            echo "<script> alert('Votre email ou votre mot de passe est erroné!') </script>";
            $_SESSION['sql_error']='cette categoire a deja des produits';
        }
            $query_run = mysqli_query($db, $query);

        
    
    
    }













?>