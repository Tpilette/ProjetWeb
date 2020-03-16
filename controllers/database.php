<?php

/*
	DATABASE
	DB connection settings
*/

// database settings
$server = 'localhost';
$user 	= 'root';
$pass 	= '';
$db 	= 'projetWeb';


// connect to the database
$Database = new mysqli($server, $user, $pass, $db);


// error reporting
mysqli_report(MYSQLI_REPORT_ERROR);