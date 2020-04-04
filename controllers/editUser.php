<?php 
    require "models/user.php";
    include 'views/includes/header.php';

    if($_SESSION['role'] == USER)
        {

            include 'views/includes/navbarUser.php';
        }
        else
        {
            include 'views/includes/navbarAdmin.php';
        }
    


    if(!REQ_TYPE_ID){
    
        $us = User::getUserByLogin($_POST['login']);
        $result = User::editUser($us,$_POST['login'],$_POST['email'],$_POST['password'],$_POST['confirmPassword']);

        $user = $result;
        include 'views/account.php';
    }
    else
    {
        $user = User::getUserByLogin(REQ_TYPE_ID);
        include 'views/editUser.php';
    }

include 'views/includes/content.php';
include 'views/includes/footer.php';
?>