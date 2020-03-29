<?php
if(!empty($_SESSION['login']))
{
    include 'views/welcome.php';
}
else
{
    include 'views/anonymous.php';
}
    
?>
