<?php 
    require_once 'models/contenuCommande.php';
    require_once 'models/commande.php';
    require_once 'models/user.php';
    require_once 'models/manga.php';

    if(!empty($_POST['action'] =="validerPanier")){

        //add content to commande
        $commandeId = Commande::validateCart($_SESSION['userId'],$_SESSION['totalPanier']);

        // get listing manga pour le contenu de la commande
        $listManga = Manga::getMangasFilterById($_SESSION['shoppingCart']);

        //ajouter résultat a la table de contenu
        ContenuCommande::addContenuCommande($listManga,$commandeId);
        $_SESSION['shoppingCart'] = [];
        $title = "Confirmation commande ".$commandeId;
        include 'views/includes/header.php';
        include 'views/includes/navbarUser.php';
        include 'views/commandeValide.php';
    }

    elseif (!REQ_TYPE_ID) {

        $commandes = Commande::getListingCommandeUser($_SESSION['userId']);
        
        $title = "Historique de vos commandes";
        include 'views/includes/header.php';
        include 'views/includes/navbarUser.php';
        include 'views/commandes.php';
    } 
    else {
        $title = "Contenu de la commande";
        include 'views/includes/header.php';
        
        if ($_SESSION['role'] == ADMIN) {
            include 'views/includes/navbarAdmin.php';
        } 
        else 
        {
            include 'views/includes/navbarUser.php';
        }
        

        
        $commande = Commande::getCommandeById(REQ_TYPE_ID);
        $commande->contenu = ContenuCommande::getContenuCommande($commande->id);
        include 'views/commandeDetail.php';
    }

    include 'views/includes/content.php';
    include 'views/includes/footer.php';
?>