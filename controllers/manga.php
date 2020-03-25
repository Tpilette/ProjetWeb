<?php 
require 'models/manga.php';

if (!REQ_TYPE_ID) {

    $mangas = getMangas();
    include 'views/mangas.php';
} else {
    $title = str_replace("%20", " ", REQ_TYPE_ID);
    $manga = getMangaById($title);
    var_dump($manga);
    include 'views/mangaDetail.php';
}


?>