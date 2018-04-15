<?php ob_start() ?>


  <table class="table table-hover table-striped">
      <thead>
          <tr>
              <th scope="col">Image</th>
              <th scope="col">Titre</th>
              <th scope="col">Prix</th>
          </tr>
      </thead>
      <tbody>
        <?php foreach($items as $item):?>
          <tr>
              <td><img style="width: 2rem; text-align: center;" src="/img/games/gameNb<?=$item['item_id']?>.jpg" alt="" ></td>
              <td><?=$item['title']?></td>
              <td><?=$item['price']?>€</td>
          </tr>
        <?php endforeach ?>
      </tbody>
  </table>
<?php
$title = 'Panier';
$content = ob_get_clean();
include 'includes/layout.php';
?>
