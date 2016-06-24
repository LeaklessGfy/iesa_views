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
        <aside id="chat">
          <iframe src="https://www.youtube.com/live_chat?v=QHAm0Hpikzg&embed_domain=localhost" frameborder="0" allowfullscreen></iframe>
        </aside>
      </section>

      <section id="vote-activities" class="container-fluid">
        <h1 class="text-center">Vote pour les activités de la maison</h1>
        <div class="row">
          <button type="button" data-activity="1" class="col-xs-6 col-md-3 btn-activities btn-success">Activité 1</button>
          <button type="button" data-activity="2" class="col-xs-6 col-md-3 btn-activities active-nok">Activité 2</button>
          <button type="button" data-activity="3" class="col-xs-6 col-md-3 btn-activities active-nok">Activité 3</button>
          <button type="button" data-activity="4" class="col-xs-6 col-md-3 btn-activities active-nok">Activité 4</button>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-offset-3">
          <figure class="col-xs-12 col-md-2 col-md-offset-5">
              <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            </figure>
          </div>
          <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
            <h2>Un titre</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget mi vel arcu accumsan molestie. Proin non facilisis massa, quis aliquam sem. Vivamus lobortis purus eros, placerat egestas felis varius non.</p>
          </div>
        </div>
      </section>

      <section id="candidates" class="container-fluid text-center">
        <h1 class="text-center">Candidats</h1>
        <div class="col-xs-10 col-xs-offset-1">
          <figure class="col-xs-12 col-md-3">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-3">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-3">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <figure class="col-xs-12 col-md-3">
            <img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">
            <figcaption>Nom candidat</figcaption>
          </figure>
          <a class="btn btn-lg btn-primary" title="Page des candidats" href="<?php $this->utils->generateUrl(" /candidats "); ?>">Show more</a>
        </div>

      </section>



      <?php include("include/footer.inc.php"); ?>
  </body>

  </html>