<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="container">
	<?php include("header.php"); ?>

	<div style="margin-top: 120px"></div>

	<div class="row">
		<div class="col-md-12">
			<form class="form" method="POST">
				<div class="form-group">
					<label for="name">Prénom: </label>
					<input type="text" class="form-control" id="name" name="user[name]" value="<?php echo $user['name'] ?>">
				</div>

				<div class="form-group">
					<label for="lastname">Nom: </label>
					<input type="text" class="form-control" id="lastname" name="user[lastname]" value="<?php echo $user['lastname'] ?>">
				</div>

				<div class="form-group">
					<label for="age">Age: </label>
					<input type="text" class="form-control" id="age" name="user[age]" value="<?php echo $user['age'] ?>">
				</div>

				<div class="form-group">
					<label for="email">Email: </label>
					<input type="text" class="form-control" id="email" name="user[email]" value="<?php echo $user['email'] ?>">
				</div>

				<div class="form-group">
					<label for="facebook">Facebook: </label>
					<input type="text" class="form-control" id="facebook" name="user[id_facebook]" value="<?php echo $user['facebook'] ?>">
				</div>

				<div class="form-group">
					<label for="snapchat">Snapchat: </label>
					<input type="text" class="form-control" id="snapchat" name="user[id_snapchat]" value="<?php echo $user['snapchat'] ?>">
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Valider">
				</div>
			</form>
		</div>
	</div>

	<?php include("footer.php"); ?>
</body>
</html>