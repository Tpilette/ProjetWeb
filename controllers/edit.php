<?php 
    require "models/user.php";

    if(!REQ_TYPE_ID){
    
     $us = User::getUserById($_POST['login']);
     $result = User::editUser($us,$_POST['login'],$_POST['email'],$_POST['password'],$_POST['confirmPassword']);

     if($result->login != null ){

        echo 'ok';
        $user = $result;
        include 'views/account.php';
     }
     else{
         echo 'nok';
        
     }

    }
    else{
        $user = User::getUserById(REQ_TYPE_ID);
        include 'views/edit.php';
    }
?>