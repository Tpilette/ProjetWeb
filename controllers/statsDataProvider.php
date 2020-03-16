<?php 

$mangas = [
    ['Pomme', 12],
    ['Poire',25],
    ['Peche', 12],
    ['Ananas', 5],
    ['Banane', 11],
    ['Kumkwat', 2]
];
    require 'models/manga.php';
    // $mangas = getMangas();
    
    echo json_encode($mangas);

?>