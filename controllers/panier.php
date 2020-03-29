<?php 

require 'models/panier.php';

    if (count($_SESSION['shoppingCart']) < 1 ) {
        include 'views/panier.php';
    } 
    else {

        $list = Panier::getShoppingCartContent($_SESSION['shoppingCart']);

        include 'views/panier.php';
    }   

?>