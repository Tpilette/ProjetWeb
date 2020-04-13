<?php

$title="Bienvenue";
include 'views/includes/header.php';

if(!empty($_SESSION['login']))
{
    if($_SESSION['role'] == USER)
    {
        include 'views/includes/navbarUser.php';
    }
    else
    {
        include 'views/includes/navbarAdmin.php';
    }
}
else
{
    include 'views/includes/navbarAnonymous.php';

}

include 'views/welcome.php';
include 'views/includes/content.php';
include 'views/includes/footer.php';

?>
