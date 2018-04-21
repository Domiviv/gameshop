<div class="modal fade" id="editInfo<?= $game['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editer les informations sur le jeu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="delete_game">
            <input type="hidden" name="id" value=<?=$game['id']?>>
            <button class="btn btn-outline-danger" type="submit">Supprimer</button>
        </form>
      </div>

    </div>
  </div>
</div>
