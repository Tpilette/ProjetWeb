<?php ob_start(); ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Volume</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($list as $item):?>
    <tr>
        <th scope="row"><?= $item->title ?></th>
        <td><?= $item->volume ?></td>
        <td><?= $item->prix ?></td>
       <td>
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="<?= ROOT_PATH.'manga/'.$item->id ?>" class="btn btn-primary">Voir le détail</a>  
                <a href="<?=ROOT_PATH?>panier/<?=$item->id?>/remove" class="btn btn-danger">Supprimer</a>  
              </div>
            </div>
          </div>
        </td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>

<div class="container">
  <div class="row">
    <div class="col-6"> Total de votre panier : <?= $_SESSION['totalPanier']?>€ </div>
    <div class="col-6">
      <a href="<?=ROOT_PATH?>commande//validerPanier" class="btn btn-primary">Valider mon panier</a>  
    </div>
  </div>
</div>




<?php
    $title="Detail de votre panier";
    $content= ob_get_clean();
?>