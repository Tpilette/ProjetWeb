<?php ob_start(); ?>


<?php
    $title="Detail de votre panier";
    $content= ob_get_clean();
    include 'includes/template.php';
?>