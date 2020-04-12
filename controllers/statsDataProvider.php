<?php 

$mangas = [
    ['Sakura', 12],
    ['UqHolder',25],
    ['Beast Master', 12]
];
    require 'models/manga.php';
    // $mangas = getMangas();
    
    echo json_encode($mangas);

?>