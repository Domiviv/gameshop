<?php
ob_start();
?>
<div class="container logbox">
  <h2>Ajouter un jeu</h2></br>
    <form method="post" action="add_game">
        <div class="form-group">
            <label for="title">Titre du jeu</label>
            <input type="text" class="form-control" id="gtitle" name="gtitle">
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
<?php
$content = ob_get_clean();
$title = 'Ajouter un jeu';
include 'includes/layout.php';
?>
