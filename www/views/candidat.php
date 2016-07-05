  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <?php include "include/head.inc.php" ?>
      <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu</title>
      <meta name="description" content="">
  </head>

  <body>
    <?php include("include/menu.inc.php"); ?>

      <main id="candidats" class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4 left-column">
            <div class="candidat-background" style="background: url('res/img/avatar/1.jpg') center center / cover"><!-- en prévision du php pour le bg--></div>
            <figure>
              <img src="res/img/avatar/1.jpg" alt="">
              <figcaption><span class="name first">Didier</span><br><span class="name last">Selbonne</span></figcaption>
            </figure>
          </div>

          <div class="col-xs-12 col-md-8 right-column">
            <div class="col-xs-12 candidat-profil-description">
              <p>
                <span class="icon-heart-like"></span><span class="like-me-a-lot">1723</span>
                <span class="age">25 <span>ans</span></span>
                <span class="country"><img src="res/img/france.png" alt=""><span>France, Reims</span></span>
                <span class="astro"><img src="res/img/astro/belier.png" alt=""><span>Bélier</span></span>
              </p>
              <p>
                <img src="res/img/aussi-sur-les-rs.png" alt="">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-youtube"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
              </p>
              
              
            </div>
          </div>
        </div>
      </main>

      <?php include("include/footer.inc.php"); ?>
  </body>

  </html>