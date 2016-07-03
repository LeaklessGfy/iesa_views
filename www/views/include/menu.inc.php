<?php
    $page = explode('/', $_SERVER['REQUEST_URI']);
    $url = $page[count($page)-1];
?>
<header class="container">
  <nav class="navbar">
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
          <li><a <?php if($url=='profile') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/profile"); ?>">Participer</a></li>
          <li><a <?php if($url=='inscription') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/inscription"); ?>">TV</a></li>
          <!--<li><a <?php if($url=='ranking') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/ranking"); ?>">Classement</a></li>
          <li><a <?php if($url=='profile') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/profile"); ?>">Profil</a></li>
          <li><a <?php if($url=='inscription') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/inscription"); ?>">Inscription</a></li>
          <!--<li><a href="#">Candidats</a></li>-->
          <!--<li><a href="#">Replay</a></li>-->
          <!--<li><a href="#">Candidature</a></li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a <?php if($url=='connexion') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/connexion"); ?>">Connexion</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>