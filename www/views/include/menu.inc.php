<?php
    $page = explode('/', $_SERVER['REQUEST_URI']);
    $url = $page[count($page)-1];
?>
<header class="navbar">
    <div class="container">
        <div class="navbar-header">
            <h1><a class="navbar-brand" href="<?php $this->utils->generateUrl("/"); ?>">Fame on</a></h1>
        </div>

        <!--<h1 id="logo"><a href="<?php $this->utils->generateUrl("/"); ?>" title="Accueil du site">Fame on</a></h1>-->
        <nav class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($url == 'ranking') echo 'class="active"'; ?>><a href="<?php $this->utils->generateUrl("/ranking"); ?>">Classement</a></li>
                <li <?php if($url == 'profile') echo 'class="active"'; ?>><a href="<?php $this->utils->generateUrl("/profile"); ?>">Profil</a></li>
                <li <?php if($url == 'connexion') echo 'class="active"'; ?>><a href="<?php $this->utils->generateUrl("/connexion"); ?>">Connexion</a></li>
                <li <?php if($url == 'inscription') echo 'class="active"'; ?>><a href="<?php $this->utils->generateUrl("/inscription"); ?>">Inscription</a></li>
                <!--<li><a href="#">Live</a></li>-->
                <!--<li><a href="#">Replay</a></li>-->
                <!--<li><a href="#">Candidature</a></li>-->
                <!--<li><a href="#">Contact</a></li>-->
            </ul>
        </nav>
    </div>
</header>