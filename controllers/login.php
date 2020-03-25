<?php 
    require 'models/user.php';

    if(!empty($_POST)) {
        if(!empty($_POST['login']) && !empty($_POST['password']))
        {
           
            if($user && password_verify($_POST['password'], $user['password'] ))
            {
                //Authentification OK
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['message'] = "Bienvenue ".$_POST['login'];
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
?>