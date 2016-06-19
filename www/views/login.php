<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include "include/head.inc.php" ?>
    <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu - Connexion</title>
    <meta name="description" content="">
</head>

<body>
  <?php include("include/menu.inc.php"); ?>

    <main class="container">
      <div class="row">
        <div class="img col-md-4 col-md-offset-4">
          <h2 class="text-center">Connexion</h2>
          <form method="POST">
            <div class="form-group input-group">
              <label class="input-group-addon" for="user-username">Pseudo</label>
              <input type="text" name="user[username]" class="form-control" id="user-username">
            </div>
            <div class="form-group input-group">
              <label class="input-group-addon" for="user-password">Mot de passe</label>
              <input type="password" name="user[password]" class="form-control" id="user-password">
            </div>
            <input class="btn btn-success" type="submit" value="Valider" name="action" />
          </form>
        </div>
      </div>
    </main>

    <?php include("include/footer.inc.php"); ?>
</body>

</html>