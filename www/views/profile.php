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
                <div class="col-md-12">
                    <form class="form" method="POST">
                        <div class="form-group">
                            <label for="name">Prénom: </label>
                            <input type="text" class="form-control" id="name" name="user[name]" value="<?php echo $user->getName() ?>">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Nom: </label>
                            <input type="text" class="form-control" id="lastname" name="user[lastname]" value="<?php echo $user->getLastname() ?>">
                        </div>

                        <div class="form-group">
                            <label for="age">Age: </label>
                            <input type="text" class="form-control" id="age" name="user[age]" value="<?php echo $user->getAge() ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="text" class="form-control" id="email" name="user[email]" value="<?php echo $user->getEmail() ?>">
                        </div>

                        <div class="form-group">
                            <label for="facebook">Facebook: </label>
                            <input type="text" class="form-control" id="facebook" name="user[id_facebook]" value="<?php echo $user->getFacebook() ?>">
                        </div>

                        <div class="form-group">
                            <label for="snapchat">Snapchat: </label>
                            <input type="text" class="form-control" id="snapchat" name="user[id_snapchat]" value="<?php echo $user->getSnapchat() ?>">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Valider">
                        </div>
                    </form>
                </div>
            </div>

            <?php include("/include/footer.inc.php"); ?>
    </body>

    </html>