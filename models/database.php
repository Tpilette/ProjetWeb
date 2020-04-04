<?php

class Database {

    function getDB(){
        return new PDO('mysql:host=localhost;dbname=projetWeb;charset=utf8', 'appDbUser', 'Pasw123!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    
}

?>