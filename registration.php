<?php
include_once 'includes/function.php';
$db = new mysqli("localhost","root","","aynou-shop");

    if(isset($_POST['register'])){
      $user_name=$_POST['user_name'];
      $user_email=$_POST['user_email'];
      $user_contact=$_POST['user_contact'];
      $password=$_POST['password'];
      $user_ip=getRealIpUser();
      
      $insert_user="INSERT INTO users  (user_name,password,user_email,user_contact,user_ip) VALUES ('$user_name','$password','$user_email','$user_contact','$user_ip')";
      $run_user=mysqli_query($db,$insert_user);
  
      $select_cart="SELECT * FROM card WHERE ip_add='$user_ip'";
      $run_cart=mysqli_query($db,$select_cart);
  
      if(mysqli_num_rows($run_cart)>0){
        $_SESSION['user_email']=$user_email;
      echo "<script type='text/javascript'> alert('Félicitations!vous avez été enregistré avec succès!') </script>";
      echo "<script type='text/javascript'> window.open('authentification','_self') </script>";
      }
      
      }
      
    
?>