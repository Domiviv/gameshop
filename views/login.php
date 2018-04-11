<?php ob_start() ?>
  <div class="container-fluid logbox text-center">
    <form class="form-signin" method="post">
      <img class="mb-4" src="/img/onizuka.jpg" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
      <label for="inputEmail" class="sr-only">Identifiant</label>
      <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Identifiant" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required="">
      <br>
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Se connecter" />
    </form>
  </div>
<?php
$title = 'S\'identifier';
$content = ob_get_clean();
include 'includes/layout.php'
?>
