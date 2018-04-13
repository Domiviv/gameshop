<?php
ob_start();
?>
<div class="container logbox">
    <form method="post" action="<?=$action?>">
        <?php if(isset($game)):?>
        <input type="hidden" name="id" value=<?=$game['id']?>>
        <?php endif?>
        <div class="form-group">
            <label for="gtitle">Titre</label>
            <input type="text" class="form-control" id="gtitle" name="gtitle" value=<?php if(isset($game)) { echo $game['title']; }?>>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="text" class="form-control" id="price" name="price" value=<?php if(isset($game)) { echo $game['price']; }?>>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
<?php
$content = ob_get_clean();
include 'includes/layout.php';
?>
