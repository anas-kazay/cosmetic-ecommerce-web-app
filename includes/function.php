<?php
$db = new mysqli("localhost","root","","beautifulLady");



function getProduct(){
    global $db;

    $get_product="select * from products";
    $run_product= mysqli_query($db,$get_product);
    while($row_product= mysqli_fetch_array($run_product)){
        $product_id= $row_product['product_id'];
        $product_title= $row_product['product_title'];
        $product_price= $row_product['product_price'];
        $product_image= $row_product['product_image'];
        $product_detail_link=$row_product['product_detail_link'];

        echo "
        <div class='col-md-6 col-lg-3 ftco-animate'>

            <div class='product'>
              <a href='$product_detail_link?product_id=$product_id' class='img-prod'><img class='img-fluid' src='images/$product_image' />
                <div class='overlay'></div>
              </a>
              <div class='text py-3 pb-4 px-3 text-center'>
                <h3><a href='$product_detail_link?product_id=$product_id'>$product_title</a></h3>
                <div class='d-flex'>
                  <div class='pricing'>
                    <p class='price'><span class='price-sale'>$product_price.00DH</span></p>
                  </div>
                </div>
                <div class='bottom-area d-flex px-3'>
                  <div class='m-auto d-flex'>
                    <a href='$product_detail_link?product_id=$product_id' class='add-to-cart d-flex justify-content-center align-items-center text-center'>
                      <span><i class='ion-ios-menu'></i></span>
                    </a>
                    <a href='#' class='buy-now d-flex justify-content-center align-items-center mx-1'>
                      <span><i class='ion-ios-cart'></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
         ";
    }
}

function getProductCategories(){

    global $db;
 
    $get_product_cats="select * from product_categories";
              $run_product_cats= mysqli_query($db,$get_product_cats);
              
              while($row_product_cats=mysqli_fetch_array($run_product_cats)){
                $product_categ_id=$row_product_cats['p_cat_id'];
                $product_categ_title=$row_product_cats['p_cat_title'];
                
                    echo "
                <li>
                <a  href='$_SERVER[PHP_SELF]?product_categ=$product_categ_id'? class='active'>$product_categ_title</a>
                </li>
                ";
                
            }
}
              
function getArganeProducts(){
    global $db;

    $get_product="SELECT * FROM products WHERE categ_id=1 ";
    $run_product= mysqli_query($db,$get_product);
    while($row_product= mysqli_fetch_array($run_product)){
        $product_id= $row_product['product_id'];
        $product_title= $row_product['product_title'];
        $product_price= $row_product['product_price'];
        $product_image= $row_product['product_image'];
        $product_detail_link=$row_product['product_detail_link'];

        echo "
        <div class='col-md-6 col-lg-3 ftco-animate'>

            <div class='product'>
              <a href='$product_detail_link?product_id=$product_id' class='img-prod'><img class='img-fluid' src='images/$product_image' />
                <div class='overlay'></div>
              </a>
              <div class='text py-3 pb-4 px-3 text-center'>
                <h3><a href='$product_detail_link?product_id=$product_id'>$product_title</a></h3>
                <div class='d-flex'>
                  <div class='pricing'>
                    <p class='price'><span class='price-sale'>$product_price.00DH</span></p>
                  </div>
                </div>
                <div class='bottom-area d-flex px-3'>
                  <div class='m-auto d-flex'>
                    <a href='$product_detail_link?product_id=$product_id' class='add-to-cart d-flex justify-content-center align-items-center text-center'>
                      <span><i class='ion-ios-menu'></i></span>
                    </a>
                    <a href='#' class='buy-now d-flex justify-content-center align-items-center mx-1'>
                      <span><i class='ion-ios-cart'></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
         ";
    }

}

function getAmandeProducts(){
    global $db;

    $get_product="SELECT * FROM products WHERE cat_id=2 ";
    $run_product= mysqli_query($db,$get_product);
    while($row_product= mysqli_fetch_array($run_product)){
        $product_id= $row_product['product_id'];
        $product_title= $row_product['product_title'];
        $product_price= $row_product['product_price'];
        $product_image= $row_product['product_img1'];
        //$product_detail_link=$row_product['product_detail_link'];

        echo "
        <div class='col-md-6 col-lg-3 ftco-animate'>

            <div class='product'>
              <a href='?product_id=$product_id' class='img-prod'><img class='img-fluid' src='images/$product_image' />
                <div class='overlay'></div>
              </a>
              <div class='text py-3 pb-4 px-3 text-center'>
                <h3><a href='?product_id=$product_id'>$product_title</a></h3>
                <div class='d-flex'>
                  <div class='pricing'>
                    <p class='price'><span class='price-sale'>$product_price.00DH</span></p>
                  </div>
                </div>
                <div class='bottom-area d-flex px-3'>
                  <div class='m-auto d-flex'>
                    <a href='?product_id=$product_id' class='add-to-cart d-flex justify-content-center align-items-center text-center'>
                      <span><i class='ion-ios-menu'></i></span>
                    </a>
                    <a href='#' class='buy-now d-flex justify-content-center align-items-center mx-1'>
                      <span><i class='ion-ios-cart'></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
         ";
    } 
}

