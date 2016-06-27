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
            <iframe src='http://www.youtube.com/embed/qJ_Tw0w3lLA?autohide=<?php print $paramYoutube[' autohide '] ?>&autoplay=<?php print $paramYoutube['autoplay '] ?>&color=<?php print $paramYoutube['color '] ?>&showinfo=<?php print $paramYoutube['showinfo '] ?>&rel=<?php print $paramYoutube['rel '] ?>&controls=<?php print $paramYoutube['controls '] ?>' frameborder='0' allowfullscreen></iframe>
          </div>
        </div>
        <aside id="chat">
          <iframe src="https://www.youtube.com/live_chat?v=QHAm0Hpikzg&embed_domain=localhost" frameborder="0" allowfullscreen></iframe>
        </aside>
      </section>

      <section id="vote-activities" class="container-fluid text-center">
        <h1>Vote pour les activités de la maison</h1>
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