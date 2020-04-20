<?php ob_start(); ?>

<div>
<a href="<?= ROOT_PATH.'mangaAdmin//add'?>" class="btn btn-primary">Ajouter un manga</a>
</div>
<br>
<div class="card-deck">  
  <?php foreach ($mangas as $manga): ?>
    <div class="col-4">
     <div class="card">
        <div class="card-header">
          <?= $manga->title ?>
        </div>    
        <img src="image/<?= $manga->imageData?>_<?= $manga->volume ?>" class="card-img-top" >    
        <div class="card-body">
          <h5 class="card-title">volume: <?= $manga->volume ?></h5>   
          <div class="container">
            <div class="row">
              <div class="col-3"><a href="<?= ROOT_PATH.'mangaAdmin/'.$manga->id ?>" class="btn btn-primary">détail</a></div>
              <div class="col-3"><a href="<?= ROOT_PATH.'mangaAdmin/'.$manga->id.'/edit' ?>" class="btn btn-warning">Editer</a></div>
              <div class="col-3"><a href="<?= ROOT_PATH.'mangaAdmin/'.$manga->id.'/delete' ?>" class="btn btn-danger">Supprimer</a></div>
            </div>        
          </div>    
        </div>
    </div>
  </div>
  <?php endforeach ?>
</div>



<?php 
  $title="Les mangas";
  $content= ob_get_clean();
 ?>