function getFigueProducts(){
    global $db;

    $get_product="SELECT * FROM products WHERE categ_id=3 ";
    $run_product= mysqli_query($db,$get_product);
    while($row_product= mysqli_fetch_array($run_product)){
        $product_id= $row_product['product_id'];
        $product_title= $row_product['product_title'];
        $product_price= $row_product['product_price'];
        $product_image= $row_product['product_image'];
        $product_detail_link=$row_product['product_detail_link'];

        echo "
        <div class='col-md-6 col-lg-3 ftco-animate'>

            <div class='product'>
              <a href='$product_detail_link?product_id=$product_id' class='img-prod'><img class='img-fluid' src='images/$product_image' />
                <div class='overlay'></div>
              </a>
              <div class='text py-3 pb-4 px-3 text-center'>
                <h3><a href='$product_detail_link?product_id=$product_id'>$product_title</a></h3>
                <div class='d-flex'>
                  <div class='pricing'>
                    <p class='price'><span class='price-sale'>$product_price.00DH</span></p>
                  </div>
                </div>
                <div class='bottom-area d-flex px-3'>
                  <div class='m-auto d-flex'>
                    <a href='$product_detail_link?product_id=$product_id' class='add-to-cart d-flex justify-content-center align-items-center text-center'>
                      <span><i class='ion-ios-menu'></i></span>
                    </a>
                    <a href='#' class='buy-now d-flex justify-content-center align-items-center mx-1'>
                      <span><i class='ion-ios-cart'></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
         ";
    } 
}

function getArganeCategoriesProduct(){
   global $db;

              if(isset($_GET['product_categ'])){
            
                $product_categ_id=$_GET['product_categ'];
                echo "<h1>hi there".$product_categ_id."</h1>";
                $get_product_categ="SELECT * FROM product_categories WHERE p_cat_id= '$product_categ_id'";
                $run_product_categ= mysqli_query($db,$get_product_categ);
                $row_product_categ=mysqli_fetch_array($run_product_categ);
                $product_categ_title = $row_product_categ['p_cat_title'];
                $product_categ_desc=$row_product_categ['p_cat_desc'];
                if ($product_categ_id==0){
                    getArganeProducts();
                } else{
                $get_products ="SELECT * FROM products WHERE p_cat_id='$product_categ_id' AND cat_id=1";
                $run_products = mysqli_query($db,$get_products);
                $count = mysqli_num_rows($run_products);
                if($count==0){
                    echo " <div class='alert alert-info ' >
                   <strong>Info!</strong> Il n'existe aucun produit dans cette categorie.
                 </div>";
               }
               else{
                   echo " <div class='alert alert-success ' style='height:50%; background:#03a696; color:white;margin-left:0; margin-right:0;' >
                   <strong>$product_categ_title</strong><br>
                   $product_categ_desc
                 </div>";
               }
               
        
                    while($row_products=mysqli_fetch_array($run_products)){
                        
                        $product_id= $row_products['product_id'];
                        $product_title= $row_products['product_title'];
                        $product_price= $row_products['product_price'];
                        $product_image= $row_products['product_image'];
                        $product_detail_link=$row_products['product_detail_link'];
                        echo "
                <div class='col-md-6 col-lg-3 ftco-animate'>
        
                    <div class='product'>
                      <a href='$product_detail_link?product_id=$product_id' class='img-prod'><img class='img-fluid' src='images/$product_image' />
                        <div class='overlay'></div>
                      </a>
                      <div class='text py-3 pb-4 px-3 text-center'>
                        <h3><a href='$product_detail_link?product_id=$product_id'>$product_title</a></h3>
                        <div class='d-flex'>
                          <div class='pricing'>
                            <p class='price'><span class='price-sale'>$product_price.00DH</span></p>
                          </div>
                        </div>
                        <div class='bottom-area d-flex px-3'>
                          <div class='m-auto d-flex'>
                            <a href='$product_detail_link?product_id=$product_id' class='add-to-cart d-flex justify-content-center align-items-center text-center'>
                              <span><i class='ion-ios-menu'></i></span>
                            </a>
                            <a href='#' class='buy-now d-flex justify-content-center align-items-center mx-1'>
                              <span><i class='ion-ios-cart'></i></span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 ";
                     
                    
                }
                
            }
            }
                
                
            
}

