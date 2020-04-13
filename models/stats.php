<?php
require 'commande.php';
require 'contenuCommande.php';

class Stats {   


    public function getStatSaleByTitle(){
    
        $listSaleByTitle = [];

        //récupération de toute les commandes
        $commandes = Commande::getListingCommande();
        
        foreach ($commandes as $commande) {

            //récupération du contenu de la commande
            $contenu = ContenuCommande::getContenuCommande($commande->id);

            foreach ($contenu as $content) {

                //check si le titre est déjà dans la liste finale :
                //true => nbr +1
                //false => nouvelle ligne
                $title = $content->title;
                if(array_key_exists($title,$listSaleByTitle)){

                    $listSaleByTitle[$title]++;
                }
                else{
                    $listSaleByTitle += array($title => 1);
                }            
            }        
        }

        return $listSaleByTitle;
    }    
}

?>
