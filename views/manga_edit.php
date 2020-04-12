<?php ob_start(); ?>

<form action="<?=ROOT_PATH.'mangaAdmin//edit'?>" method="POST">
    <div class="form-group">
        <label for="idTitle">Titre</label>
        <input type="text" class="form-control" id="idTitle" name="title" value="<?=$manga->title?>" readonly>
    </div>
    <div class="form-group">
        <label for="idVolume">Volume</label>
        <input type="text" class="form-control" id="idVolume" name="volume" value="<?=$manga->volume?>"  readonly>
    </div>
    <div class="form-group">
        <label for="idPrix">Prix</label>
        <input type="number" min="1" step="any" class="form-control" id="idPrix" name="prix" value="<?=$manga->prix?>">
    </div>
    <div class="form-group">
        <label for="idImage">Image</label>
        <input type="texte" class="form-control" id="idImage" name="image" value="<?= $manga->imageData?>_<?= $manga->volume ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    $title = "Editer ".$manga->title;
    $content = ob_get_clean();
?>