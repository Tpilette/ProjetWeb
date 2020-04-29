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
          <?= $manga->title ?> N°: <?= $manga->volume ?>
        </div>    
        <img src="image/<?= $manga->imageData?>_<?= $manga->volume.".jpg"?>" class="card-img-top" >    
        <div class="card-body">    
          <div class="container">
          <div class="row">
          <div class="col"><?=$manga->isAvailable == 0? "Indisponible" : "Disponible"?></div> 
          </div>
            <div class="row">
              <div class="col-4"><a href="<?= ROOT_PATH.'mangaAdmin/'.$manga->id ?>" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0013 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 000-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"></path></svg></a></div>
              <div class="col-4"><a href="<?= ROOT_PATH.'mangaAdmin/'.$manga->id.'/edit' ?>" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 16" width="14" height="16"><path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 011.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path></svg></a></div>
              <div class="col-4"><a href="<?= ROOT_PATH.'mangaAdmin/'.$manga->id.'/delete' ?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 16" width="14" height="16"><path fill-rule="evenodd" d="M7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm0 1.3c1.3 0 2.5.44 3.47 1.17l-8 8A5.755 5.755 0 011.3 8c0-3.14 2.56-5.7 5.7-5.7zm0 11.41c-1.3 0-2.5-.44-3.47-1.17l8-8c.73.97 1.17 2.17 1.17 3.47 0 3.14-2.56 5.7-5.7 5.7z"></path></svg></a></div>
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