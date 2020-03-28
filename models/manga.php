<?php
require 'database.php';

class Manga {
    public $Id;
    public $Title;
    public $Editeur;
    public $Volume;
    public $Prix;
    public $Auteur;
    public $ImageData;


        // retourne l'ensemble des données.
    public function getMangas() {

        $response = getDB()->prepare('SELECT * FROM manga');
        $response->execute();
        $mangas = $response->fetchAll(PDO::FETCH_CLASS, "Manga");

        $response->closeCursor();
        return $mangas;
    }


    // Retourne un manga sur base d'un filtre.
    public function getMangaById($id) {

        $response = getDB()->prepare('SELECT * FROM manga WHERE id = :id');
        $response->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Manga');
        $response->execute([':id' => $id]);
        $manga = $response->fetch();

        $response->closeCursor();

        return $manga;    
    }

}
?>
