<?php

class User
{
    public $id;
    public $login;
    public $email;
    public $password;
    
    public function  __construct($data = null){

        $this->id = $data['id'];
        $this->id = $data['login'];
        $this->id = $data['email'];
        $this->password = $data['password'];
    }


}

function getUsers() {
    try
    {
        //PDO: PHP Data Objects
        $bdd = new PDO('mysql:host=localhost;dbname=projetWeb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $response = $bdd->prepare('SELECT id,login,email FROM USER');
        $response->execute();
        $users = $response->fetchAll(PDO::FETCH_CLASS, 'User');

        $response->closeCursor();

        return $users;
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
}


function getUserById($login) {
    try
    {
        //PDO: PHP Data Objects
        $bdd = new PDO('mysql:host=localhost;dbname=projetWeb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $response = $bdd->prepare('SELECT id,login,email FROM USER WHERE login = :login');
        $response->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
        $response->execute([':login' => $login]);
        $user = $response->fetch();

        $response->closeCursor();

        return $user;
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
}



function editUser($user,$login,$email,$password,$confirmPassword) {


    //PDO: PHP Data Objects
    $bdd = new PDO('mysql:host=localhost;dbname=projetWeb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    
        if ($password != $confirmPassword)
        {
           return "Votre mot de passe et votre mot de passe de confirmation ne correspondent pas...";
        }
        else
        {
            //C'est ici qu'on va faire l'update de l'utilisateur.
            $response = $bdd->prepare('UPDATE USER SET email = :email, password = :password WHERE login = :login');
            if ($password) {
                $password = password_hash($password, PASSWORD_DEFAULT);
            }
            else {
                $password = $user->password;
            }
            $response->execute([':email' => $email, ':password' => $password, ':login' => $user->login]);
            return getUserById($user->login);
         
        }


    }


?>