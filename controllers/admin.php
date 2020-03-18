<?php 
require 'models/user.php';

$users = getUsers();


include 'views/admin.php';
?>