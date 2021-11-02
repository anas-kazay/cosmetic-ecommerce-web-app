<?php
session_start();
include_once 'includes/function.php';
$db = new mysqli("localhost","root","","aynou-shop");

    if(isset($_POST['login'])){
      $user_email=$_POST['user_email'];
      $password=$_POST['password'];
      $user_ip=getRealIpUser();
      
      $select_user="SELECT * FROM users WHERE user_email='$user_email' AND password='$password' ";
      $run_user=mysqli_query($db,$select_user);
      $check_user=mysqli_num_rows($run_user);
  
      $select_cart="SELECT * FROM card WHERE ip_add='$user_ip'";
      $run_cart=mysqli_query($db,$select_cart);
        $check_cart=mysqli_num_rows($run_cart);


      if($check_user==0){
      echo "<script type='text/javascript'> alert('Votre email ou votre mot de passe est erroné!') </script>";
        echo "<script type='text/javascript'> window.open('authentification.php','_self') </script>";

    }
      if($check_user==1 AND $check_cart==0)
      {
        $_SESSION['user_email']=$user_email;
        echo "<script type='text/javascript'> alert('Vous êtes connecté!') </script>";
        echo "<script type='text/javascript'> window.open('index.php','_self') </script>";
        
      }
      else{
        $_SESSION['user_email']=$user_email;
        echo "<script type='text/javascript'> alert('Vous êtes connecté!') </script>";
        echo "<script type='text/javascript'> window.open('user-account.php','_self') </script>";
      }
      }

    
?>