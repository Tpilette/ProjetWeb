<?php 
    require 'models/user.php';  
    $title = "Profil";
    include 'views/includes/header.php';

    if($_SESSION['role'] == USER)
    {
        include 'views/includes/navbarUser.php';
    }
    else
    {
        include 'views/includes/navbarAdmin.php';
    }


    if(REQ_TYPE_ID){
        $user = User::getUserByLogin(REQ_TYPE_ID);
        
    }
    else {
        $user = User::getUserByLogin($_SESSION['login']);
    }


    $email = $user->email;
    $default = "https://blog.ramboll.com/fehmarnbelt/wp-content/themes/ramboll2/images/profile-img.jpg";
    $size = 310;
    $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

    include 'views/account.php';;
    include 'views/includes/content.php';
    include 'views/includes/footer.php';

?>