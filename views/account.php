<?php
    if(session_id() == '') {session_start();}
    if(empty($_SESSION['login'])){
        header("Location: ".ROOT_PATH."welcome");
        exit();
    }

    $title = "Mon compte";



ob_start()?>
<img class="rounded-circle mx-auto d-block img-thumbnail" src="<?php echo $grav_url; ?>" alt="" />
<br>
Identifiant: <?= $user->id?>
<br>
Login: <?= $user->login?>
<br>
Email: <?= $user->email?>
<br>
Nom: <?= $user->nom?>
<br>
Prénom: <?= $user->prenom?>
<br>
<a href="<?=ROOT_PATH?>edit/<?= $user->login?>" class="btn btn-warning">Editer</a>
<?php
$content = ob_get_clean();
include 'includes/template.php';
?>
