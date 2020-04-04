<?php
require 'manga.php';

class Panier {   

    public function getShoppingCartContent($listItem){

        $list = [];
        $total = 0;
        foreach ($listItem as $item) {
         $manga = Manga::getMangaById($item);
         $total += $manga->prix;
         array_push($list,$manga);
        }
        $_SESSION['totalPanier'] = $total;
        return $list;
    }

    public function addToCart($mangaId){

        if(!in_array($mangaId,$_SESSION['shoppingCart'])){
            array_push($_SESSION['shoppingCart'],$mangaId);

        }
        else{
            $errorMessage = "Cet article est déjà dans votre panier.";
        }
    }


    public function removefromCart($mangaId){

        $cart = $_SESSION['shoppingCart'];

        $_SESSION['shoppingCart'] = array_diff($cart,[$mangaId]);

    }
    
}



?>
