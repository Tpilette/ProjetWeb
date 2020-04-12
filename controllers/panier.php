<?php 

    require 'models/panier.php';
    $title="Mon panier";
    include 'views/includes/header.php';
    include 'views/includes/navbarUser.php';

    if(REQ_ACTION == "add"){

        Panier::addToCart(REQ_TYPE_ID);
    }
    elseif (REQ_ACTION =="remove"){
        
        Panier::removefromCart(REQ_TYPE_ID);
    }



    if (count($_SESSION['shoppingCart']) < 1 ) {
        include 'views/panierVide.php';
    } 
    else {

        $list = Panier::getShoppingCartContent($_SESSION['shoppingCart']);
        include 'views/panier.php';
    }   

    include 'views/includes/content.php';
    include 'views/includes/footer.php';

?>