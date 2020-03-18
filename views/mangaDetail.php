<?php ob_start(); ?>


<dl class="row">
    <dt class="col-sm-2">Nom</dt>
        <dd class="col-sm-10"><?=$manga->Title?></dd>
    <dt class="col-sm-2">Volume</dt>
        <dd class="col-sm-10"><?=$manga->Volume?></dd>
    <dt class="col-sm-2">Prix</dt>
        <dd class="col-sm-10"><?=$manga->Prix?></dd>
</dl>
<img src="../views/image/UQH01.png" alt="UQH01" height="42" width="42">
<div id="addToBasket">
 <button>Ajouter au panier</button>
</div>

<?php
    $title="Detail de ".$manga->Title;
    $content= ob_get_clean();
    include 'includes/template.php';
?>