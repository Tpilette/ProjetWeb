<?php 
    require 'models/commande.php';
    require 'models/contenuCommande.php';

    if(!empty($_POST['action'] =="validerPanier")){

        Commande::validateCart($_SESSION['shoppingCart'],$_SESSION['userId']);
        include 'views/commandeValide.php';
    }

    if (!REQ_TYPE_ID) {

        $commandes = Commande::getListingCommandeUser($_SESSION['userId']);
        
        $title = "Historique de vos commandes";
        include 'views/includes/header.php';
        include 'views/includes/navbarUser.php';
        include 'views/commandes.php';
    } 
    else {
        $title = "Contenu de votre commande";
        include 'views/includes/header.php';
        include 'views/includes/navbarUser.php';
        $commande = Commande::getCommandeById(REQ_TYPE_ID);
        $commande->contenu = ContenuCommande::getContenuCommande($commande->id);
        include 'views/commandeDetail.php';
    }

    include 'views/includes/content.php';
    include 'views/includes/footer.php';
?>