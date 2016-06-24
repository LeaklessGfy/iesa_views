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
    <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu - Live</title>
    <meta name="description" content="">
</head>

<body>
  <?php include("include/menu.inc.php"); ?>

    <main class="container">
      <section class="row text-center">
        <div class="col-xs-12">
          <h2>Live Fame On</h2>
          <p>N'hésitez pas à partager le live !</p>
        </div>
        <div class="col-xs-12 col-md-8">
          <div class='embed-container'>
            <iframe src='http://www.youtube.com/embed/qJ_Tw0w3lLA?autohide=<?php print $paramYoutube['autohide'] ?>&autoplay=<?php print $paramYoutube['autoplay'] ?>&color=<?php print $paramYoutube['color'] ?>&showinfo=<?php print $paramYoutube['showinfo'] ?>&rel=<?php print $paramYoutube['rel'] ?>&controls=<?php print $paramYoutube['controls'] ?>' frameborder='0' allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <iframe height="385" src="https://www.youtube.com/live_chat?v=QHAm0Hpikzg&embed_domain=localhost" frameborder="0" allowfullscreen></iframe>
        </div>
      </section>
    </main>

    <?php include("include/footer.inc.php"); ?>
</body>

</html>