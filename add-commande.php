<?php
$db = new mysqli("localhost","root","","aynou-shop");
$url =$_SERVER['HTTP_REFERER']; 
    $url_components = parse_url($url,PHP_URL_QUERY); 
    parse_str($url_components, $params);
    $ip_add = getRealIpUser();  
    $user_id=$params['user_id']; 

    $ip_add = getRealIpUser();  
        
   $user_name=$_POST['name'];
   $user_country=$_POST['country'];
   $user_city=$_POST['city'];
   $user_add=$_POST['add'];
   $methode=$_POST['optradio'];
    
    $update_user="UPDATE users SET user_country='$user_country', user_city='$user_city' , user_add='$user_add' WHERE user_ip='$ip_add' AND user_id='$user_id'";
    $run_user=mysqli_query($db,$update_user);
    
   
   


    
$select_cart = "select * from card where ip_add='$ip_add' and user_id='$user_id'";

$run_cart = mysqli_query($db,$select_cart);
if (!$run_cart) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}

while($row_cart = mysqli_fetch_array($run_cart)){
    
    $product_id = $row_cart['product_id'];
    
    $quantity = $row_cart['quantity'];
    
    $product_title = $row_cart['product_title'];

   
    $get_products = "select * from products where product_id='$product_id'";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products = mysqli_fetch_array($run_products)){
        
        $sub_total = $row_products['product_price']*$quantity;

       
        $insert_commande = "INSERT INTO commande (product_id,user_id,user_name,user_add,totale,product_title,quantity,methode_payement,date_commande) 
        VALUES ('$product_id','$user_id','$user_name','$user_add','$sub_total','$product_title','$quantity','$methode',NOW())";
        
        $run_commande = mysqli_query($db,$insert_commande);
        
        $delete_cart = "delete from card where ip_add='$ip_add'";
        
        $run_delete = mysqli_query($db,$delete_cart);
        
        echo "<script>alert('Your orders has been submitted, Thanks')</script>";
        
        echo "<script>window.open('orders.php','_self')</script>";
        
    }
}
if($methode=='paypal'){
    echo"
    <script>
    window.open('https://paypal.me/oumaimaamkane?locale.x=en_US','_self') 
  </script>";
      
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