<?php 

    require 'models/articles.php';
    $data = getArticles();

    echo json_encode($data);

?>