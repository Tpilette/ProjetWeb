<?php 

    require 'models/panier.php';
    $title="Mon panier";
    include 'views/includes/header.php';
    include 'views/includes/navbarUser.php';

    if(!empty($_POST['mangaId']) && $_POST['action'] =="add"){

        Panier::addToCart($_POST['mangaId']);
    }
    elseif (!empty($_POST['mangaId']) && $_POST['action'] =="remove"){
        
        Panier::removefromCart($_POST['mangaId']);
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