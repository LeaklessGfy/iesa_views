<?php
    $rankingValue = 1;
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
									<th><?php echo $rankingValue++ ?></th>
									<td><img src="res/avatar/<?php echo $result['avatar']; ?>" alt="Photo de profil de <?php echo $result['name'].' '. $result['lastname']; ?>" width="50px" height="auto"></td>
                                    <td><?php echo $result['name'].' '. $result['lastname']; ?></td>
									<td>N/A</td>
								</tr>
								<?php } ?>
						</tbody>
					</table>
				</div>
			</section>
		</main>

	</body>

	</html>