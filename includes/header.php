<?php
session_start();
include_once 'includes/function.php';
$email="admin@gmail.com";

?>

<html>
<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div   class="icon mr-2 d-flex justify-content-center align-items-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <span class="text">+212 641315913</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <span class="text">AynouShop@gmail.com</span>
                    </div>
                    <div  class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">3-5  jours de livraison &amp; les routeurs sont gratuits</span>
                    </div>

                    <?php
                     if(isset($_SESSION['user_email']) === 'admin@gmail.com'){
                    echo "
                    <a class='col-md pr-3 d-flex topper align-items-center text-lg-right nav-link dropdown-toggle' data-toggle='dropdown' style='color:white'>Espace Admin</a>
                    <div class='dropdown-menu' aria-labelledby='dropdown04'>
                     <a class='dropdown-item' href='admin_commandes.php' style='font-family: SFMono-Regular, Menlo, Monaco, Consolas';>Les commandes</a>
    
                	<a class='dropdown-item' href='admin_produits.php' style='font-family: SFMono-Regular, Menlo, Monaco, Consolas';>Gestion des produits</a>
               
                 </div>";
                     } 
                    else {
                         echo"
                        <a class='col-md pr-3 d-flex topper align-items-center text-lg-right nav-link dropdown-toggle' data-toggle='dropdown' style='color:white'>Mon Compte</a>
                        <div class='dropdown-menu' aria-labelledby='dropdown04'>
                        <a class='dropdown-item' href='user-account.php' style=font-family: SFMono-Regular, Menlo, Monaco, Consolas';>Mon Compte</a>
    
                        <a class='dropdown-item' href='orders.php' style=font-family: SFMono-Regular, Menlo, Monaco, Consolas';>Mes Commandes</a>
               
                        </div>";
                        }
               
               
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <a href="index.php"> <img class="logo" src="images/logo.png" style="width: 250px; height: 80px;"></a>
        <button  class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#ftco-nav"
            aria-controls="ftco-nav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Boutique</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="produits-argane.php?product_categ=0">Produits d'Argane</a>
                        <a class="dropdown-item" href="produits-amande.php?product_categ=0">Produits d'Amande</a>
                        <a class="dropdown-item" href="produits-figue.php?product_categ=0">Produits de Figue de barbarie</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a href="cooperative.php" class="nav-link">Coopératives</a>
                </li>
                 <li class="nav-item">
                   <a href="about.php" class="nav-link">À propos</a>
                 </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
               
                <li class="nav-item cta cta-colored">
                    <a href="orders.php" class="nav-link"><span class="icon-shopping_cart"></span>[<?php 
                      
                      if (!isset( $_SESSION['user_email'])){
                        echo "0";
                            }
                            else {
                                items();
                            }
                             ?>]</a>
                </li>
                <li>   
                      <?php
                    if (!isset( $_SESSION['user_email'])){
                        ?>
                        <form method='POST' action='authentification.php'>
                        <button name='connecter' type='submit' class='btn' style='font-size:12px; background-color:orange;margin:17px 0px 0px 50px; width:140px ;color:white'>
                       CONNECTER 
                        </button>
                        </form>
                        <?php
                   }
                   else{ ?>   
                   
                    <form method='POST' action='logout.php'>
                    <button name='deconnecter' type='submit' class='btn' style='font-size:12px; background-color:orange;margin:17px 0px 0px 50px; width:140px ;color:white'>
                    DECONNECTER 
                    </button>
                    </form>
                    <?php          
                }
                ?>
            
                </li>
              
            </ul>
        </div>
    </div>
</nav>

</html>
