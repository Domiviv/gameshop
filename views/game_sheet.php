
<?php
//TAMPON 1 : INFOS
ob_start();
?>
<div class="font-weight-bold lead">Editeur: </div>
<p class="lead"><?=$infos['editor'];?></p>

<div class="font-weight-bold lead">Genre: </div>
<p class="lead"><?=$infos['type'];?></p>
<?php
$info = ob_get_clean();


//TAMPON 2 : BOUTON EDITION
ob_start();
?>
<form style="text-align: right;" method="get" action="edit_info">
  <input type="hidden" name="id" value="<?= $game['id']?>">
  <input type="submit" name="update" class="btn btn-primary" value="Editer les informations">
</form>
<?php
$formEdit=ob_get_clean();

//TAMPON 3 : BOUTON REFRESH
ob_start();
?>
&nbsp;
<form style="text-align: right;" method="get" action="game_sheet">
  <input type="hidden" name="id" value="<?= $game['id']?>">
  <input type="submit" name="update" class="btn btn-success" value="Actualiser">
</form>
<?php
$refresh=ob_get_clean();

//TAMPON 1 : INFOS
ob_start();
?>
<div class="container">
  <div class="card">
    <div class="card-header" >
      <img src="/img/games/gameNb<?=$_GET['id']?>.jpg" style="width: 16rem" class="rounded float-left" alt="...">
    </div>
    <div class="card-body">
      <h4 class="card-title"><?=$game['title']?></h4>
      <hr>
      <?php
      if(isset($infos)){
        echo $info;
      }
      if(!empty($_SESSION['login']) and $_SESSION['role_id']==1){
        echo $formEdit;
      }
      if(isset($flag)){
        echo $refresh;
      }
      ?>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
$title = 'Fiche: ' . $game['title'];
include 'includes/layout.php';
?>
