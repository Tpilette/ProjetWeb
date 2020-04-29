<?php
require_once 'models/database.php';


class Commande {

    public $id;
    public $date;
    public $idUser;
    public $montant;
    public $contenu;
    public $nom;
    public $prenom;

    public function  __construct($data = null){

        if(is_array($data)){

            $this->id = $data['id'];
            $this->date = $data['date'];
            $this->idUser = $data['idUser'];
            $this->montant = $data['montant'];
            $this->nom = $data['nom'] != null? $data['nom'] : 'Inconnu';
            $this->prenom = $data['prenom']!= null? $data['prenom'] : 'Inconnu';
            $this->contenu = [];
            
        }        
    }
    // retourne l'ensemble des données.
    public function getListingCommande() {

        $response = Database::getDB()->prepare('SELECT commande.id,date,montant,nom,prenom FROM commande
                                                INNER JOIN personne on personne.id = commande.idUser');
        $response->execute();
        $commandes = $response->fetchAll(PDO::FETCH_CLASS, "Commande");

        $response->closeCursor();
        return $commandes;
    }

     // retourne l'ensemble des données d'un client.
     public function getListingCommandeUser($userId) {

        $response =  Database::getDB()->prepare('SELECT * FROM commande WHERE idUser =:id');
        $response->execute([':id'=>$userId]);
        $commandes = $response->fetchAll(PDO::FETCH_CLASS, "Commande");
        $response->closeCursor();

        return $commandes;
    }


    // Retourne un objet sur base d'un filtre.
    public function getCommandeById($id) {

        //
        $response = Database::getDB()->prepare('SELECT commande.id,date,montant,nom,prenom FROM commande
                                                INNER JOIN personne on personne.id = commande.idUser
                                                WHERE commande.id = :id');
        $response->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Commande');
        $response->execute([':id' => $id]);
        $commande = $response->fetch();

        $response->closeCursor();

        return $commande;    
    }


    public function addCommande($userId,$total,$date) {

        $response = Database::getDB()->prepare('INSERT INTO commande SET date = :date,idUser = :idUser,montant= :total');
        $response->execute([':date' => $date,':idUser' => $userId,':total' => $total]);
   
        $response->closeCursor(); 
    }



    public function validateCart($userId,$total){
        
        self::addCommande($userId,$total,date("Y-m-d"));
        $commandes = self::getListingCommandeUser($userId);
        $commande = $commandes[count($commandes)-1];


        return $commande->id;
      
    }

}



?>
