<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include "include/head.inc.php" ?>
    <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu - Connexion</title>
    <meta name="description" content="">
    <script>
      // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          testAPI();
        } else if (response.status === 'not_authorized') {
          // The person is logged into Facebook, but not your app.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into this app.';
        } else {
          // The person is not logged into Facebook, so we're not sure if
          // they are logged into this app or not.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into Facebook.';
        }
      }

      // This function is called when someone finishes with the Login
      // Button.  See the onlogin handler attached to it in the sample
      // code below.
      function checkLoginState() {
        FB.getLoginStatus(function (response) {
          statusChangeCallback(response);
        });
      }

      window.fbAsyncInit = function () {
        FB.init({
          appId: '215141772218363',
          cookie: true, // enable cookies to allow the server to access 
          // the session
          xfbml: true, // parse social plugins on this page
          version: 'v2.2' // use version 2.2
        });

        // Now that we've initialized the JavaScript SDK, we call 
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function (response) {
          statusChangeCallback(response);
        });

      };

      // Load the SDK asynchronously
      (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      // Here we run a very simple test of the Graph API after login is
      // successful.  See statusChangeCallback() for when this call is made.
      function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function (response) {
          console.log('Successful login for: ' + response.name);
          console.log(JSON.stringify(response));
          document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
        });
      }
    </script>
</head>

<body>
  <?php include("include/menu.inc.php"); ?>

    <main class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <h2 class="text-center">Connexion</h2>
          <form method="POST">
            <div class="form-group input-group">
              <label class="input-group-addon" for="user-email">Email</label>
              <input type="text" name="user[email]" class="form-control" id="user-email">
            </div>
            <div class="form-group input-group">
              <label class="input-group-addon" for="user-password">Mot de passe</label>
              <input type="password" name="user[password]" class="form-control" id="user-password">
            </div>
            <input class="btn btn-success" type="submit" value="Valider" name="action" />
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <h2 class="text-center">Facebook connect</h2>
          <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
          </fb:login-button>
          <div id="status">
          </div>
        </div>
      </div>
    </main>

    <?php include("include/footer.inc.php"); ?>
</body>

</html>