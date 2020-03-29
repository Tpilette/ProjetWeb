<?php 
    require 'models/commande.php';

    if (!REQ_TYPE_ID) {

        $commandes = Commande::getListingCommande();
        include 'views/commandesListing.php';
    } 
?>