<?php 

    require_once 'models/stats.php';
    $mangas = Stats::getStatSaleByTitle();    
    echo json_encode($mangas);
    
?>