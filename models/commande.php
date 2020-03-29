<?php
require 'database.php';


class Commande {

    public $id;
    public $date;
    public $idUser;
    public $montant;
    public $contenu;

    public function  __construct($data = null){

        if(is_array($data)){

            $this->id = $data['id'];
            $this->date = $data['date'];
            $this->idUser = $data['idUser'];
            $this->montant = $data['montant'];
            $this->contenu = [];
            
        }        
    }
    // retourne l'ensemble des données.
    public function getListingCommande() {

        $response = getDB()->prepare('SELECT * FROM commande');
        $response->execute();
        $commandes = $response->fetchAll(PDO::FETCH_CLASS, "Commande");

        $response->closeCursor();
        return $commandes;
    }

     // retourne l'ensemble des données d'un client.
     public function getListingCommandeUser($userId) {

        $response = getDB()->prepare('SELECT * FROM commande WHERE idUser =:id');
        $response->execute([':id'=>$userId]);
        $commandes = $response->fetchAll(PDO::FETCH_CLASS, "Commande");

        $response->closeCursor();
        return $commandes;
    }


    // Retourne un objet sur base d'un filtre.
    public function getCommandeById($id) {

        //
        $response = getDB()->prepare('SELECT * FROM commande WHERE id = :id');
        $response->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Commande');
        $response->execute([':id' => $id]);
        $commande = $response->fetch();

        $response->closeCursor();

        return $commande;    
    }

}



?>
