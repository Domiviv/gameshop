<?php
$total = 0;
ob_start(); ?>
<div class="container">
  <table class="table table-hover table-striped">
      <thead>
          <tr>
              <th scope="col">Image</th>
              <th scope="col">Titre</th>
              <th scope="col">Actions</td>
              <th scope="col" style ="text-align: right">Prix</th>
          </tr>
      </thead>
      <tbody>

        <?php foreach($items as $item):?>
          <tr>
              <td><img style="width: 2rem; text-align: center;" src="/img/games/gameNb<?=$item['item_id']?>.jpg" alt="" ></td>
              <td><?=$item['title']?></td>
              <td>
                <form method="get" action="remove_from_cart">
                  <input name="id" type="hidden" value=<?=$item['id']?>>
                  <input type="submit" value="&times;" class="btn btn-outline-danger btn-md">
                </form>
              </td>
              <td style ="text-align: right"><?=$item['price']?>€</td>
          </tr>
          <?php $total = $total + $item['price'];?>
        <?php endforeach ?>
      </tbody>
  </table>
  <p class="font-weight-bold" style ="text-align: right">TOTAL&nbsp;&nbsp;</p>
  <p style ="text-align: right"><?=$total?>€&nbsp;&nbsp;</p>

  <form style="text-align: right" method="get" action="purchase">
    <input name="id" type="hidden" value=<?=$item['book_id']?>>
    <input type="submit" value="Payer" class="btn btn-primary">
  </form>
</div>

<?php
$title = 'Panier';
$content1 = ob_get_clean();
ob_start();
?>
</br></br>
  <div class="container">
  <h1 class="display-4">Votre panier est vide!</h1>
    <hr class="my-4">
  <p class="lead">Ajoutez-en depuis la liste des jeux!</p>
  <a class="btn btn-primary btn-lg" href="index" role="button">Accueil</a>
  </div>

<?php
$title = 'Panier';
$content2 = ob_get_clean();

if(isset($_SESSION['cartQt'])){
  if($_SESSION['cartQt']!= 0){
    $content = $content1;
  }
  else{
    $content = $content2;
  }
}
else{
  $content = $content2;
}


include 'includes/layout.php';
?>
