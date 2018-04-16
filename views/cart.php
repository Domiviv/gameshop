<?php
ob_start(); ?>
<div class="container">
  <table class="table table-hover table-striped">
      <thead>
          <tr>
              <th scope="col">Image</th>
              <th scope="col">Titre</th>
              <th scope="col">Prix</th>
              <th scope="col">Actions</td>
          </tr>
      </thead>
      <tbody>

        <?php foreach($items as $item):?>
          <tr>
              <td><img style="width: 2rem; text-align: center;" src="/img/games/gameNb<?=$item['item_id']?>.jpg" alt="" ></td>
              <td><?=$item['title']?></td>
              <td><?=$item['price']?>€</td>
              <td>
                <form method="get" action="remove_from_cart">
                  <input name="id" type="hidden" value=<?=$item['id']?>>
                  <input type="submit" value="&times;" class="btn btn-outline-danger btn-md">
                </form>
              </td>
          </tr>
        <?php endforeach ?>
      </tbody>
  </table>
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
