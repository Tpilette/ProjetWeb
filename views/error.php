<?php ob_start() ?>
    Désolé, une erreur est survenue : 
    <?php echo $errorMessage ?>

<?php
$title = 'Error';
$content = ob_get_clean();
?>
