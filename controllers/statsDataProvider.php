<?php 

require_once 'models/stats.php';

// $mangas = [
//     ['Sakura', 12],
//     ['UqHolder',25],
//     ['Beast Master', 12]
// ];

    $mangas = Stats::getStatSaleByTitle();
    require 'models/manga.php';
    // $mangas = getMangas();
    
    echo json_encode($mangas);

?>