<?php
  session_start();


  if(!isset($_SESSION['name'])){
    $_SESSION['name'] = array();
  }



  if(isset($_POST['total_cart_items']))
  { 
        
        $total = 0;
        for($i=0;$i<count($_SESSION['quantity']);$i++){
          $total+=intval($_SESSION['price'][$i])*intval($_SESSION['quantity'][$i]);
        }
        $_SESSION['q'] = count($_SESSION['quantity']);
        $qq=intval($total);
      
    
    $c = array_sum($_SESSION['quantity']);
  echo json_encode(array("a" => "$c", "b" => "$qq"));
	exit();
  }




  if(isset($_POST['item_src']))
  {
    $flag = 1;
    for($i=0;$i<count($_SESSION['name']);$i++)
    {
      if($_SESSION['idProduit'][$i]==$_POST['item_id']){
        $_SESSION['quantity'][$i]++;
        $flag = 0;
      }
    }
    if($flag==1){
    $_SESSION['idProduit'][] = $_POST['item_id'];
    $_SESSION['name'][]=$_POST['item_name'];
    $_SESSION['price'][]=$_POST['item_price'];
    $_SESSION['src'][]=$_POST['item_src'];
    $_SESSION['quantity'][]=1;
    }

    echo array_sum($_SESSION['quantity']);
    exit();
  }




  if(isset($_POST['item_remove'])){
    for($i=0;$i<count($_SESSION['name']);$i++)
    {
      if($_SESSION['idProduit'][$i]==$_POST['item_remove']){
        if($_SESSION['quantity'][$i]==1){
          unset($_SESSION['src'][$i]);
          $_SESSION['src']= array_values($_SESSION['src']);
          unset($_SESSION['name'][$i]);
          $_SESSION['name']= array_values($_SESSION['name']);
          unset($_SESSION['price'][$i]);
          $_SESSION['price']= array_values($_SESSION['price']);
          unset($_SESSION['idProduit'][$i]);
          $_SESSION['idProduit']= array_values($_SESSION['idProduit']);
          unset($_SESSION['quantity'][$i]);
          $_SESSION['quantity']= array_values($_SESSION['quantity']);
        }else{
          $_SESSION['quantity'][$i]--;
        }
        
      }
    }

    $total = 0;
        for($i=0;$i<count($_SESSION['quantity']);$i++){
          $total+=intval($_SESSION['price'][$i])*intval($_SESSION['quantity'][$i]);
        }
    
        $c = array_sum($_SESSION['quantity']);
    echo json_encode(array("a" => "$c", "b" => "$total"));
    exit();	
  }


  if(isset($_POST['item_add'])){
    for($i=0;$i<count($_SESSION['name']);$i++)
    {
      if($_SESSION['idProduit'][$i]==$_POST['item_add']){
        $_SESSION['quantity'][$i]++;
        
      }
    }

    $total = 0;
        for($i=0;$i<count($_SESSION['quantity']);$i++){
          $total+=intval($_SESSION['price'][$i])*intval($_SESSION['quantity'][$i]);
        }
    
        $c = array_sum($_SESSION['quantity']);
    echo json_encode(array("a" => "$c", "b" => "$total"));
    exit();	
  }





  if(isset($_POST['change'])){
    $db = new mysqli("localhost","root","","beautifulLady");
    $id = $_POST['change'];
    $status = $_POST['val'];
    $query = "update orders set order_status= $status where id=$id";
    $_SESSION['anas'] = $query;
    $query_run = mysqli_query($db, $query);

  }




  if(isset($_POST['delete'])){
$_SESSION['delete']=$_POST['delete'];
  }



  if(isset($_POST['delete2'])){
    $id=$_SESSION['delete'];
    $db = new mysqli("localhost","root","","beautifulLady");

    $sql = "select product_img from products where product_id=$id";
  $run_product= mysqli_query($db,$sql);
  while($row_product= mysqli_fetch_array($run_product)){
      $product_image= $row_product['product_img'];
  }
    $query = "delete from products where product_id=$id";
    $_SESSION['delete2']=$query;
    $query_run = mysqli_query($db, $query);
    unlink('images/products/'.$product_image);


}
      





  if(isset($_POST['mod'])){
   
    $id= $_POST['mod'];
    $db = new mysqli("localhost","root","","beautifulLady");
    $sql = "select * from products where product_id=$id";
  $run_product= mysqli_query($db,$sql);
  while($row_product= mysqli_fetch_array($run_product)){
      $product_id= $row_product['product_id'];
      $_SESSION['product_id']=$product_id;
      $product_title= $row_product['product_title'];
      $product_price= $row_product['product_price'];
      $product_image= $row_product['product_img'];
      $product_desc = $row_product['product_desc'];
      $cat_id = $row_product['cat_id'];
      $is_active = $row_product['status'];

  }


    
    
    echo json_encode(array("title" => "$product_title", "cat" => "$cat_id", "price" => "$product_price", "desc" => "$product_desc", "status" => "$is_active", "img" => "$product_image"));
    exit();	
  }

  if(isset($_POST['showcart']))
  {
    for($i=0;$i<count($_SESSION['name']);$i++)
    {
      echo "<div class='cart_items'>";
      echo "<img src='".$_SESSION['src'][$i]."'>";
      echo "<p>".$_SESSION['name'][$i]."</p>";
      echo "<p>".$_SESSION['price'][$i]."</p>";
      echo "</div>";
    }
    exit();	
  }
?>