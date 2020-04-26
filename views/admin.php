<?php ob_start(); ?>

<h3>Liste des utilisateurs</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Login</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($users as $user):?>
    <tr>
      <th scope="row"><?= $user->id ?></th>
      <td><?= $user->login ?></td>
      <td><?= $user->email ?></td>
      <td><?= $user->isActive == TRUE? "Actif" : "Inactif" ?></td>
      <td>
          <a href="<?=ROOT_PATH?>account/<?= $user->login ?>" class="btn btn-primary">Voir<a>
          <a href="<?=ROOT_PATH?>user/<?= $user->login ?>/edit" class="btn btn-warning">Editer<a>
          <?php if($_SESSION['login'] != $user->login): ?>
            <a href="<?=ROOT_PATH?>user/<?= $user->login ?>/delete" class="btn btn-danger">Supprimer<a>
          <?php endif?>
      </td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>
<?php
  $content = ob_get_clean();
?>
