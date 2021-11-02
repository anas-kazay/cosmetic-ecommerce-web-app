<?php
$db = new mysqli("localhost","root","","aynou-shop");
function total_price(){
    global $db;
  $ip_add = getRealIpUser();  
  $total_price=0;
  $select_cart="SELECT * FROM card WHERE ip_add='$ip_add'";
  $run_cart=mysqli_query($db,$select_cart);
  while ($record=mysqli_fetch_array($run_cart)){
   $product_id=$record['product_id'];
  $quantity=$record['quantity'];
  $get_price = "select * from products where product_id='$product_id'";
        
        $run_price = mysqli_query($db,$get_price);
        
        while($row_price=mysqli_fetch_array($run_price)){
            
          $product_price = $row_price['product_price'];
                                           
          $sub_total = $row_price['product_price']*$quantity;
          
          $total_price += $sub_total;
           
        }
}
    return $total_price;
}
$total=total_price();
    $url =$_SERVER['HTTP_REFERER']; 
    $url_components = parse_url($url,PHP_URL_QUERY); 
    parse_str($url_components, $params);
    $ip_add = getRealIpUser();  
    $product_id=$params['product_id']; 
    $product_quantity=$_POST['quantity'];        
    $check_product = "SELECT * FROM card where ip_add='$ip_add' AND product_id='$product_id'";
    $run_check = mysqli_query($db,$check_product);
    
    $get_user="SELECT * FROM users WHERE user_ip='$ip_add'";
    $run_user=mysqli_query($db,$get_user);

    while($row_user= mysqli_fetch_array($run_user)){
        $user_id= $row_user['user_id'];
        

    }
    $get_product="SELECT * FROM products WHERE product_id='$product_id'";
    $run_product= mysqli_query($db,$get_product);
    while($row_product= mysqli_fetch_array($run_product)){
        $product_title= $row_product['product_title'];
    }
    
    if(mysqli_num_rows($run_check)>0){
        
        echo "<script>alert('Ce Produit est deja existe dans la carte ')</script>";
        header('location:orders.php');
        
    }else{
        
        $query = "INSERT INTO card (product_id,product_title,ip_add,quantity,date_order,user_id) 
        VALUES ('$product_id','$product_title','$ip_add','$product_quantity',NOW(),'$user_id')";
        
        $run_query = mysqli_query($db,$query);

       
       
        header('location:orders.php');
        
    }


function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
}


?>