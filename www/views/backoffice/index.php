<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="no-follow">
	<meta name="author" content="Views IESA">
	<link rel="icon" href="res/img/favicon.png">
	<meta name="viewport" content="width=device-width">

	<!-- ************** STYLESHEET ************** -->
	<link rel="stylesheet" href="res/css/bootstrap.min.old.css">
	<title>Admin</title>
</head>
<body>
	<div class="container">
		<h1>Backoffice</h1>

		<section>
			<h2>Homepage</h2>

			<?php 
				foreach ($results as $value) {
					echo '<div class="row">' .
						'<div class="col-md-12">' .
						'<img src="' . $value['img'] . '" alt="">' .
						'<h3>' . $value['title'] . '</h3>' .
						'<a class="btn btn-success" href="' . . '">Choose</a>' .
						'</div>' .
					'</div>';
				}
			?>
			<div class="row">
				<div class="col-md-12">
					<h3>Home 1</h3>
					<a href="<?php ?>" class="btn btn-success">Choose</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h3>Home 2</h3>
					<a href="<?php ?>" class="btn btn-success">Choose</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h3>Home 3</h3>
					<a href="<?php ?>" class="btn btn-success">Choose</a>
				</div>
			</div>
		</section>
	</div>
</body>
</html>
