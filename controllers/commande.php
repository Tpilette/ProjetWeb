<?php 
    require 'models/commande.php';
    require 'models/contenuCommande.php';

    if (!REQ_TYPE_ID) {

        $commandes = Commande::getListingCommandeUser($_SESSION['userId']);
        include 'views/commandes.php';
    } 
    else {

        $commande = Commande::getCommandeById(REQ_TYPE_ID);
        $commande->contenu = ContenuCommande::getContenuCommande($commande->id);
        include 'views/commandeDetail.php';
    }
?>