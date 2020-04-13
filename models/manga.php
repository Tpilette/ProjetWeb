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
    public $genre;
      
    public function  __construct($data = null){

        if(is_array($data)){

            $this->id = $data['id'];
            $this->title = $data['title'];
            $this->editeur = $data['editeur'];
            $this->volume = $data['volume'];
            $this->prix = $data['prix'];
            $this->auteur = $data['auteur'];
            $this->imageData = $data['imageData'];
            $this->genre = $data['genre'];
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


    public function edit($id,$auteur,$editeur,$genre,$prix,$title,$volume) {

        $response = Database::getDB()->prepare('UPDATE manga SET auteur=:auteur, editeur=:editeur, genre=:genre,imageData=:imageData, prix=:prix, title=:title,volume=:volume WHERE id = :id');
        $imageData = str_replace(' ', '_',$title);
        $response->execute([':auteur' => $auteur, ':editeur' => $editeur, ':genre' => $genre, ':imageData' => $imageData, ':prix' => $prix, ':title' => $title, ':volume' => $volume,':id'=>$id]);
        $response->closeCursor();
        
        return self::getMangaById($id);   
    }

    public function create($auteur,$editeur,$genre,$prix,$title,$volume,$image) {

        //create manga
        $response = Database::getDB()->prepare('INSERT INTO manga SET auteur=:auteur, editeur=:editeur, genre=:genre,imageData=:imageData, prix=:prix, title=:title,volume=:volume');
        $imageData = str_replace(' ', '_', $title);
        $response->execute([':auteur' => $auteur, ':editeur' => $editeur, ':genre' => $genre, ':imageData' => $imageData, ':prix' => $prix, ':title' => $title, ':volume' => $volume]);
        $response->closeCursor();  

        //upload picture
        $imageName = $imageData.'_'.$volume;
        FileHandler::addPicture($imageName,$image);

        // get the newly created manga
        $id = Database::getDB()->prepare('SELECT * FROM manga WHERE title=:title AND volume=:volume AND prix= :prix');
        $id->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Manga');
        $id->execute([':prix' => $prix, ':title' => $title, ':volume' => $volume]);

        $manga= $id->fetch();

        $id->closeCursor();

        return $manga;
    }

    public function delete($id) {

        $manga = self::getMangaById($id);

        $response = Database::getDB()->prepare('DELETE FROM manga WHERE id = :id');
        $response->execute([':id' => $id]);
        $response->closeCursor();  

        FileHandler::deletePicture($manga->imageData);
    }

}
?>
