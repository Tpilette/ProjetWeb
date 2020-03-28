<?php ob_start(); ?>

<div class="card-deck">  

  <?php foreach ($mangas as $manga): ?>
    <div class="card">
    <div class="card-header">
            <?= $manga->Title ?>
      </div>
      <img src="image/<?= $manga->ImageData?>_<?= $manga->Volume ?>" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">volume: <?= $manga->Volume ?></h5>
        <a href="<?= ROOT_PATH.'manga/'.$manga->Id ?>" class="btn btn-primary">Voir le détail</a>
      </div>
    </div>
  <?php endforeach ?>
</div>

<?php
  $title="Les mangas";
  $content= ob_get_clean();
  include 'includes/template.php';
 ?>