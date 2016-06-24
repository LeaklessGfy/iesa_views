<?php
    $page = explode('/', $_SERVER['REQUEST_URI']);
    $url = $page[count($page)-1];
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php $this->utils->generateUrl("/"); ?>">Fame On</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if($url=='live') echo 'class="active"'; ?>><a href="<?php $this->utils->generateUrl("/live"); ?>">Live</a></li>
        <li <?php if($url=='ranking') echo 'class="active"'; ?>><a href="<?php $this->utils->generateUrl("/ranking"); ?>">Classement</a></li>
        <li <?php if($url=='profile') echo 'class="active"'; ?>><a href="<?php $this->utils->generateUrl("/profile"); ?>">Profil</a></li>
        <li <?php if($url=='connexion') echo 'class="active"'; ?>><a href="<?php $this->utils->generateUrl("/connexion"); ?>">Connexion</a></li>
        <li <?php if($url=='inscription') echo 'class="active"'; ?>><a href="<?php $this->utils->generateUrl("/inscription"); ?>">Inscription</a></li>
        <!--<li><a href="#">Replay</a></li>-->
        <!--<li><a href="#">Candidature</a></li>-->
        <!--<li><a href="#">Contact</a></li>-->
      </ul>
    </div>
  </div>
</nav>