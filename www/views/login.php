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
                <div class="col-md-5">
                    <h2>Connexion</h2>
                    <form method="POST">
                        <label>Votre pseudo</label> :
                        <input type="text" name="user[login]" />
                        <label>Votre mot de passe</label> :
                        <input type="text" name="user[password]" />
                        <input type="submit" value="login" name="action" />
                    </form>
                </div>
            </div>

        <?php include("/include/footer.inc.php"); ?>
    </body>

    </html>