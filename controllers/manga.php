<?php 
    require 'models/manga.php';
    $title="Neko-Shop";
    include 'views/includes/header.php';

    //navbar basée sur le role
    if(!empty($_SESSION['login'])){
        if($_SESSION['role'] == USER)
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

    // affichage de tout les mangas si pas d'id défini
    if (!REQ_TYPE_ID) {

        $mangas = Manga::getMangas();
        include 'views/mangas.php';
    } 
    else {

        $manga = Manga::getMangaById(REQ_TYPE_ID);
        if($_SESSION['role'] == USER)
        {
            include 'views/mangaDetail.php';     
        }
        else
        {
            include 'views/mangaDetail_admin.php';
        }     
                 
    }
    
    include 'views/includes/content.php';
    include 'views/includes/footer.php';
?>