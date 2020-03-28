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
      <td>
          <a href="<?=ROOT_PATH?>account/<?= $user->login ?>" class="btn btn-primary">Voir<a>
          <a href="<?=ROOT_PATH?>edit/<?= $user->login ?>" class="btn btn-warning">Editer<a>
          <?php if($_SESSION['login'] != $user->login): ?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal<?= $user->id?>">
              Supprimer
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modal<?= $user->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      Voulez-vous vraiment supprimer l'utilisateur <?= $user->login?> ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <a href="<?=ROOT_PATH?>delete?login=<?= $user->login?>" class="btn btn-danger">Supprimer<a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif?>
      </td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>
<?php
  $title = "Administration";
  $content = ob_get_clean();
  include 'includes/template.php';
?>
