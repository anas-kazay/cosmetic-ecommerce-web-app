<?php
session_start();
include_once 'includes/function.php';
$db = new mysqli("localhost","root","","beautifulLady");

    if(isset($_POST['login'])){
      $user_email=$_POST['user_email'];
      $password=$_POST['password'];

      
      $select_user="SELECT * FROM users WHERE userEmail='$user_email' AND userPassword='$password' ";
      $run_user=mysqli_query($db,$select_user);
      $check_user=mysqli_num_rows($run_user);


      if($check_user==0){
      echo "<script> alert('Votre email ou votre mot de passe est erroné!') </script>";
      echo "<script type='text/javascript'> window.open('authentification.php','_self') </script>";

    }else{
      //  if($check_user==1 AND $check_cart==0)
    //  {
      $_SESSION['user_email']=$user_email;
      //echo "<script type='text/javascript'> alert('Vous êtes connecté!') </script>";
      echo "<script type='text/javascript'> window.open('index.php','_self') </script>";
      
  //  }
//    else{
//      $_SESSION['user_email']=$user_email;
//      echo "<script type='text/javascript'> alert('Vous êtes connecté!') </script>";
//      echo "<script type='text/javascript'> window.open('user-account.php','_self') </script>";
//    }
    }
    
      }

    
?>