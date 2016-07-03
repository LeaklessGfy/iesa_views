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
              <div class="col-xs-12 candidate king-of-fame">
                <div class="col-xs-4 col-md-4">
                  <img src="res/img/test.png" alt="">
                </div>
                <div class="col-xs-7 col-xs-offset-1 col-md-7">
                  <a href="#"><span>Kaylee</span> Carlson</a>
                  <p>
                    <span class="like-me-a-lot">1723</span>
                    <a href="" class="share-me-a-lot">Partager son profil</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="slide-twitter-timeline col-xs-12">
                <!--<a class="twitter-timeline" href="https://twitter.com/hashtag/vivatech?f=tweets&vertical=default" data-widget-id="748484102437933057">Tweets sur #vivatech</a>-->

                <a class="twitter-timeline" href="https://twitter.com/hashtag/competIESAmmd?f=tweets&vertical=default" data-widget-id="749622728680939520" data-chrome=" noheader nofooter noborders">Tweets sur #competIESAmmd</a>

                <!--<a class="twitter-timeline" href="https://twitter.com/Alize_FameOnTV">Tweets by Alize_FameOnTV</a>-->
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

      <section>
        <h1 class="text-center"><img src="res/img/participe-toi-aussi.png" alt="Participe toi aussi"><br><span class="title-next text-center">à l'émission en <br>t'inscrivant sur le site</span></h1>
      </section>
     
      <section id="candidates" class="container-fluid text-center">
        <h1 class="text-center">Candidats</h1>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-6 col-sm-4 col-md-2">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <a class="btn btn-default" title="Page des candidats" href="<?php $this->utils->generateUrl(" /candidats "); ?>">Show more</a>
        </div>
      </section>

      <!--<section id="replay-playlist" class="container-fluid text-center">
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
      </section>-->
    </main>

      <?php include("include/footer.inc.php"); ?>
  </body>

  </html>