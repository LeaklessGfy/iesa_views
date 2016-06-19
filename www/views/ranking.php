<?php
$rankingValue = 1;
?>
  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <?php include "/include/head.inc.php" ?>
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
    <?php include("/include/menu.inc.php"); ?>

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
                <?php foreach ($results as $result) { ?>
                  <tr>
                    <th>
                      <?php echo $rankingValue++ ?>
                    </th>
                    <td><img src="res/avatar/<?php echo $result['avatar']; ?>" alt="Photo de profil de <?php echo $result['name'].' '. $result['lastname']; ?>" width="50px" height="auto"></td>
                    <td>
                      <?php echo $result['name'].' '. $result['lastname']; ?>
                    </td>
                    <td>N/A</td>
                  </tr>
                  <?php } ?>
              </tbody>
            </table>
          </div>
        </section>
      </main>
      <?php include("/include/footer.inc.php"); ?>
        <script>
          (function ($) {
            $('.btn-rank').on('click', function () {
              if ($(this).hasClass('active-nok')) {
                $('.btn-rank').toggleClass('btn-success');
                $('.btn-rank').toggleClass('active-nok');

                var data = $(this).data('rank');

                $.ajax({
                  url: "<?php $this->utils->generateUrl(" / api / ranking "); ?>",
                  data: {
                    data: data
                  },
                  success: function (result) {

                    var json = JSON.parse(result),
                      html = "",
                      htmlHead = "";

                    if (data === 'users') {
                      htmlHead = "<tr><th>Classement</th><th>Photo profil</th><th>Nom complet</th><th>Vote</th></tr>";

                      for (var i = 0; i < json.length; i++) {

                        var ligne = "<tr><td>" + (i + 1) + "</td><td><img width='50px' height='auto' src='res/avatar/" + json[i].avatar + "'></td><td>" + json[i].name + " " + json[i].lastname + "</td><td>N/A</td></tr>";

                        html += ligne;
                      }
                    } else {
                      htmlHead = "<tr><th>Classement</th><th>Titre scénario</th><th>Description</th><th>Vote</th></tr>";

                      for (var i = 0; i < json.length; i++) {

                        var ligne = "<tr><td>" + (i + 1) + "</td><td>" + json[i].title + "</td><td>" + json[i].description + "</td><td>N/A</td></tr>";

                        html += ligne;
                      }
                    }

                    $('.table thead').html(htmlHead);
                    $('.table tbody').html(html);
                  },
                  error: function () {
                    console.log("error");
                  }
                });
              }
            });
          })(jQuery);
        </script>
  </body>

  </html>