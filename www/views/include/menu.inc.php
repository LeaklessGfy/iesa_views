<?php
    $page = explode('/', $_SERVER['REQUEST_URI']);
    $url = $page[count($page)-1];
?>
<header class="container">
  <nav class="navbar">

    <form id="login-pop-in" class="col-md-3" method="POST">
      <div class="form-group input-group">
        <label class="input-group-addon" for="user-email">Email</label>
        <input type="text" name="user[email]" placeholder="Email" class="form-control" id="user-email">
      </div>
      <div class="form-group input-group">
        <label class="input-group-addon" for="user-password">Mot de passe</label>
        <input type="password" name="user[password]" placeholder="Mot de passe" class="form-control" id="user-password">
      </div>
      <a href="<?php $this->utils->generateUrl("/inscription"); ?>">Pas encore inscrit ?</a>
      <input class="btn btn-dark" type="submit" value="On y va !" name="action" />
    </form>
    <!--<div class="shape"></div>-->

    <div class="col-xs-12">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php $this->utils->generateUrl("/"); ?>"><img src="res/img/home.png" alt="Retourner à l'accueil"></a>
      </div>

      <div class="navbar-collapse">
        <ul class="nav navbar-nav navbar-center">
          <li><a <?php if($url=='profile') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/profile"); ?>">Notre concept</a></li>
          <li><a <?php if($url=='participer') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/participer"); ?>">Participer</a></li>
          <li><a <?php if($url=='live') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/live"); ?>">TV</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a <?php if($url=='connexion') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/connexion"); ?>">Connexion</a></li>
        </ul>
      </div>
    </div>

  </nav>
</header>