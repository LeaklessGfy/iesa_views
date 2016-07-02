<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include "include/head.inc.php" ?>
    <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu</title>
    <meta name="description" content="">
</head>

<body>
  <?php include("include/menu.inc.php"); ?>
    <main class="container">
      <div class="row">
        <div class="col-sm-6">
          <a href="http://twitter.com/intent/tweet/?url=http://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>&text=&via=AntoineBarilt #AntoineBarilt #FabLab">Partager sur Twitter</a>
          <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>', 'facebook_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');">Partager sur Facebook</a>
        </div>
        <div class="col-sm-6">
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form" method="POST">
            <div class="form-group">
              <label for="name">Prénom: </label>
              <input type="text" class="form-control" id="name" name="user[name]" value="<?php echo htmlspecialchars($user->getName(), ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
              <label for="lastname">Nom: </label>
              <input type="text" class="form-control" id="lastname" name="user[lastname]" value="<?php echo htmlspecialchars($user->getLastname(), ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
              <label for="age">Age: </label>
              <input type="text" class="form-control" id="age" name="user[age]" value="<?php echo htmlspecialchars($user->getAge(), ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
              <label for="email">Email: </label>
              <input type="text" class="form-control" id="email" name="user[email]" value="<?php echo htmlspecialchars($user->getEmail(), ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
              <label for="facebook">Facebook: </label>
              <input type="text" class="form-control" id="facebook" name="user[id_facebook]" value="<?php echo htmlspecialchars($user->getFacebook(), ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
              <label for="snapchat">Snapchat: </label>
              <input type="text" class="form-control" id="snapchat" name="user[id_snapchat]" value="<?php echo htmlspecialchars($user->getSnapchat(), ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-success" value="Valider">
            </div>
          </form>
        </div>
      </div>
    </main>

    <?php include("include/footer.inc.php"); ?>
</body>
</html>