function getAmandeCategoriesProduct(){

    global $db;
              if(isset($_GET['product_categ'])){
                
                $product_id=$_GET['product_categ'];


                
                  if ($product_id==0){
                    
                    getAmandeProducts();
                } else{
                  $sql="SELECT * FROM product_categories WHERE p_cat_id= '$product_id'";
                  $categories= mysqli_query($db,$sql);
                  $allCategories=mysqli_fetch_array($categories);
                  $product_categ_title = $allCategories['p_cat_title'];
                  $product_categ_desc=$allCategories['p_cat_desc'];
                $get_products ="SELECT * FROM products WHERE p_cat_id='$product_id' AND cat_id=2";
                $run_products = mysqli_query($db,$get_products);
                $count = mysqli_num_rows($run_products);
               
                if($count==0){
                    echo " <div class='alert alert-info ' >
                   <strong>Info!</strong> Il n'existe aucun produit dans cette categorie.
                 </div>";
               }
               else{
                   echo " <div class='alert alert-success ' style='height:50%; background:#03a696; color:white; margin-left:0; margin-right:0;' >
                   <strong>$product_categ_title</strong><br>
                   $product_categ_desc
                 </div>";
               }
               
        
                    while($row_products=mysqli_fetch_array($run_products)){
                        
                        $product_id= $row_products['product_id'];
                        $product_title= $row_products['product_title'];
                        $product_price= $row_products['product_price'];
                        $product_image= $row_products['product_img1'];
                       // $product_detail_link=$row_products['product_detail_link'];
                        echo "
                <div class='col-md-6 col-lg-3 ftco-animate'>
        
                    <div class='product'>
                      <a href='?product_id=$product_id' class='img-prod'><img class='img-fluid' src='images/$product_image' />
                        <div class='overlay'></div>
                      </a>
                      <div class='text py-3 pb-4 px-3 text-center'>
                        <h3><a href='?product_id=$product_id'>$product_title</a></h3>
                        <div class='d-flex'>
                          <div class='pricing'>
                            <p class='price'><span class='price-sale'>$product_price.00DH</span></p>
                          </div>
                        </div>
                        <div class='bottom-area d-flex px-3'>
                          <div class='m-auto d-flex'>
                            <a href='?product_id=$product_id' class='add-to-cart d-flex justify-content-center align-items-center text-center'>
                              <span><i class='ion-ios-menu'></i></span>
                            </a>
                            <a href='#' class='buy-now d-flex justify-content-center align-items-center mx-1'>
                              <span><i class='ion-ios-cart'></i></span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 ";
                     
                    
                }
            }
                

                
                
                
            }
                
                
}

