<?php 
    $title = "Listing commande";
    require 'models/commande.php';
    include 'views/includes/header.php';
    include 'views/includes/navbarAdmin.php';

    $commandes = Commande::getListingCommande();

    include 'views/commandesListing.php';
    include 'views/includes/content.php';
    include 'views/includes/footer.php';
?>