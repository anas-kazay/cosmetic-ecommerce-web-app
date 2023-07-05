<?php
session_start();
$total = 0;
        for($i=0;$i<count($_SESSION['quantity']);$i++){
          $total+=intval($_SESSION['price'][$i])*intval($_SESSION['quantity'][$i]);
          echo $_SESSION['price'][$i] ."----".$_SESSION['quantity'][$i]."---";
        }
        $_SESSION['q'] = count($_SESSION['quantity']);
        $qq=intval($total);
      
    
    $c = array_sum($_SESSION['quantity']);
    echo "<br>$c";
    ?>