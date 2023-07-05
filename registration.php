<?php
session_start();
include_once 'includes/function.php';
$db = new mysqli("localhost","root","kazay-2011","beautifulLady");

    if(isset($_POST['register'])){
      $user_name=$_POST['user_name'];
      $user_email=$_POST['user_email'];
      $user_contact=$_POST['user_contact'];
      $password=$_POST['password'];
      $sql1 = "select * from users where userEmail='$user_email';";
      $result= mysqli_query($db,$sql1);

      if(mysqli_fetch_array($result)){
         echo "<script type='text/javascript'> alert('Ce compte est deja cree') </script>";
         echo "<script type='text/javascript'> window.open('authentification.php','_self') </script>";
      }else{
         $sql="INSERT INTO users(userName,userEmail,telephone,userPwd)  VALUES ('$user_name','$user_email','$user_contact','$password')";
         $run_user=mysqli_query($db,$sql);
         
        // $select_cart="SELECT * FROM card WHERE ip_add='$user_ip'";
       //  $run_cart=mysqli_query($db,$select_cart);
       //  if(mysqli_num_rows($run_cart)!=false){
       //    if(mysqli_num_rows($run_cart)>0){
        $_SESSION['user_email']=$user_email;
         
         echo "<script type='text/javascript'> alert('Félicitations!vous avez été enregistré avec succès!') </script>";
         echo "<script type='text/javascript'> window.open('index.php','_self') </script>";
      }



      
   //   }
   //   }
      
      
      }
      
    
?>