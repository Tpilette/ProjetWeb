<?php
// définition des id de role en tant que constante. facilité de lecture du code => problème lors de la récupération du nom du role via PDO
define('ADMIN',2);
define('USER',1);

// On démarre toujours la session
session_start(); 

// Chemin qui suit le nom de domaine. Exemple: http://monprojet.local/09_mvc/ le path a indiqué sera donc '/09_mvc/'
define('ROOT_PATH', '/ProjetECommerce/'); 

// On récupère juste la request, sans le chemin du dossier.
$request = str_replace(ROOT_PATH, "", $_SERVER['REQUEST_URI']); 

 // On découpe la requête pour obtenir une liste et on supprime les éléments Null
$segments = array_filter(explode('/', $request));
if (!count($segments) or $segments[0] == 'index'){
    $segments[0] = 'welcome';
}


// Structure URL: http://projetweb.test/{REQ_TYPE}/{REQ_TYPE_ID}/{REQ_ACTION}
define('REQ_TYPE', $segments[0] ?? Null);
define('REQ_TYPE_ID', $segments[1] ?? Null);

// with req_action 
// define('REQ_ACTION', $segments[2] ?? Null);
// $file = 'controllers/'.REQ_TYPE.(REQ_ACTION ? '_'.REQ_ACTION : '').'.php'; 

//without req_action
$file = 'controllers/'.REQ_TYPE.'.php';


// On vérifie que le fichier php existe
if(file_exists($file)){ 
    require $file;
    exit();
}
else {
    require 'controllers/404.php';
    exit();
}
?>
