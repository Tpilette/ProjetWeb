<?php 
    require 'models/user.php';

   
    if(!empty($_POST)) {
        if(!empty($_POST['login']) && !empty($_POST['password']))
        {
            $user = User::getUserById($_POST['login']);
            var_dump($user);


            if($user && password_verify($_POST['password'], $user->password))
            {
                //Authentification OK
                $_SESSION['login'] = $user->login;
                $_SESSION['message'] = "Bienvenue ".$user->login;
                $_SESSION['role'] = $user->role;
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