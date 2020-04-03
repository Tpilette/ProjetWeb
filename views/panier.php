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
              <div class="col-4">
                <a href="<?= ROOT_PATH.'manga/'.$item->id ?>" class="btn btn-primary">Voir le détail</a>  
              </div>
              <div class="col-4">
                <form action="<?=ROOT_PATH.'panier'?>" method="POST">
                    <input type="hidden" id="mangaId" name="mangaId" value="<?=$item->id?>">    
                    <input type="hidden" id="action" name="action" value="remove">    
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
              </div>
              <div class="col-4"></div>
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
      <form action="<?=ROOT_PATH.'commande'?>" method="POST">   
          <input type="hidden" id="action" name="action" value="validerPanier">    
          <button type="submit" class="btn btn-primary">Valider mon panier</button>
      </form>
    </div>
  </div>
</div>




<?php
    $title="Detail de votre panier";
    $content= ob_get_clean();
?>