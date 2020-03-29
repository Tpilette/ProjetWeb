<?php
require 'manga.php';

class Panier {   

    public function getShoppingCartContent($listItem){

        $list = [];
        foreach ($listItem as $item) {
         array_push($list,Manga::getMangaById($item));
        }

        return $list;
    }
}



?>
