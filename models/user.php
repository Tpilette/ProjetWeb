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

        if(is_array($data)){
            $this->id = $data['id'];
            $this->login = $data['login'];
            $this->email = $data['email'];
            $this->password = $data['password'];
            $this->role = $data['role'];
            $this->nom = $data['nom'] != null? $data['nom'] : '';
            $this->prenom = $data['prenom'] != null? $data['prenom'] : '';
            $this->adresse = $data['adresse'] != null? $data['adresse'] : '';
            $this->numTel = $data['numTel'] != null? $data['numTel'] : '';
            $this->dateNaissance = $data['dateNaissance'] != null? $data['dateNaissance'] : '';
        }        
    }

    public function getUsers() {
        try
        {
            $response = getDB()->query('SELECT id,login,password,email,nom,prenom,adresse,numTel,dateNaissance,role FROM personne');
    
            $users = $response->fetchAll(PDO::FETCH_CLASS, 'User');
    
            $response->closeCursor();
            return $users;
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
    
    
    public function getUserById($login) {
        try
        {
            $response = getDB()->prepare('SELECT id, login, password, email, nom, prenom,adresse,numTel,dateNaissance,role FROM personne WHERE login = :login');
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
    
    
    public function addUser($login,$pasword,$email){
    
        // ici faire l'insert en db
        $response = getDB()->prepare('INSERT INTO personne SET login = :login,password = :password,email = :email,role = 1');
        $response->execute([':login' => $login, ':password' => password_hash($pasword, PASSWORD_DEFAULT), ':email' => $email]);

        $response->closeCursor(); 
    }
    
    public function checkLoginExist($login){
        //vérifier que le login n'existe pas
        $response = getDB()->prepare('SELECT * FROM personne WHERE login = :login');
        $response->execute([':login' => $login]);
        $user = $response->fetch();
        $response->closeCursor(); // Termine le traitement de la requête
        return $user;
        
    }
    
    public function editUser($user,$login,$email,$password,$confirmPassword) {
        
            if ($password != $confirmPassword)
            {
               return "Votre mot de passe et votre mot de passe de confirmation ne correspondent pas...";
            }
            else
            {
                //C'est ici qu'on va faire l'update de l'utilisateur.
                $response = getDB()->prepare('UPDATE personne SET email = :email, password = :password WHERE login = :login');
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
    
        public function login($login){
    
        $response = $bdd->prepare('SELECT * FROM personne WHERE login = :login');
        $response->execute([':login' =>$login]);
        $user = $response->fetch();
        $response->closeCursor(); 
        
        return $user;
    }


}
?>