<?php
  $paramYoutube = array ( // player Youtube embed parameters
    
    // https://developers.google.com/youtube/player_parameters?hl=fr#autohide

    'showinfo' => '0',
    'autohide' => '1',
    'autoplay' => '0',
    'color' => 'red',
    'rel' => '0',
    'controls' => '1',

  );
?>
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
          <p class="add-border-before">La première émission de web‐télé‐réalité faites par et pour les internautes qui te permettra de devenir <span class="bold">LA</span> prochaine <span class="bold">STAR</span> de demain !</p>
          <p><a href="#" title="Voir la vidéo de présentation" class="video-presentation add-arrow-after">Voir la vidéo</a></p>
          <p><a href="<?php $this->utils->generateUrl("/participer"); ?>" title="S'enregistrer pour participer à l'émission" class="btn btn-shine">Participer</a></p>
        </div>
      </div>
    </main>
    
    <section id="homepage-modal" class="container">
      <div class="row">
        <div id="player-youtube" class="col-md-8 col-md-offset-2">
          <div class="embed-container">
            <iframe src='http://www.youtube.com/embed/cCATTZPN13Q?autohide=<?php print $paramYoutube['autohide'] ?>&autoplay=<?php print $paramYoutube['autoplay'] ?>&color=<?php print $paramYoutube['color'] ?>&showinfo=<?php print $paramYoutube['showinfo'] ?>&rel=<?php print $paramYoutube['rel'] ?>&controls=<?php print $paramYoutube['controls'] ?>' frameborder='0' allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <?php include("include/footer.inc.php"); ?>
</body>

</html>