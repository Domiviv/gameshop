<?php
  ob_start();
?>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Gestion
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item" href="gamespan">Gérer les jeux</a>
    <a class="dropdown-item" href="users">Gérer les utilisateurs</a>
    <a class="dropdown-item" href="orders">Gérer les commandes</a>
  </div>
</li>
<?php
  $admin = ob_get_clean();
  ob_start();
?>
<a class="btn btn-outline-light" href="signup" role="button">S'inscrire</a>
&nbsp;
<a class="btn btn-outline-light" href="login" role="button">S'identifier</a>
<?php
  $disconnected = ob_get_clean();
  ob_start();
?>
  <a role="button" href="cart" class="btn btn-info">
    <img src="/img/icon-cart.png" width="20" height="20" alt="icon-cart"> &nbsp;&nbsp;Panier
    <span class="badge badge-light">4</span>
  </a>
  &nbsp;

<?php
  $notadmin=ob_get_clean();
  ob_start();
?>
  <a class="btn btn-light" href="profile" role="button"><?php echo $_SESSION['login']?></a>
  &nbsp;
  <a class="btn btn-outline-light" href="logout">Se déconnecter</a>
<?php
  $connected = ob_get_clean();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="btn btn-outline-light" href="index">GameShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      &nbsp;&nbsp;
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Cherchez un jeu" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Recherche</button>
      </form>
      <?php
        if(!empty($_SESSION['login']) AND $_SESSION['role_id']==1){
          echo $admin;
        }
      ?>
    </ul>

    <?php
      if(empty($_SESSION['login'])){
        echo $disconnected;
      }
      if(!empty($_SESSION['login'])){
        if($_SESSION['role_id']!=1) echo $notadmin;
        echo $connected;
      }
    ?>
  </div>
</nav>
