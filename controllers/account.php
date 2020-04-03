<?php 


    $title = "Profil";
    include 'views/includes/header.php';

    if($_SESSION['role'] == 1)
    {

        include 'views/includes/navbarUser.php';
    }
    else
    {
        include 'views/includes/navbarAdmin.php';
    }


    require 'models/user.php';
    if(!empty($_GET) && !empty($_GET['login'])){
        $user = User::getUserById($_GET['login']);
        
    }
    else {
        $user = User::getUserById($_SESSION['login']);
    }


    $email = $user->email;
    $default = "https://blog.ramboll.com/fehmarnbelt/wp-content/themes/ramboll2/images/profile-img.jpg";
    $size = 310;
    $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

    include 'views/account.php';;
    include 'views/includes/content.php';
    include 'views/includes/footer.php';

?>