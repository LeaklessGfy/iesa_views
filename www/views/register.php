<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include "include/head.inc.php" ?>
    <title>Fame on - Inscription - La télé-réalité comme vous ne l'avez jamais vu - Connexion</title>
    <meta name="description" content="">
</head>

<body>
  <?php include("include/menu.inc.php"); ?>

    <main class="container">
      <div class="row">
        <div class="left-column col-xs-12 col-sm-6"><img class="w100" src="res/img/logo-lg.png" alt="Logo Fame On"></div>
        <div class="right-column col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
          <h1 class="text-center"><img src="res/img/inscription.png" alt="Inscription"></h1>
          <form id="connexion" class="text-center" method="POST">
            <span class="input">
              <input class="input__field" type="text" name="user[email]" id="user-email" autofocus required>
              <label class="input__label" for="user-email">
                <span class="input__label-content">Email</span>
            </label>
            </span>
            <span class="input">
              <input class="input__field" type="password" name="user[password]" id="user-password" required>
              <label class="input__label" for="user-password">
                <span class="input__label-content">Mot de passe</span>
            </label>
            </span>
            <input class="btn btn-shine" type="submit" value="S'inscrire" name="action">
          </form>

          <button type="button" class="btn rs-connect rs-connect-fb">S'inscrire avec Facebook</button>
          <button type="button" class="btn rs-connect rs-connect-tw">S'inscrire avec Twitter</button>

          <p class="link-initial text-center">En t'inscrivant, tu acceptes les <a href="#">Conditions Générales d'Utilisation</a> et la <a href="#">Politique de confidentialité</a> de Fame On.</p>
          <p class="link-initial text-center add-border-before border-light"> Tu as déjà un compte ? <a href="<?php $this->utils->generateUrl("/connexion"); ?>" title="Se connecter à Fame On">Connecte toi !</a></p>
        </div>
      </div>
    </main>

    <?php include("include/footer.inc.php"); ?>
      <script src="res/js/classie.min.js"></script>
      <script>
        (function () {
          // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
          if (!String.prototype.trim) {
            (function () {
              // Make sure we trim BOM and NBSP
              var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
              String.prototype.trim = function () {
                return this.replace(rtrim, '');
              };
            })();
          }

          [].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
            // in case the input is already filled..
            if (inputEl.value.trim() !== '') {
              classie.add(inputEl.parentNode, 'input--filled');
            }

            // events:
            inputEl.addEventListener('focus', onInputFocus);
            inputEl.addEventListener('blur', onInputBlur);
          });

          function onInputFocus(ev) {
            classie.add(ev.target.parentNode, 'input--filled');
          }

          function onInputBlur(ev) {
            if (ev.target.value.trim() === '') {
              classie.remove(ev.target.parentNode, 'input--filled');
            }
          }
        })();
      </script>
</body>

</html>