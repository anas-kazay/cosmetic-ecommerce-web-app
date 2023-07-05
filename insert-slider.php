<?php
session_start();
include("includes/db.php");
if(isset($_POST['registerbtn']))
{
    $heading = $_POST['titre'];
    $content = $_POST['content'];
    $button_text = $_POST['button_text'];
    $button_url = $_POST['button_url'];
    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];
    $ext = pathinfo( $path, PATHINFO_EXTENSION );
    $file_name = basename( $path, '.' . $ext );



    $pdo = new PDO("mysql:host=localhost;dbname=beautifullady", 'root', 'kazay-2011');
    $statement = $pdo->prepare("select max(id) from slider");
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row) {
        $ai_id=$row[0]+1;
    }
    if($ai_id==NULL){
        $ai_id = 1;
    }


    $final_name = 'slider-'.$ai_id.'.'.$ext;
    move_uploaded_file( $path_tmp, './images/sliders/'.$final_name );


    

    


            $query = "INSERT INTO slider (heading,content,button_text,button_url,photo) 
            VALUES ('$heading','$content','$button_text','$button_url','$final_name')";
            $_SESSION['anas']=$query;

            $query_run = mysqli_query($db, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: slider.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: slider.php');  
       
            }

}
?>