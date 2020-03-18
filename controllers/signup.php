<?php 
require 'models/user.php';
if(!empty($_POST)) {
    if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['confirm_password']))
    {
        //vérification du pass et confirm_pass
        if($_POST['password'] != $_POST['confirm_password']){
            $errorMessage = "Votre mot de passe et votre mot de passe de confirmation ne correspondent pas...";
        }
        else {

            if(checkLogin($_POST['login'])){
                $errorMessage = "Le login ".$_POST['login']." existe déjà...";
            }
            else {
                addUser($_POST['login'],$_POST['password'],$_POST['email']);
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['message'] = "Bienvenue ".$_POST['login'];
                header("Location: ".ROOT_PATH."welcome");
                exit();
            }
        }
    }
    else
    {
        //Ici on va prévenir l'utilisateur qu'il manque quelque chose
        $errorMessage = "Tu as oublié d'encoder quelque chose...";
    }
}
else {
    //Ici on va prévenir l'utilisateur qu'il manque quelque chose
    $errorMessage = "Tu as oublié d'encoder quelque chose...";
}
 include 'views/signup.php';

?>