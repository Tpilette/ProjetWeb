<?php 
require 'models/manga.php';

if (!REQ_TYPE_ID) {

    $mangas = getMangas();
    include 'views/mangas.php';
} else {
    $manga = getMangaById(REQ_TYPE_ID);
    include 'views/mangaDetail.php';
}


?>