<?php ob_start(); ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Volume</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($list as $item):?>
    <tr>
        <th scope="row"><?= $item->title ?></th>
        <td><?= $item->volume ?></td>
        <td><?= $item->prix ?></td>
        <td>
            <a href="<?= ROOT_PATH.'manga/'.$item->id ?>" class="btn btn-primary">Voir le détail</a>
            <a href="<?= ROOT_PATH.'manga/'.$item->id ?>" class="btn btn-danger">Supprimer</a>
        </td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>

<?php
    $title="Detail de votre panier";
    $content= ob_get_clean();
    include 'includes/template.php';
?>