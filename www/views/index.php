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

      <section id="block-player">
        <div id="player-youtube">
          <div class="embed-container">
            <iframe src='http://www.youtube.com/embed/qJ_Tw0w3lLA?autohide=<?php print $paramYoutube['autohide'] ?>&autoplay=<?php print $paramYoutube['autoplay'] ?>&color=<?php print $paramYoutube['color'] ?>&showinfo=<?php print $paramYoutube['showinfo'] ?>&rel=<?php print $paramYoutube['rel'] ?>&controls=<?php print $paramYoutube['controls'] ?>' frameborder='0' allowfullscreen></iframe>
          </div>
        </div>
        <aside id="aside-player">
          <div class="slider-live-tweet-candidates">
            <div class="row">
              <div class="col-xs-12">
                <h2>Liste des candidats</h2>
              </div>
            </div>
            <div class="row">
              <div class="slide-twitter-timeline col-xs-12">
                <a class="twitter-timeline" href="https://twitter.com/hashtag/vivatech?f=tweets&vertical=default" data-widget-id="748484102437933057">Tweets sur #vivatech</a>
              </div>
            </div>
          </div>
        </aside>
      </section>

      <section id="vote-activities" class="container-fluid text-center">
        <h1>Vote pour les activités de la maison</h1>
        <div class="slider-activities">
          <!--<div class="row">
          <button type="button" data-activity="1" class="col-xs-6 col-md-3 btn-activities btn-success">Activité 1</button>
          <button type="button" data-activity="2" class="col-xs-6 col-md-3 btn-activities active-nok">Activité 2</button>
          <button type="button" data-activity="3" class="col-xs-6 col-md-3 btn-activities active-nok">Activité 3</button>
          <button type="button" data-activity="4" class="col-xs-6 col-md-3 btn-activities active-nok">Activité 4</button>
        </div>-->

          <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
              <figure class="col-xs-12 col-md-2 col-md-offset-5">
                <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
              </figure>
            </div>
            <div class="col-xs-12">
              <h2>Activité 1</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget mi vel arcu accumsan molestie. Proin non facilisis massa, quis aliquam sem. Vivamus lobortis purus eros, placerat egestas felis varius non.</p>
              <button type="button">pouce en l'air</button>
              <button type="button">pas content</button>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
              <figure class="col-xs-12 col-md-2 col-md-offset-5">
                <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
              </figure>
            </div>
            <div class="col-xs-12">
              <h2>Activité 2</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget mi vel arcu accumsan molestie. Proin non facilisis massa, quis aliquam sem. Vivamus lobortis purus eros, placerat egestas felis varius non.</p>
              <button type="button">pouce en l'air</button>
              <button type="button">pas content</button>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
              <figure class="col-xs-12 col-md-2 col-md-offset-5">
                <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
              </figure>
            </div>
            <div class="col-xs-12">
              <h2>Activité 3</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget mi vel arcu accumsan molestie. Proin non facilisis massa, quis aliquam sem. Vivamus lobortis purus eros, placerat egestas felis varius non.</p>
              <button type="button">pouce en l'air</button>
              <button type="button">pas content</button>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
              <figure class="col-xs-12 col-md-2 col-md-offset-5">
                <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
              </figure>
            </div>
            <div class="col-xs-12">
              <h2>Activité 4</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget mi vel arcu accumsan molestie. Proin non facilisis massa, quis aliquam sem. Vivamus lobortis purus eros, placerat egestas felis varius non.</p>
              <button type="button">pouce en l'air</button>
              <button type="button">pas content</button>
            </div>
          </div>
        </div>
      </section>

      <section id="candidates" class="container-fluid text-center">
        <h1 class="text-center">Candidats</h1>
        <div class="col-xs-10 col-xs-offset-1">
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
        </div>
        <div class="col-xs-10 col-xs-offset-1">
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <a class="btn btn-lg btn-primary" title="Page des candidats" href="<?php $this->utils->generateUrl(" /candidats "); ?>">Show more</a>
        </div>
      </section>

      <section id="replay-playlist" class="container-fluid text-center">
        <h1>Moments forts</h1>
        <div class="col-xs-4">
          <div class="embed-container">
            <iframe src="https://www.youtube.com/embed/qJ_Tw0w3lLA" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="embed-container">
            <iframe src="https://www.youtube.com/embed/qJ_Tw0w3lLA" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="embed-container">
            <iframe src="https://www.youtube.com/embed/qJ_Tw0w3lLA" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </section>

      <?php include("include/footer.inc.php"); ?>
  </body>

  </html>