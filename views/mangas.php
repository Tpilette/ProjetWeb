<?php ob_start(); ?>

<div class="card-deck">  

  <?php foreach ($mangas as $manga): ?>
    <div class="col-4">
     <div class="card">
       <div class="card-header">
            <?= $manga->title ?>
       </div>
        <img src="image/<?= $manga->imageData?>_<?= $manga->volume ?>" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">volume: <?= $manga->volume ?></h5>
        <a href="<?= ROOT_PATH.'manga/'.$manga->id ?>" class="btn btn-primary">Voir le détail</a>
      </div>
    </div>
  </div>
  <?php endforeach ?>
</div>

<?php
  $title="Les mangas";
  $content= ob_get_clean();
 ?>