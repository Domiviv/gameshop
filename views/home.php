<?php
ob_start() ?>
&nbsp;
<div class="container">
  <div class="row">
  <?php foreach($games as $game):?>
    <div class="card border-secondary mb-3" style="width: 13.5rem;">
      <div class="card-body">
        <h6 class="card-title" style="text-align: center"><?=$game['title']?></h6>
      </div>
      <div style="text-align: center"><img style="width: 6rem; text-align: center;" src="/img/games/gameNb<?=$game['id']?>.jpg" alt="" ></div>&nbsp;
      <p class="card-text" style="text-align: center"><?=$game['price']?>€</p>
      <form method="get" action="game_sheet">
        <p style="text-align: center">
            <input type="hidden" name="id" value=<?=$game['id']?>>
            <button type="submit" style="width: 95%;" class="btn btn-primary">Voir la fiche</button>
        </p>
      </form>
      <form method="post" action="add_to_cart">
        <p style="text-align: center">
          <input type="hidden" name="id" value=<?=$game['id']?>>
          <button type="button" style="width: 95%;" class="btn btn-success">Ajouter au panier</button>
        </p>
      </form>
    </div>
    &nbsp;&nbsp;
  <?php endforeach ?>
  </div>
</div>
<?php
$title = 'Accueil';
$content = ob_get_clean();
include 'includes/layout.php';
?>
