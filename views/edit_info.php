<?php
ob_start();
?>
<div class="container logbox">
    <form method="post" action="apply_infos">
        <?php if(isset($infosEdit)):?>
        <input type="hidden" name="id" value=<?=$infosEdit['id']?>>
        <?php endif?>
        <div class="form-group">
            <label for="editor">Éditeur</label>
            <input type="text" class="form-control" id="editor" name="editor" value="<?php if(isset($infosEdit)) { echo $infosEdit['editor']; }?>">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="<?php if(isset($infosEdit)) { echo $infosEdit['type']; }?>">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
<?php
$content = ob_get_clean();
$title = 'Editer les informations';
include 'includes/layout.php';
?>
