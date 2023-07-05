<?php
session_start();
$db = new mysqli("localhost","root","","beautifullady");
$url =$_SERVER['HTTP_REFERER']; 
    $url_components = parse_url($url,PHP_URL_QUERY); 
    parse_str($url_components, $params);

 
   $telephone = $_POST['telephone'];
   $user_name=$_POST['name'];
   $user_city=$_POST['city'];
   $user_add=$_POST['add'];
   $zipCode = $_POST['zipCode'];
    
    $update_user="UPDATE users SET userName='$user_name', city='$user_city' , adresse='$user_add',telephone='$telephone',zipCode='$zipCode' WHERE userEmail='".$_SESSION['user_email']. "'";
    $run_user=mysqli_query($db,$update_user);
    
   
    $total = 0;
        for($i=0;$i<count($_SESSION['quantity']);$i++){
          $total+=intval($_SESSION['price'][$i])*intval($_SESSION['quantity'][$i]);
        }
    $user_id = $_SESSION['userId'];

    $insert_commande = "INSERT INTO orders (userId,total_price,adresse,city,zipCode) 
    VALUES ($user_id,'$total','$user_add','$user_city','$zipCode')";
    
    $run_commande = mysqli_query($db,$insert_commande);
    
    $sql="select order_id from orders where userId=$user_id order by order_date desc limit 1";
    $run_info=mysqli_query($db,$sql);


    $order_id=0;

while($row_info= mysqli_fetch_array($run_info)){
    $order_id= $row_info['order_id'];

} 


    for($i=0;$i<count($_SESSION['name']);$i++){
    
    $product_id = $_SESSION['idProduit'][$i];
    $price = (int) $_SESSION['price'][$i];
    $quantity = 1;
    


   
    $insert_commande = "INSERT INTO order_items (order_id,item_id,sell_price,quantity) 
    VALUES ($order_id,$product_id,$price,$quantity)";
    
    $run_commande = mysqli_query($db,$insert_commande);

  }      
        unset($_SESSION['idProduit']);
        unset($_SESSION['price']);
        unset($_SESSION['name']);
        unset($_SESSION['quantity']);
        unset($_SESSION['src']);
        echo "<script>alert('Your orders has been submitted, Thanks')</script>";
        
        echo "<script>window.open('commands.php','_self')</script>";
        
    




 



?>