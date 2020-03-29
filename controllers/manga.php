<?php 
    require 'models/manga.php';

    if(!empty($_SESSION['login']))
    {

        if (!REQ_TYPE_ID) {

            $mangas = Manga::getMangas();
            include 'views/mangas.php';
        } 
        else {

            $manga = Manga::getMangaById(REQ_TYPE_ID);
            var_dump($manga);
            include 'views/mangaDetail.php';
        }
    }
    else
    {
    
        if (!REQ_TYPE_ID) {

            $mangas = Manga::getMangas();
            include 'views/mangasAnonymous.php';
        } 
        else {

            $manga = Manga::getMangaById(REQ_TYPE_ID);
            var_dump($manga);
            include 'views/mangaDetailAnonymous.php';
        }   
    }
?>