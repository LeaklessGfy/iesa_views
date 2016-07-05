  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <?php include "include/head.inc.php" ?>
      <title>Fame on - Les candidats de l'émission - La télé-réalité comme vous ne l'avez jamais vu</title>
      <meta name="description" content="">
  </head>

  <body>
    <?php include("include/menu.inc.php"); ?>

      <main id="candidates" class="container">
        <h1 class="text-center"><img src="res/img/decouvrez-et-votez.png" alt="Découvrez et votez pour les candidats"></h1>
          <?php
            if($results != false) {
              foreach ($results as $value) {
                $img = '<img src="res/img/avatar-empty.png" alt="" class="img-thumbnail">';

                if($value['user']['avatar'] != null) {
                  $img = '<img src="res/img/'.  htmlspecialchars($value['user']['avatar'], ENT_QUOTES, 'UTF-8') .'" alt="" class="img-thumbnail">';
                }

                echo '<figure class="col-xs-6 col-sm-4 col-md-2">' .
                $img .
                '<figcaption>' .  htmlspecialchars($value['user']['name'], ENT_QUOTES, 'UTF-8') . ' ' .  htmlspecialchars($value['user']['lastname'], ENT_QUOTES, 'UTF-8') . '</figcaption>' .
                '</figure>';
              }
            }
          ?>

        <div class="row list-candidates">
          <div class="col-md-4 overflow-hidden no-padding">
            <a href="<?php $this->utils->generateUrl("/candidat"); ?>">
              <figure class="col-sm-4 col-md-12">
                <img src="res/img/avatar/1.jpg" alt="">
                <figcaption><span class="name first">Didier</span><br><span class="name last">Selbonne</span></figcaption>
              </figure>
            </a>
            <a href="<?php $this->utils->generateUrl("/candidat"); ?>">
              <figure class="col-sm-4 col-md-6">
                <img src="res/img/avatar/2.jpg" alt="">
                <figcaption><span class="name first">Alexandre</span><br><span class="name last">Dupontel</span></figcaption>
              </figure>
            </a>
            <a href="<?php $this->utils->generateUrl("/candidat"); ?>">
              <figure class="col-sm-4 col-md-6">
                <img src="res/img/avatar/3.jpg" alt="">
                <figcaption><span class="name first">Julie</span><br><span class="name last">Lamartine</span></figcaption>
              </figure>
            </a>
          </div>
          
          <div class="col-md-4 overflow-hidden no-padding">
            <a href="<?php $this->utils->generateUrl("/candidat"); ?>">
              <figure class="col-sm-4 col-md-6">
                <img src="res/img/avatar/4.jpg" alt="">
                <figcaption><span class="name first">Kamel</span><br><span class="name last">Garkouch</span></figcaption>
              </figure>
            </a>
            <a href="<?php $this->utils->generateUrl("/candidat"); ?>">
              <figure class="col-sm-4 col-md-6">
                <img src="res/img/avatar/5.jpg" alt="">
                <figcaption><span class="name first">Jean</span><br><span class="name last">Durando</span></figcaption>
              </figure>
            </a>
            <a href="<?php $this->utils->generateUrl("/candidat"); ?>">
              <figure class="col-sm-4 col-md-12">
                <img src="res/img/avatar/6.jpg" alt="">
                <figcaption><span class="name first">Jeanne</span><br><span class="name last">Bakker</span></figcaption>
              </figure>
            </a>
          </div>
          
          <div class="col-md-4 overflow-hidden no-padding">
            <a href="<?php $this->utils->generateUrl("/candidat"); ?>">
              <figure class="col-sm-4 col-md-12">
                <img src="res/img/avatar/7.jpg" alt="">
                <figcaption><span class="name first">Floriane</span><br><span class="name last">Cadio</span></figcaption>
              </figure>
            </a>
            <a href="<?php $this->utils->generateUrl("/candidat"); ?>">
              <figure class="col-sm-4 col-md-6">
                <img src="res/img/avatar/8.jpg" alt="">
                <figcaption><span class="name first">Damien</span><br><span class="name last">Flosi</span></figcaption>
              </figure>
            </a>
            <a href="<?php $this->utils->generateUrl("/candidat"); ?>">
              <figure class="col-sm-4 col-md-6">
                <img src="res/img/avatar/9.jpg" alt="">
                <figcaption><span class="name first">Amanda</span><br><span class="name last">Erich</span></figcaption>
              </figure>
            </a>
          </div>
        </div>
      </main>

      <?php include("include/footer.inc.php"); ?>
  </body>

  </html>