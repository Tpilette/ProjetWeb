<?php ob_start(); ?>


<dl class="row grey">
    <dt class="col-sm-4">
        Commande effectuée le
        <br>
        <?= $commande->date?>    
    <dt>
    <dt class="col-sm-4">
        Total
        <br>
        <?= $commande->montant?>    
    <dt>
</dl>
<?php foreach($commande->contenu as $content):?>
    <dl class="row">
        <dt class="col-sm-4"><?=$content->title?></dt>
        <dt class="col-sm-4">Volume: <?=$content->volume?></dt>
        <dt class="col-sm-4"><?=$content->prixEnDate?>€</dt>
    </dl>
<?php endforeach ?>

<?php
    $title="Detail de la commande numéro ".$commande->id;
    $content= ob_get_clean();
    include 'includes/template.php';
?>