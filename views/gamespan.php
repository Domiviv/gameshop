<?php
ob_start();
?>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th style="text-align: right" scope="col">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jsonImport">Import via JSON</button>
              <?php include 'includes/import_json.php' ?>
              &nbsp;
              <a class="btn btn-success" href="add_game_form" role="button">Ajouter un jeu</a>
            </th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($games as $game):?>
      <tr>
          <th scope="row"><?=$game['id']?></th>
          <td><img style="width: 2rem; text-align: center;" src="/img/games/gameNb<?=$game['id']?>.jpg" alt="" ></td>
          <td><?=$game['title']?></td>
          <td><?=$game['price']?>€</td>
          <td>
              <div class="row">
                  <form action="game">
                      <input type="hidden" name="id" value=<?=$game['id']?>>
                      <button class="btn btn-outline-success" type="submit">Editer</button>
                  </form>
                  &nbsp;
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delgame<?= $game['id']?>">
                      Supprimer
                  </button>
                  <?php include 'includes/delete_game.php' ?>
                  &nbsp;
                  <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#addimg<?= $game['id']?>">
                      Ajouter/changer une image
                  </button>
                  <?php include 'includes/add_image.php' ?>

              </div>
          </td>

      </tr>
      <?php endforeach ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
$title = 'Gestion des jeux';
include 'includes/layout.php';
?>
