<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include "include/head.inc.php" ?>
    <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu</title>
    <meta name="description" content="">
</head>

<body>
  <?php include("include/menu.inc.php"); ?>

    <main id="homepage-landing" class="container">
      <div class="row">
        <div class="left-column col-xs-12 col-sm-6"><img class="w100" src="res/img/logo-lg.png" alt="Logo Fame On"></div>
        <div class="right-column col-xs-12 col-sm-6">
          <h1><img src="res/img/c-est-quoi.png" alt="C'est quoi ?"></h1>
          <p class="add-border-before">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
          <p><a href="" class="add-arrow-after">Voir la vidéo</a></p>
          <p><a href="<?php $this->utils->generateUrl("/connexion"); ?>" title="S'enregistrer pour participer à l'émission" class="btn btn-shine">Participer</a></p>
        </div>
      </div>
    </main>

    <?php include("include/footer.inc.php"); ?>
</body>

</html>