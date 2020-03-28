<?php ob_start()?>

<img class="rounded-circle mx-auto d-block img-thumbnail" src="<?php echo $grav_url; ?>" alt="" />
<br>
Identifiant: <?= $user->id?>
<br>
Login: <?= $user->login?>
<br>
Email: <?= $user->email?>
<br>
Nom: <?= $user->nom ?>
<br>
Prénom: <?= $user->prenom ?>
<br>
Adresse: <?= $user->adresse ?>
<br>
Numéro de téléphone: <?= $user->numTel?>
<br>
Date de Naissance: <?= $user->dateNaissance?>
<br><br>
<a href="<?=ROOT_PATH?>edit/<?= $user->login?>" class="btn btn-warning">Editer</a>

<?php
    $title = "Profil ";
    $content = ob_get_clean();
    include 'includes/template.php';
?>
