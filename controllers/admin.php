<?php 
require 'models/user.php';

$users = User::getUsers();


include 'views/admin.php';
?>