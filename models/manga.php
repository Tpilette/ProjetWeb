<?php
require_once 'database.php';
require_once 'fileHandler.php';

class Manga {

    public $id;
    public $title;
    public $editeur;
    public $volume;
    public $prix;
    public $auteur;
    public $imageData;
      
    public function  __construct($data = null){

        if(is_array($data)){

            $this->id = $data['id'];
            $this->title = $data['title'];
            $this->editeur = $data['editeur'];
            $this->volume = $data['volume'];
            $this->prix = $data['prix'];
            $this->auteur = $data['auteur'];
            $this->imageData = $data['imageData'];
        }        
    }



        // retourne l'ensemble des données.
    public function getMangas() {

        $response = Database::getDB()->prepare('SELECT * FROM manga');
        $response->execute();
        $mangas = $response->fetchAll(PDO::FETCH_CLASS, "Manga");

        $response->closeCursor();
        return $mangas;
    }


    //retourne une liste de manga filtrée par id 
    public function getMangasFilterById($list) {
        $response = Database::getDB()->prepare('SELECT * FROM manga WHERE id IN ('.implode(',',$list).')');
        $response->execute();
        $mangas = $response->fetchAll(PDO::FETCH_CLASS, "Manga");

        $response->closeCursor();
        return $mangas;
    }

    // Retourne un manga sur base d'un filtre.
    public function getMangaById($id) {

        $response = Database::getDB()->prepare('SELECT * FROM manga WHERE id = :id');
        $response->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Manga');
        $response->execute([':id' => $id]);
        $manga = $response->fetch();

        $response->closeCursor();

        return $manga;    
    }

    public function create($auteur,$editeur,$genre,$prix,$title,$volume,$image) {

        $response = Database::getDB()->prepare('INSERT INTO manga SET auteur=:auteur, editeur=:editeur, genre=:genre,imageData=:imageData, prix=:prix, title=:title,volume=:volume');
        $imageData = str_replace(' ', '_', $title).$volume;
        $response->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Manga');
        $response->execute([':auteur' => $auteur, ':editeur' => $editeur, ':genre' => $genre, ':imageData' => $imageData, ':prix' => $prix, ':title' => $title, ':volume' => $volume]);
       
        $response->closeCursor();
        
        //FileHandler::addPicture($imageData,$image);

        return $manga;    
    }

    public function delete($id) {

        $response = Database::getDB()->prepare('DELETE * FROM manga WHERE id = :id');
        $response->execute([':id' => $id]);
        $response->closeCursor();

        return;    
    }

}
?>
