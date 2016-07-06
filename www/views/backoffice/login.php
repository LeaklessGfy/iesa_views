<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="no-follow">
  <meta name="author" content="Views IESA">
  <link rel="icon" href="../res/img/favicon.png">
  <meta name="viewport" content="width=device-width">

  <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <meta name="viewport" content="width=device-width">
  <!-- ************** STYLESHEET ************** -->
  <link rel="stylesheet" href="../res/css/bootstrap.min.css">
  <link rel="stylesheet" href="../res/css/main.min.css">
  <!-- ************ END STYLESHEET ************ -->
  <title>Fame On - Administration</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center">Fame On - Administration</h1>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <h1 class="text-center"><img src="../res/img/connexion.png" alt="Connexion"></h1>
        <form id="connexion" class="text-center" method="POST">
          <span class="input">
            <input class="input__field" type="text" name="login" id="login" autofocus>
            <label class="input__label" for="login">
              <span class="input__label-content">Login</span>
            </label>
          </span>
          <span class="input">
            <input class="input__field" type="password" name="password" id="password">
            <label class="input__label" for="password">
              <span class="input__label-content">Mot de passe</span>
            </label>
          </span>
          <input class="btn btn-shine" type="submit" value="Connexion" name="action">
        </form>
        <p class="link-initial text-center">Tu n'as pas de compte ? <br><a href="#" title="Oui ce lien ne sert à rien">Tant pis pour toi, ici c'est pour les admins !</a></p>
      </div>
    </div>
  </div>
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
