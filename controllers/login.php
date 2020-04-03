<?php 
    require 'models/user.php';
    $title="Login";
    include 'views/includes/header.php';
    include 'views/includes/navbarAnonymous.php';
   
    if(!empty($_POST)) {
        if(!empty($_POST['login']) && !empty($_POST['password']))
        {
            $user = User::getUserById($_POST['login']);
            
            if($user && password_verify($_POST['password'], $user->password))
            {
                //Authentification OK
                $_SESSION['login'] = $user->login;
                $_SESSION['userId'] = $user->id;
                $_SESSION['role'] = $user->role;
                $_SESSION['shoppingCart'] = [];    
                header("Location: ".ROOT_PATH."welcome");
                exit();
            }
            else
            {
                $errorMessage = "Mauvais login/password";
            }
        }
        else
        {
            $errorMessage = "Tu as oublié d'encoder quelque chose...";
            
        }
    }

    
include 'views/login.php';
include 'views/includes/content.php';
include 'views/includes/footer.php';

?>