<?php ob_start()?>

<div class="container">
    <div class="row">
       <div class="col-6">
            <img class="rounded-circle mx-auto d-block img-thumbnail" src="<?php echo $grav_url; ?>" alt="" /></div>
       <div class="col-6">
            <div class="row">
                <div class="col-6">Login: </div>
                <div class="col-6"><?= $user->login?></div>
            </div>
            <div class="row">
                <div class="col-6">E-mail: </div>
                <div class="col-6"><?= $user->email?></div>
            </div>
            <div class="row">
                <div class="col-6">Nom: </div>
                <div class="col-6"><?= $user->nom?></div>
            </div>
            <div class="row">
                <div class="col-6">Prénom: </div>
                <div class="col-6"><?= $user->prenom?></div>
            </div>
            <div class="row">
                <div class="col-6">Adresse: </div>
                <div class="col-6"><?= $user->adresse?></div>
            </div>
            <div class="row">
                <div class="col-6">Numéro de téléphone: </div>
                <div class="col-6"><?= $user->numTel?></div>
            </div>
            <div class="row">
                <div class="col-6">Date de naissance: </div>
                <div class="col-6"><?= $user->dateNaissance?></div>
            </div>
            <div class="row">
                <div class="col-6">
                     <a href="<?=ROOT_PATH?>edit/<?= $user->login?>" class="btn btn-warning">Editer</a>
                </div>
            </div>
       </div>
    </div>    
</div>

<?php
    $title = "Profil ";
    $content = ob_get_clean();
    include 'includes/template.php';
?>
