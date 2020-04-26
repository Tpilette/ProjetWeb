<?php 
    require 'models/manga.php';
    $title="Neko-Shop";
    include 'views/includes/header.php';
    include 'views/includes/navbarAdmin.php';



    if(!REQ_ACTION){

        if(!REQ_TYPE_ID){
            $mangas = Manga::getMangas();
            include 'views/mangas_admin.php';
        }
        else{
            $manga = Manga::getMangaById(REQ_TYPE_ID);
            include 'views/mangaDetail_admin.php';
        }
        
    }
    elseif(REQ_ACTION == 'add'){

        if(!empty($_POST)){

            $manga = Manga::create($_POST['auteur'],$_POST['editeur'],$_POST['genre'],$_POST['prix'],$_POST['title'],$_POST['volume'],$_FILES);
            include 'views/mangaDetail_admin.php';
        }
        else{
            include 'views/manga_add.php';
        }
        
    }
    elseif(REQ_ACTION == 'edit') {

        if(!REQ_TYPE_ID){

            $manga = Manga::edit($_POST['id'],$_POST['auteur'],$_POST['editeur'],$_POST['genre'],$_POST['prix'],$_POST['title'],$_POST['volume']);
            include 'views/manga_edit.php';
        }
        else{
            $manga = Manga::getMangaById(REQ_TYPE_ID);
            include 'views/manga_edit.php';
        }
    }
    elseif(REQ_ACTION == 'delete'){

        Manga::Delete(REQ_TYPE_ID);
        $mangas = Manga::getMangas();
        header("Location: ".ROOT_PATH."mangaAdmin");
        
    }
        
    
    
    include 'views/includes/content.php';
    include 'views/includes/footer.php';
?>