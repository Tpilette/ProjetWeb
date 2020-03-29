<?php 

class ContenuCommande{

    public $title;
    public $prixEnDate;
    public $imageData;
    public $volume;


    public function getContenuCommande($commandeId) {

        $response = getDB()->prepare(' SELECT m.title,m.volume,cc.prixEnDate,m.imageData
                                        FROM contenucommande cc
                                        INNER JOIN manga m ON m.id = cc.idManga
                                        where cc.idCommande =:id');
        $response->execute([':id' => $commandeId]);
        $contenu = $response->fetchAll(PDO::FETCH_CLASS, 'ContenuCommande');
    
        $response->closeCursor();
    
        return $contenu;    
    }

}    


?>