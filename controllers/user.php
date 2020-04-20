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
    

    if(REQ_ACTION == 'edit'){

        if(!REQ_TYPE_ID){
        
            $us = User::getUserByLogin($_POST['login']);
            $result = User::editUser($us,$_POST['email'],$_POST['password'],$_POST['confirmPassword'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['numTel'],$_POST['dateNaissance']);
            $user = $result;

            $default = "https://blog.ramboll.com/fehmarnbelt/wp-content/themes/ramboll2/images/profile-img.jpg";
            $size = 310;
            $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $user->email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
            include 'views/account.php';
        }
        else
        {
            $user = User::getUserByLogin(REQ_TYPE_ID);
            include 'views/user_edit.php';
        }
    }
    elseif(REQ_ACTION =='delete'){

        $title ="Gestion Utilisateur";
        User::delete(REQ_TYPE_ID);
        $users= User::getUsers();
        include 'views/admin.php';
    }
    
    
    include 'views/includes/content.php';
    include 'views/includes/footer.php';
?>