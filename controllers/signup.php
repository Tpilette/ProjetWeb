<?php 
    require 'models/user.php';
    $title = "Inscription";
    include 'views/includes/header.php';
    include 'views/includes/navbarAnonymous.php';

    if(!empty($_POST)) {
        if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['confirm_password']))
        {
            if($_POST['password'] != $_POST['confirm_password'])
            {
                $errorMessage = "Votre mot de passe et votre mot de passe de confirmation ne correspondent pas...";
            }
            else 
            {

                if(User::checkLoginExist($_POST['login']))
                {
                    $errorMessage = "Le login ".$_POST['login']." existe déjà...";
                }
                else 
                {

                    User::addUser($_POST['login'],$_POST['password'],$_POST['email']);

                    header("Location: ".ROOT_PATH."login");
                    exit();
                }
            }
        }
        else 
        {
            $errorMessage = "Tu as oublié d'encoder quelque chose...";
        }
    }
    else
    {
        $errorMessage = "";
    }
    
    include 'views/signup.php';
    include 'views/includes/content.php';
    include 'views/includes/footer.php';

?>