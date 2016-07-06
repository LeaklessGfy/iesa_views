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
      <title>Fame on - Formulaire de participation - La télé-réalité comme vous ne l'avez jamais vu</title>
      <meta name="description" content="">
  </head>

  <body>
    <?php include("include/menu.inc.php"); ?>

    <main id="participe" class="container">
      <div class="row">
        <div class="right-column col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
          <h1 class="text-center"><img src="res/img/participe-toi-aussi.png" alt="Participe toi aussi"></h1>
          <form id="participe-form" class="text-center" method="POST">
            <span class="input">
              <input class="input__field" type="text" name="user[email]" id="user-email" autofocus required>
              <label class="input__label" for="user-email">
                <span class="input__label-content">Email</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="text" name="user[lastname]" id="user-lastname" required>
              <label class="input__label" for="user-lastname">
                <span class="input__label-content">Nom</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="text" name="user[firstname]" id="user-firstname" required>
              <label class="input__label" for="user-firstname">
                <span class="input__label-content">Prénom</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="file" name="user[photo]" id="user-photo">
              <label class="input__label" for="user-photo">
                <span class="input__label-content">Photo de profil</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="text" name="user[age]" id="user-age" required>
              <label class="input__label" for="user-age">
                <span class="input__label-content">Âge</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="text" name="user[adress]" id="user-adresse" required>
              <label class="input__label" for="user-adress">
                <span class="input__label-content">Adresse postale</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="text" name="user[zipcode]" id="user-zipcode" required>
              <label class="input__label" for="user-zipcode">
                <span class="input__label-content">Code postale</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="text" name="user[city]" id="user-city" required>
              <label class="input__label" for="user-city">
                <span class="input__label-content">Ville</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="text" name="user[country]" id="user-country" required>
              <label class="input__label" for="user-country">
                <span class="input__label-content">Pays</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="text" name="user[phone]" id="user-phone" required>
              <label class="input__label" for="user-phone">
                <span class="input__label-content">Téléphone</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="text" name="user[motivations]" id="user-motivations" required>
              <label class="input__label" for="user-motivations">
                <span class="input__label-content">Motivations</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="file" name="user[idcard]" id="user-idcard">
              <label class="input__label" for="user-idcard">
                <span class="input__label-content">Carte d'identité</span>
              </label>
            </span>
            <span class="input">
              <input class="input__field" type="password" name="user[password]" id="user-password" required>
              <label class="input__label" for="user-password">
                <span class="input__label-content">Password</span>
              </label>
            </span>
            <p class="link-initial text-center">En t'inscrivant, tu acceptes les <a href="#">Conditions Générales d'Utilisation</a> et la <a href="#">Politique de confidentialité</a> de Fame On.</p>
            <input class="btn btn-shine" type="submit" value="Inscription" name="action">
          </form>
        </div>
      </div>
    </main>

      <?php include("include/footer.inc.php"); ?>
  </body>

  </html>