function getFigueCategoriesProduct(){
    
    global $db;
              if(isset($_GET['product_categ'])){
             
                $product_categ_id=$_GET['product_categ'];
                $get_product_categ="SELECT * FROM product_categories WHERE product_categ_id= '$product_categ_id'";
                $run_product_categ= mysqli_query($db,$get_product_categ);
                $row_product_categ=mysqli_fetch_array($run_product_categ);
                $product_categ_title = $row_product_categ['product_categ_title'];
                $product_categ_desc=$row_product_categ['product_categ_desc'];
                if ($product_categ_id==0){
                    getFigueProducts();
                } else{
                $get_products ="SELECT * FROM products WHERE product_categ_id='$product_categ_id' AND categ_id=3";
                $run_products = mysqli_query($db,$get_products);
                $count = mysqli_num_rows($run_products);
               
                if($count==0){
                    echo " <div class='alert alert-info ' >
                   <strong>Info!</strong> Il n'existe aucun produit dans cette categorie.
                 </div>";
               }
               else{
                   echo " <div class='alert alert-success ' style='height:50%; background:#03a696; color:white; margin-left:0; margin-right:0;' >
                   <strong>$product_categ_title</strong><br>
                   $product_categ_desc
                 </div>";
               }
               
        
                    while($row_products=mysqli_fetch_array($run_products)){
                        
                        $product_id= $row_products['product_id'];
                        $product_title= $row_products['product_title'];
                        $product_price= $row_products['product_price'];
                        $product_image= $row_products['product_image'];
                        $product_detail_link=$row_products['product_detail_link'];
                        echo "
                <div class='col-md-6 col-lg-3 ftco-animate'>
        
                    <div class='product' >
                      <a href='$product_detail_link?product_id=$product_id' class='img-prod'><img class='img-fluid' src='images/$product_image' />
                        <div class='overlay'></div>
                      </a>
                      <div class='text py-3 pb-4 px-3 text-center'>
                        <h3><a href='$product_detail_link?product_id=$product_id'>$product_title</a></h3>
                        <div class='d-flex'>
                          <div class='pricing'>
                            <p class='price'><span class='price-sale'>$product_price.00DH</span></p>
                          </div>
                        </div>
                        <div class='bottom-area d-flex px-3'>
                          <div class='m-auto d-flex'>
                            <a href='$product_detail_link?product_id=$product_id' class='add-to-cart d-flex justify-content-center align-items-center text-center'>
                              <span><i class='ion-ios-menu'></i></span>
                            </a>
                            <a href='#' class='buy-now d-flex justify-content-center align-items-center mx-1'>
                              <span><i class='ion-ios-cart'></i></span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 ";
                     
                    
                }
            }
            }
                
}

function randomProducts(){
  global $db;

    $get_product="SELECT * FROM products ORDER BY rand()  ";
    $run_product= mysqli_query($db,$get_product);
    while($row_product= mysqli_fetch_array($run_product)){
        $product_id= $row_product['product_id'];
        $product_title= $row_product['product_title'];
        $product_price= $row_product['product_price'];
        $product_image= $row_product['product_img'];
        $categorie = $row_product['cat_id'];
        //$product_detail_link=$row_product['product_detail_link'];


         echo "<div class=\"col-md-3 col-sm-6 $categorie item\">
         <div class=\"product-grid\">
             <div class=\"product-image\">
                 <a class=\"image\" href='product.php?product_id=$product_id' class='img-prod' id='$product_id' value='$product_title'>
                     <img class=\"pic-1\" src=\"images/products/$product_image\">
                 </a>
                 <ul class=\"product-links\">
                     <li><a  onclick=\"cart('$product_id')\"><i class=\"fa fa-shopping-bag\"></i> Add to cart</a></li>
                 </ul>
             </div>
             <div class=\"product-content\">
                 <h3 class=\"title\"  id='title$product_id'>$product_title</h3>
                 <div class=\"price\" id='price$product_id' value='$product_price'>$product_price DH</div>
             </div>
         </div>
     </div>";
    }

}


function bestProducts(){
  global $db;

  $get_product="SELECT * FROM products ORDER BY rand() LIMIT 4 ";
  $run_product= mysqli_query($db,$get_product);
  while($row_product= mysqli_fetch_array($run_product)){
      $product_id= $row_product['product_id'];
      $product_title= $row_product['product_title'];
      $product_price= $row_product['product_price'];
      $product_image= $row_product['product_img'];
      $categorie = $row_product['cat_id'];
      //$product_detail_link=$row_product['product_detail_link'];


       echo "<div class=\"col-md-3 col-sm-6 $categorie item\">
       <div class=\"product-grid\">
           <div class=\"product-image\">
               <a class=\"image\" href='product.php?product_id=$product_id' class='img-prod' id='$product_id' value='$product_title'>
                   <img class=\"pic-1\" src=\"images/products/$product_image\">
               </a>
               <ul class=\"product-links\">
                   <li><a  onclick=\"cart('$product_id')\"><i class=\"fa fa-shopping-bag\"></i> Add to cart</a></li>
               </ul>
           </div>
           <div class=\"product-content\">
               <h3 class=\"title\"  id='title$product_id'>$product_title</h3>
               <div class=\"price\" id='price$product_id' value='$product_price'>$product_price DH</div>
           </div>
       </div>
   </div>";
  }



}

