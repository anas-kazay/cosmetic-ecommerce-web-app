<?php
include("includes/db.php");
if(isset($_POST['registerbtn']))
{
    $name = $_POST['name'];
    $product_categ = $_POST['product_categ'];
    $prix = $_POST['prix'];
    $product_desc = $_POST['product_desc'];
    $active = $_POST['active'];
    $path = $_FILES['product_image']['name'];
    $path_tmp = $_FILES['product_image']['tmp_name'];
    $ext = pathinfo( $path, PATHINFO_EXTENSION );
    $file_name = basename( $path, '.' . $ext );



    $pdo = new PDO("mysql:host=localhost;dbname=beautifullady", 'root', 'kazay-2011');
    $statement = $pdo->prepare("select max(product_id) from products");
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row) {
        $ai_id=$row[0]+1;
    }
    $ai_id++;


    $final_name = 'product-'.$ai_id.'.'.$ext;
    move_uploaded_file( $path_tmp, './images/products/'.$final_name );


    

    


            $query = "INSERT INTO products (cat_id,product_title,product_img,product_price,product_psp_price,product_desc,status) 
            VALUES ($product_categ,'$name','$final_name',$prix,$prix,'$product_desc','$active')";
            $query_run = mysqli_query($db, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: admin_produits.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: admin_produits.php');  
       
            }

}
?>