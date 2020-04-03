<?php 
    require 'models/manga.php';
    $title="Neko-Shop";
    include 'views/includes/header.php';

    if(!empty($_SESSION['login']))
    {
        if($_SESSION['role'] == 1)
        {
    
            include 'views/includes/navbarUser.php';
        }
        else
        {
            include 'views/includes/navbarAdmin.php';
        }
    }
    else
    {
        include 'views/includes/navbarAnonymous.php';
    
    }

    if (!REQ_TYPE_ID) {

        $mangas = Manga::getMangas();
        include 'views/mangas.php';
    } 
    else {

        $manga = Manga::getMangaById(REQ_TYPE_ID);
        var_dump($manga);
        include 'views/mangaDetail.php';
    }
    
    include 'views/includes/content.php';
    include 'views/includes/footer.php';
?>