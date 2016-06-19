<header class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <h1><a class="navbar-brand" href="<?php $this->utils->generateUrl("/"); ?>">Fame on</a></h1>
        </div>

        <!--<h1 id="logo"><a href="<?php $this->utils->generateUrl("/"); ?>" title="Accueil du site">Fame on</a></h1>-->
        <nav class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Live</a></li>
                <li><a href="#">Replay</a></li>
                <li><a href="#">Candidature</a></li>
                <li><a href="<?php $this->utils->generateUrl("/ranking"); ?>">Classement</a></li>
                <li><a href="<?php $this->utils->generateUrl("/profile"); ?>">Profil</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="<?php $this->utils->generateUrl("/connexion"); ?>">Connexion</a></li>
                <li><a href="#">Inscription</a></li>
            </ul>
        </nav>
    </div>
</header>