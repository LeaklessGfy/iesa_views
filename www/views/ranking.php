<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php include "include/head.inc.php" ?>
      <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu - Classement candidats et scénarios</title>
      <meta name="description" content="">
      <style>
        .table > tbody > tr > td,
        .table > tbody > tr > th {
          vertical-align: middle;
          text-align: center;
        }
        
        th {
          text-align: center;
        }
      </style>
  </head>

  <body>
    <?php include("include/menu.inc.php"); ?>

      <main class="container">
        <section class="row">
          <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <h2 class="text-center">Classement</h2>

            <div class="btn-group" role="group">
              <button type="button" class="btn btn-default btn-rank btn-success" data-rank="users">Candidats</button>
              <button type="button" class="btn btn-default btn-rank active-nok" data-rank="scripts">Scénarios</button>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th>Classement</th>
                  <th>Photo profil</th>
                  <th>Nom complet</th>
                  <th>Vote</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  if($results != null) {
                    foreach ($results as $result) { 
                ?>
                  <tr>
                    <th>
                      <?php echo $rankingValue++ ?>
                    </th>
                    <td>
                      <?php $fullname = htmlspecialchars($result['name'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($result['lastname'], ENT_QUOTES, 'UTF-8'); ?>
                      <img src="res/avatar/<?php echo htmlspecialchars($result['avatar'], ENT_QUOTES, 'UTF-8'); ?>" alt="Photo de profil de <?php echo $fullname ?>" width="50px" height="auto">
                    </td>
                    <td>
                      <?php echo htmlspecialchars($result['name'], ENT_QUOTES, 'UTF-8') .' '. htmlspecialchars($result['lastname'], ENT_QUOTES, 'UTF-8'); ?>
                    </td>
                    <td>
                      <?php echo $result['candidate']['hype']; ?>
                    </td>
                  </tr>
                <?php
                    } 
                  } 
                ?>
              </tbody>
            </table>
          </div>
        </section>
      </main>

      <?php include("include/footer.inc.php"); ?>
      <script>var rankingUrl = "<?php $this->utils->generateUrl("/api/ranking"); ?>"</script>
      <script src="res/js/main.js"></script>
  </body>
</html>
