<?php
    $page = explode('/', $_SERVER['REQUEST_URI']);
    $url = $page[count($page)-1];
?>
<nav class="navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php $this->utils->generateUrl("/"); ?>"><img src="res/img/logo.png" alt="Fame On"></a>
    </div>

    <div class="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a <?php if($url=='ranking') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/ranking"); ?>">Classement</a></li>
        <li><a <?php if($url=='candidats') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/candidats"); ?>">Candidats</a></li>
        <li><a <?php if($url=='profile') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/profile"); ?>">Profil</a></li>
        <li><a <?php if($url=='inscription') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/inscription"); ?>">Inscription</a></li>
        <li><a <?php if($url=='connexion') echo 'class="active"'; ?> href="<?php $this->utils->generateUrl("/connexion"); ?>">Connexion</a></li>
        <!--<li><a href="#">Replay</a></li>-->
        <!--<li><a href="#">Candidature</a></li>-->
      </ul>
    </div>
  </div>
</nav>