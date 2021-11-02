<?php
$db = new mysqli("localhost","root","","aynou-shop");



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
                $product_categ_id=$row_product_cats['product_categ_id'];
                $product_categ_title=$row_product_cats['product_categ_title'];
                
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

    $get_product="SELECT * FROM products WHERE categ_id=2 ";
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
                $get_product_categ="SELECT * FROM product_categories WHERE product_categ_id= '$product_categ_id'";
                $run_product_categ= mysqli_query($db,$get_product_categ);
                $row_product_categ=mysqli_fetch_array($run_product_categ);
                $product_categ_title = $row_product_categ['product_categ_title'];
                $product_categ_desc=$row_product_categ['product_categ_desc'];
                if ($product_categ_id==0){
                    getArganeProducts();
                } else{
                $get_products ="SELECT * FROM products WHERE product_categ_id='$product_categ_id' AND categ_id=1";
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
             
                $product_categ_id=$_GET['product_categ'];
                $get_product_categ="SELECT * FROM product_categories WHERE product_categ_id= '$product_categ_id'";
                $run_product_categ= mysqli_query($db,$get_product_categ);
                $row_product_categ=mysqli_fetch_array($run_product_categ);
                $product_categ_title = $row_product_categ['product_categ_title'];
                $product_categ_desc=$row_product_categ['product_categ_desc'];
                if ($product_categ_id==0){
                    getAmandeProducts();
                } else{
                $get_products ="SELECT * FROM products WHERE product_categ_id='$product_categ_id' AND categ_id=2";
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

    $get_product="SELECT * FROM products ORDER BY rand() LIMIT 8 ";
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
  $run_items=mysqli_query($db,$get_items);
  $count_items=mysqli_num_rows($run_items);
  echo $count_items;
}

function orders(){
    global $db;
    $ip_add = getRealIpUser();  
    $total=0;
    $select_cart="SELECT * FROM card WHERE ip_add='$ip_add'";
    $run_cart=mysqli_query($db,$select_cart);
    while ($record=mysqli_fetch_array($run_cart)){
    $product_id=$record['product_id'];
    $product_title=$record['product_title'];
    $quantity=$record['quantity'];
    $date=$record['date_order'];
    $get_price = "select * from products where product_id='$product_id'";
        
        $run_price = mysqli_query($db,$get_price);
        
        while($row_price=mysqli_fetch_array($run_price)){
            
            $total = $row_price['product_price']*$quantity;
           
        }
              
    echo "
    <tr>
    <td class='product-remove'>
    <form method='POST' action='$_SERVER[PHP_SELF]'>
    <button id='delete'  name='delete'><span class='ion-ios-close'></span></button>
    </form>
    </td>
    <td> 
    $product_id
    </td>
    <td>
    $product_title
    </td>
    <td>
    $quantity
    </td>
    <td>
    $total DH
    </td>
    <td>
    $date
    </td>
    
    </tr>
    ";
  }
  if(isset($_POST['delete'])){
    $delete=$_POST['delete'];
   
                            
      $delete_product = "DELETE FROM card WHERE product_id='$product_id'";
      
      $run_delete = mysqli_query($db,$delete_product);
      
      if($run_delete){
          
        echo "<script>window.open('orders.php','_self')</script>";

      
  }
  }
}

function commandes(){
  global $db;
   
  $select_commande="SELECT * FROM commande";

  $run_commande=mysqli_query($db,$select_commande);

  while ($record=mysqli_fetch_array($run_commande)){
  $product_id=$record['product_id'];
  $product_title=$record['product_title'];
  $quantity=$record['quantity'];
  $date=$record['date_commande'];
  $total=$record['totale'];
  $user_name=$record['user_name'];
  $methode=$record['methode_payement'];
 
            
  echo "
  <tr>
  <td> 
  $product_id
  </td>
  <td>
  $user_name
  </td>
  <td>
  $product_title
  </td>
  <td>
  $quantity
  </td>
  <td>
  $total DH
  </td>
  <td>
  $methode
  </td>
  <td>
  $date
  </td>
  
  </tr>
  ";
}


if(isset($_POST['delete'])){
  $delete=$_POST['delete'];
 
                          
    $delete_product1 = "DELETE FROM card WHERE product_id='$product_id'";
    $delete_product2 = "DELETE FROM commande WHERE product_id='$product_id'";
    
    $run_delete1 = mysqli_query($db,$delete_product1);
    $run_delete2 = mysqli_query($db,$delete_product2);
    
    if($run_delete1 && $run_delete2){
        {
      echo "<script>window.open('orders.php','_self')</script>";
        }
    
}
}
}

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
 


?>