function randomDetailProducts(){
  
    global $db;
  
      $get_product="SELECT * FROM products ORDER BY rand() LIMIT 4 ";
      $run_product= mysqli_query($db,$get_product);
      while($row_product= mysqli_fetch_array($run_product)){
          $product_id= $row_product['product_id'];
          $product_title= $row_product['product_title'];
          $product_price= $row_product['product_price'];
          $product_image= $row_product['product_image'];
          $product_detail_link=$row_product['product_detail_link'];
  
          echo "
          <div class='col-md-6 col-lg-3 ftco-animate'>
  
              <div class='product'>
                <a href='$product_detail_link?product_id=$product_id' class='img-prod'><img class='img-fluid' src='images/$product_image' />
                  <div class='overlay'></div>
                </a>
                <div class='text py-3 pb-4 px-3 text-center'>
                  <h3><a href='$product_detail_link?product_id=$product_id'>$product_title</a></h3>
                  <div class='d-flex'>
                    <div class='pricing'>
                      <p class='price'><span class='price-sale'>$product_price.00DH</span></p>
                    </div>
                  </div>
                  <div class='bottom-area d-flex px-3'>
                    <div class='m-auto d-flex'>
                      <a href='$product_detail_link?product_id=$product_id' class='add-to-cart d-flex justify-content-center align-items-center text-center'>
                        <span><i class='ion-ios-menu'></i></span>
                      </a>
                      <a href='#' class='buy-now d-flex justify-content-center align-items-center mx-1'>
                        <span><i class='ion-ios-cart'></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           ";
      }
}

