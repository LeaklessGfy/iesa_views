<?php

?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <?php include "/include/head.inc.php" ?>
            <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu</title>
            <meta name="description" content="">
    </head>

    <body class="container">
        <?php include("/include/menu.inc.php"); ?>

            <div class="row">
            <div class="img col-md-4 col-md-offset-4">
                <h2 class="text-center">Connexion</h2>
                <form method="POST">
                    <div class="form-group input-group">
                        <label class="input-group-addon" for="user-login">Pseudo</label>
                        <input type="text" name="user[login]" class="form-control" aria-describedby="basic-addon1" id="user-login">
                    </div>
                    <div class="form-group input-group">
                        <label class="input-group-addon" for="user-password">Mot de passe</label>
                        <input type="password" name="user[password]" class="form-control" aria-describedby="basic-addon1" id="user-password">
                    </div>
                    <input class="btn btn-success" type="submit" value="Valider" name="action" />
                </form>
            </div>
        </div>

        <?php include("/include/footer.inc.php"); ?>
    </body>

    </html>