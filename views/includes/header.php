<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="index">GameShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active <?php if($title =='Accueil'){echo 'active';}?>">
        <a class="nav-link" href="index">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">A propos</a>
      </li>
    </ul>
    <?php echo "<a class=\"btn btn-outline-light\" href=\"login\">S'identifier</a>"; ?>
  </div>
</nav>