function insertProduct(){
    global $db;
    if(isset($_POST['ajouter']))
    {
    
    $product_title = $_POST['product_title'];
    $product_categ = $_POST['product_categ'];
    $categs = $_POST['categs'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_detail_link = $_POST['product_detail_link'];
    
    $product_image = $_FILES['product_image']['name'];
    $temp_name = $_FILES['product_image']['tmp_name'];
    move_uploaded_file($temp_name,'images/$product_image');
   
    $stmt = $db->prepare("INSERT INTO products (product_categ_id,categ_id,product_title,product_price,product_image,product_desc,product_detail_link) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("iisdsss",$product_categ,$categs,$product_title,$product_price,$product_image,$product_desc,$product_detail_link);
    if($stmt->execute()==true){  
        echo "<script>alert('Le produit a été inséré avec succès')</script>";
        echo "<script>window.open('admin_produits.php','_self')</script>"; 
    }
    else{
        echo "Error: " . $stmt . "<br>" . $db->error;
    }
    $stmt->close();
    $db->close();
    }

    if(isset($_POST['supprimer'])){
     $product= $_POST['product_title'];
    $query="DELETE FROM products WHERE product_title='$product'";
    $run_query=mysqli_query($db,$query);

    if($run_query){
      echo "<script>alert('Le produit a été supprimé avec succès')</script>";
      echo "<script>window.open('admin_produits.php','_self')</script>"; 
    }
    
    }
}

function getRealIpUser(){
    
  switch(true){
          
          case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
          case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
          case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
          
          default : return $_SERVER['REMOTE_ADDR'];
          
  }
}

function items(){
  global $db;
  $ip_add = getRealIpUser();  
  $get_items="SELECT * FROM card WHERE ip_add='$ip_add'";
  //$run_items=mysqli_query($db,$get_items);
  //$count_items=mysqli_num_rows($run_items);
  echo 1;
}

function orders(){
  global $db; 
  $total=0;
  $flag=1;
  for($i=0;$i<count($_SESSION['name']);$i++){
    $j = $i+1;
  $product_id = $_SESSION['idProduit'][$i];
  $product_image = substr($_SESSION['src'][$i],39);
  $product_title=$_SESSION['name'][$i];
  $get_price = $_SESSION['price'][$i];
  $quatity = $_SESSION['quantity'][$i];
      
            
  echo "
  <tr>
  <td class='product-remove'>
  <button id='".$product_id."'  name='delete' onclick=\"remove('$product_id')\"><span class='ion-ios-close'></span></button>
  <button id='".$product_id."'  name='delete' onclick=\"plus('$product_id')\"><span class='ion:ion-ios-add'>+</span></button>
  </td>
  <td> 
  $j
  </td>
  <td style=\"width:130px;\"><img src=\"./images/products/$product_image\" alt=\"$product_image\" style=\"width:100px;\"></td>
  <td>
  $product_title
  </td>
<td>
$quatity
</td>
  <td>
  $get_price 
  </td>
  
  </tr>
  ";
}
}







function commandes(){
  global $db;
   
  $select_commande = "SELECT * FROM orders where userId in (select userId from users where userEmail='".$_SESSION['user_email']."')";
  $run_commande=mysqli_query($db,$select_commande);
  $i=0;
  while ($record=mysqli_fetch_array($run_commande)){
    $i++;
  $order_id=$record['order_id'];
  $total_price=$record['total_price'];
  $status=$record['order_status'];
  $date=$record['order_date'];
  $adresse=$record['adresse'];
  $city=$record['city'];
  $zipCode=$record['zipCode'];
  switch($status){
    case 0:
      $s='en cours de traitement';
      break;
    case 1:
      $s='traite';
      break;
    case 2:
      $s='complete';
      break;
    case 3:
      $s='rejete';
      break;
  }
 
            
  echo "
  <tr>
  <td> 
  $i
  </td>
  <td>
  $date
  </td>
  <td>
  $adresse <br> $city <br> $zipCode
  </td>
  <td>
  $total_price DH
  </td>
  <td>
  $s
  </td>
  
  
  </tr>
  ";
}



}

function admin_commandes(){
  global $db;
   
  $select_commande = "select * from users JOIN orders on users.userId=orders.userId JOIN order_items on order_items.order_id = orders.id JOIN products on order_items.item_id=products.product_id group by id order BY id desc; ";
  $run_commande=mysqli_query($db,$select_commande);
  while ($record=mysqli_fetch_array($run_commande)){
  $order_id=$record['id'];
  $userName = $record['userName'];
  $total_price=$record['total_price'];
  $status=$record['order_status'];
  $date=$record['order_date'];
  $adresse=$record['adresse'];
  $city=$record['city'];
  $zipCode=$record['zipCode'];
  $telephone = $record['telephone'];
  $product_title = $record['product_title'];
  $sql = "SELECT product_title,sell_price,quantity from products join order_items on products.product_id = order_items.item_id JOIN orders on orders.id = order_items.order_id where order_id=$order_id;";
  $run_commande1=mysqli_query($db,$sql);
  $products = '';
  while ($record1=mysqli_fetch_array($run_commande1)){
    $products .= $record1['quantity']."x ".$record1['product_title']." : ".$record1['sell_price']."DH<br>";
  }
  switch($status){
    case 0:
      $s='en cours de traitement';
      break;
    case 1:
      $s='traite';
      break;
    case 2:
      $s='complete';
      break;
    case 3:
      $s='rejete';
      break;
  }
 
            
  echo "
  <tr>
  <td> 
  $order_id
  </td>
  <td>
  $userName
  </td>
  <td>
  $products
  </td>
  <td>
  $total_price DH
  </td>
  <td>
  $date
  </td>
  <td>
  $telephone
  </td>
  <td>
  $adresse <br> $city <br> $zipCode
  </td>
  <td>
  
  <select id='$order_id' value='$status' onchange=\"change('$order_id')\">
  <option id='0' value='0' ";if($status==0) echo "selected"; echo ">en cours de traitement</option>
  <option id='1' value='1' ";if($status==1) echo "selected"; echo ">traité</option>
  <option id='2' value='2' ";if($status==2) echo "selected"; echo ">complète</option>
  <option id='3' value='3' ";if($status==3) echo "selected"; echo ">rejeté</option>
  </select>
  </td>
  
  </tr>
  ";
}
}


function total_price(){

}


function slider(){
  global $db;
  $sql = "select *  from slider";
                $run_product= mysqli_query($db,$sql);
                while($row_product= mysqli_fetch_array($run_product)){
                    $id= $row_product['id'];
                    $photo = $row_product['photo'];
                    $heading= $row_product['heading'];
                    $content = $row_product['content'];
                    $button_text = $row_product['button_text'];
                    $button_url = $row_product['button_url'];
                    echo "<div class=\"slider-item\" style=\"background-image: url(images/sliders/$photo);\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row slider-text justify-content-center align-items-center\" data-scrollax-parent=\"true\">

      <div class=\"col-md-12 ftco-animate text-center\">
        <h1 class=\"mb-2\">$heading</h1>
        <h2 class=\"subheading mb-4\">$content
  </h2>
        <p><a href=\"$button_url\" class=\"btn btn-primary\">$button_text</a></p>
      </div>

    </div>
  </div>
</div>";
                }
  
}


function categories(){
  global $db;
  $sql = "select * from categories where cat_id in (select cat_id from products)";
                $run_product= mysqli_query($db,$sql);
                while($row_product= mysqli_fetch_array($run_product)){
                  $cat_id= $row_product['cat_id'];
                  $cat_title= $row_product['cat_title'];
                  echo "<button class=\"btn\" data-filter=\".$cat_id\">$cat_title</button>";
                }
}

function slider_table(){

}
 
//$db->close();

?>