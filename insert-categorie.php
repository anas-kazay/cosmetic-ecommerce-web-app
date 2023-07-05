<?php
session_start();
include("includes/db.php");
if(isset($_POST['registerbtn']))
{
    $heading = $_POST['titre'];
    $content = $_POST['content'];
    

    


            $query = "INSERT INTO categories (cat_title,cat_desc) 
            VALUES ('$heading','$content')";
            $_SESSION['anas']=$query;

            $query_run = mysqli_query($db, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: categories.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: categories.php');  
       
            }

}
?>