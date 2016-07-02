  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <?php include "include/head.inc.php" ?>
      <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu</title>
      <meta name="description" content="">
  </head>

  <body>
    <?php include("include/menu.inc.php"); ?>

      <section id="candidates" class="container-fluid text-center">
        <h1 class="text-center">Candidats</h1>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
          <?php 
            if($results != false) {
              foreach ($results as $value) {
                $img = '<img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">';

                if($value['user']['avatar'] != null) {
                  $img = '<img src="res/img/'.$value['user']['avatar'].'" alt="" class="img-thumbnail">';
                }

                echo '<figure class="col-xs-6 col-sm-4 col-md-2">' .
                $img .
                '<figcaption>' . $value['user']['name'] . ' ' . $value['user']['lastname'] . '</figcaption>' .
                '</figure>';
              }
            }
          ?>
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
          
          <a  class="btn btn-default" 
              title="Page des candidats" 
              href="<?php $this->utils->generateUrl(" /candidats "); ?>">
              Show more
          </a>
        </div>
      </section>

      <?php include("include/footer.inc.php"); ?>
  </body>

  </html>