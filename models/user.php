<?php

require 'database.php';

class User
{

    public $id;
    public $login;
    public $email;
    public $password;
    public $role;
    public $nom;
    public $prenom;
    public $adresse;
    public $numTel;
    public $dateNaissance;
    
    public function  __construct($data = null){

        $this->id = $data['id'];
        $this->login = $data['login'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->role = $data['valeur'];
        $this->nom = $data['nom'];
        $this->prenom = $data['prenom'];
        $this->adresse = $data['adresse'];
        $this->numTel = $data['numTel'];
        $this->dateNaissance = $data['dateNaissance'];
    }


}

function getUsers() {
    try
    {
        $response = getDB()->query('SELECT u.id,login,email,r.valeur
                                    FROM USER u
                                    INNER JOIN 
                                    ROLE r ON r.id = u.role');

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
        $response = getDB()->prepare('SELECT id,login,email 
                                      FROM USER 
                                      WHERE login = :login');

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



function addUser($login,$pasword,$email){

    // ici faire l'insert en db
    $reponse = getDB()->prepare('INSERT INTO user 
                                SET login = :login,
                                    password = :password,
                                    email = :email');

    $reponse->execute([':login' => $login, ':password' => password_hash($pasword, PASSWORD_DEFAULT), ':email' => $email]);
    $reponse->closeCursor(); 
}

function checkLogin($login){
    //vérifier que le login n'existe pas
    $reponse = getDB()->prepare('SELECT * FROM USER WHERE login = :login');
    $reponse->execute([':login' => $login]);
    $user = $reponse->fetch();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $user;
    
}



function editUser($user,$login,$email,$password,$confirmPassword) {
    
        if ($password != $confirmPassword)
        {
           return "Votre mot de passe et votre mot de passe de confirmation ne correspondent pas...";
        }
        else
        {
            //C'est ici qu'on va faire l'update de l'utilisateur.
            $response = getDB()->prepare('UPDATE USER 
                                            SET email = :email, 
                                            password = :password 
                                            WHERE login = :login');
            if ($password) {
                $password = password_hash($password, PASSWORD_DEFAULT);
            }
            else {
                $password = $user->password;
            }
            $response->execute([':email' => $email, ':password' => $password, ':login' => $user->login]);
            $response->closeCursor(); 
            return getUserById($user->login);
         
        }


    }


?>