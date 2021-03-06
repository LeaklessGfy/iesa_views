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
      <title>Fame on - Live TV - La télé-réalité comme vous ne l'avez jamais vu</title>
      <meta name="description" content="">
  </head>

  <body>
    <?php include("include/menu.inc.php"); ?>

    <main id="homepage-live" class="container">
      <section id="block-player" class="row">
        <div id="player-youtube" class="col-md-8">
          <div class="embed-container">
            <iframe src='http://www.youtube.com/embed/QHAm0Hpikzg?autohide=<?php print $paramYoutube['autohide'] ?>&autoplay=<?php print $paramYoutube['autoplay'] ?>&color=<?php print $paramYoutube['color'] ?>&showinfo=<?php print $paramYoutube['showinfo'] ?>&rel=<?php print $paramYoutube['rel'] ?>&controls=<?php print $paramYoutube['controls'] ?>' frameborder='0' allowfullscreen></iframe>
          </div>
        </div>
        <aside id="aside-player" class="col-md-4">
          <div class="slider-live-tweet-candidates">
            <div class="row slide-candidates">
              <div class="bloc-overflow-hidden">
              <?php foreach ($candidates as $key => $value) {
                echo '<div class="col-xs-12 candidate king-of-fame">' .
                '<div class="col-xs-4 col-md-4">' .
                '<img src="res/img/avatar/'.$value['user']['avatar'].'" alt="">' .
                '</div>' .
                '<div class="col-xs-7 col-xs-offset-1 col-md-7">' .
                '<a href="#"><span>'. $value['user']['name'] .'</span> ' . $value['user']['lastname'] . '</a>' .
                '<p>'.
                '<span class="icon-heart-like" onclick="window.location =\'' . $this->utils->getUrl('/api/participate') . "/" . $value['id'] .'\';"></span><span class="like-me-a-lot">' . $value['hype'] . '</span>' .
                '<span class="icon-share-ico"></span><a href="" class="share-me-a-lot">Partager son profil</a>' .
                '</p>' .
                '</div></div>';
              } ?>
              </div>
            </div>
            <div class="row">
              <div class="slide-twitter-timeline col-xs-12">
                <a class="twitter-timeline" href="https://twitter.com/hashtag/competIESAmmd?f=tweets&vertical=default" data-widget-id="749622728680939520" data-chrome=" noheader nofooter noborders">Tweets sur #competIESAmmd</a>
                <!--<a class="twitter-timeline" href="https://twitter.com/Alize_FameOnTV">Tweets by Alize_FameOnTV</a>-->
              </div>
            </div>
          </div>
        </aside>
      </section>

      <section id="vote-activities" class="row text-center">
        <h1><img src="res/img/vote-pour-les-activites.png" alt="Vote pour les activités de la maison"></h1>
        <div class="slider-activities col-xs-12">

          <?php 
            foreach ($results as $key => $value) {
              echo '<div class="col-xs-12">' .
              '<h2>Activité ' . ($key + 1) . ' : ' . $value['title'] . '</h2>' .
              '<p>' . $value['description'] . '</p>' .
              '<button onclick="window.location =\'' . $this->utils->getUrl('/api/participate') . "/" . $value['id'] .'\';" class="vote-yes icon-vote"></button>' .
              '<div class="row">' . $value['hype'] . '</div>' .
              '</div>';
            } 
          ?>

        </div>
      </section>

      <section class="row text-center">
        <h1><img src="res/img/participe-toi-aussi.png" alt="Participe toi aussi"><br><span class="title-next text-center">à l'émission en <br>t'inscrivant sur le site</span></h1>
        <p><a href="<?php $this->utils->generateUrl("/connexion"); ?>" title="S'enregistrer pour participer à l'émission" class="btn btn-shine">Participer</a></p>
      </section>
    </main>

      <?php include("include/footer.inc.php"); ?>
  </body>

  </html>