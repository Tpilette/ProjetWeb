<?php ob_start(); ?>

<form action="<?=ROOT_PATH.'mangaAdmin//add'?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="idTitle">Titre</label>
        <input type="text" class="form-control" id="idTitle" name="title">
    </div>
    <div class="form-group">
        <label for="idVolume">Volume</label>
        <input type="text" class="form-control" id="idVolume" name="volume">
    </div>
    <div class="form-group">
        <label for="idPrix">Prix</label>
        <input type="number" min="1" step="any" class="form-control" id="idPrix" name="prix">
    </div>
    <div class="form-group">
        <label for="idAuteur">Auteur</label>
        <input type="text" class="form-control" id="idAuteur" name="auteur">
    </div>
    <div class="form-group">
        <label for="idGenre">Genre</label>
        <input type="text" class="form-control" id="idGenre" name="genre">
    </div>
    <div class="form-group">
        <label for="idEditeur">Editeur</label>
        <input type="text" class="form-control" id="idEditeur" name="editeur">
    </div>
    <div class="form-group">
        <label for="idImage">Image</label>
        <input type="file" id="idImage" name="imageData">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    $title = "Ajouter un Manga";
    $content = ob_get_clean();
?>