<?php
    $rankingValue = 0;
?>
	<!doctype html>

	<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<title>Classement candidats</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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

		<main class="container">
			<section class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <h1 class="text-center">Classement</h1>

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
						<!--<tbody>

								<tr>
									<th><?php echo $rankingValue++ ?></th>
									<td><img src="res/avatar/<?php echo $result['avatar']; ?>" alt="Photo de profil de <?php echo $result['name'].' '. $result['lastname']; ?>" width="50px" height="auto"></td>
                                    <td><?php echo $result['name'].' '. $result['lastname']; ?></td>
									<td>N/A</td>
								</tr>

						</tbody>-->
						<tbody>
						</tbody>
					</table>
				</div>
			</section>
		</main>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
			(function($) {
				$('.btn-rank').on('click', function() {
					if ($(this).hasClass('active-nok')) {
						$('.btn-rank').toggleClass('btn-success');
						$('.btn-rank').toggleClass('active-nok');

						var data = $(this).data('rank');

						$.ajax({
							url: "<?php generateUrl("api/ranking") ?>",
							data: {data: data},
							success: function(result) {

								var json = JSON.parse(result);
								var html = "";

								for (var i = 0; i < json.length; i++) {
									if (data === 'users') {
										var ligne = "<tr><td>" + (i + 1) + "</td><td><img width='50px' height='auto' src='res/avatar/" + json[i].avatar + "'></td><td>" + json[i].name + " " + json[i].lastname + "</td><td>N/A</td></tr>";
									} else {
										var ligne = "<tr><td>" + (i + 1) + "</td><td>" + json[i].title + "</td><td>" + json[i].description + "</td><td>N/A</td></tr>";
									}
									html += ligne;
								}

								$('.table tbody').html(html);
							},
							error: function() {
								console.log("error");
							}
						});
					}
				});
			})(jQuery);
		</script>
	</body>

	</html>