<?php ob_start(); ?>

    <dl class="row">
        <dt class="col-sm-2">Nom</dt>
            <dd class="col-sm-10"><?=$manga->title?></dd>
        <dt class="col-sm-2">Volume</dt>
            <dd class="col-sm-10"><?=$manga->volume?></dd>
        <dt class="col-sm-2">Prix</dt>
            <dd class="col-sm-10"><?=$manga->prix?>€</dd>
    </dl>
        <img src="../image/<?= $manga->imageData?>_<?= $manga->volume ?>" height="45%" width="25%">
    <br>
    <br>
    <a href="<?=ROOT_PATH?>panier/<?= $manga->id ?>/add" class="btn btn-primary">Ajouter au panier<a>
<?php
    $title="Detail de ".$manga->title;
    $content= ob_get_clean();
?>