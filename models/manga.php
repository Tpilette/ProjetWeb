<?php
require 'database.php';
class Manga {
    public $Id;
    public $ISBN;
    public $Title;
    public $Editeur;
    public $Volume;
    public $Prix;
    public $Auteur;
}


// La fonction getArticles retourne l'ensemble des données.
function getMangas() {

    $response = getDB()->prepare('SELECT * FROM manga');
    $response->execute();
    $mangas = $response->fetchAll(PDO::FETCH_CLASS, "Manga");

    $response->closeCursor();

    return $mangas;
}


// La fonction getArticle retourne un article sur base d'un filtre.
function getMangaById($id) {

    $mangas = getMangas();
    foreach ($mangas as $manga) {
        
        if (strtolower($id) == strtolower($manga->Title)) {
           return $manga;
        }
    }
    return ' ';
}

?>
