<?php 
require 'models/user.php';
if(!empty($_GET) && !empty($_GET['login'])){
    $user = getUserById($_GET['login']);
}
else {
    $user = getUserById($_SESSION['login']);
}

if($user->login != $_SESSION['login']) {
    $title = "Utilisateur ".$user->login;
}


$email = $user->email;
$default = "https://blog.ramboll.com/fehmarnbelt/wp-content/themes/ramboll2/images/profile-img.jpg";
$size = 310;
$grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;



 include 'views/account.php';
?>