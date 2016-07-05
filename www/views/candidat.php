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
          <div class="col-xs-12 col-md-4 left-column"><!-- bg à rajouter ici en php pour rendre dynamique-->
            <figure>
              <img src="res/img/avatar/1.jpg" alt="">
              <figcaption><span class="name first">Didier</span><br><span class="name last">Selbonne</span></figcaption>
            </figure>
          </div>

          <div class="col-xs-12 col-md-8 right-column">
            <div class="col-xs-12 candidat-profil-description-top">
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
            <div class="col-xs-12 candidat-profil-description-bottom">
              <p>Didier était un grand garçon, aux yeux bleus et aux cheveux blonds… Pour donner à votre phrase plus d’originalité et pour éviter les clichés, vous pouvez avoir recours à un présentatif ou à une tournure exclamative ou interrogative. Son deuxième prénom est Jawad et il aime prêter son appart.</p>
            </div>
          </div>
        </div>
      </main>

      <?php include("include/footer.inc.php"); ?>
  </body>

  </html>