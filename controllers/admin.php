<?php 
require 'models/user.php';

    $title = "Administration";
    include 'views/includes/header.php';
    include 'views/includes/navbarAdmin.php';

    $users = User::getUsers();

    include 'views/admin.php';
    include 'views/includes/content.php';
    include 'views/includes/footer.php';    
?>