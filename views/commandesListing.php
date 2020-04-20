<?php ob_start(); ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Montant</th>
      <th scope="col">Identifiant client</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($commandes as $com):?>
    <tr>
        <th scope="row"><?= $com->date ?></th>
        <td><?= $com->montant ?></td>
        <td><?= $com->nom.' '.$com->prenom ?></td>
        <td>
          <a href="<?=ROOT_PATH?>commande/<?= $com->id ?>" class="btn btn-primary">Voir<a>
        </td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>

<?php
  $title = "Listing commande client";
  $content = ob_get_clean();
?>
