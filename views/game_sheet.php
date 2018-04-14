<?php
$mode="normal";
ob_start() ?>
  <button type="button" id="update" class="btn btn-primary" onclick="saveEdits()">Enregistrer les modifications</button>
<?php
$check_edit = ob_get_clean();
ob_start()
?>
<div class="container">
<div class="card">
  <div class="card-header" >
    <img src="/img/games/gameNb<?=$_GET['id']?>.jpg" style="width: 16rem" class="rounded float-left" alt="...">
  </div>
  <div class="card-body">
    <?php
      if(!empty($_SESSION['login']) and strtolower($_SESSION['login'])=='admin'){
        $mode = "edit";
      }
    ?>
    <?php if($mode=='edit') echo $check_edit; ?>
    <h4 class="card-title"><?=$game['title']?></h4>
    <div id="edit" contenteditable="<?php if($mode=='edit'){ echo 'true';}else{ echo 'false';}?>">
      Contenu éditable
    </div>
  </div>
  <div class="card-footer text-muted">

  </div>
</div>
</div>
<?php
$content = ob_get_clean();
include 'includes/layout.php';
?>
