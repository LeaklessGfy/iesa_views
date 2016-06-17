<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fame on - Connexion </title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="res/css/style.css">
	
</head>
<body class="container">
	<?php include("header.php"); ?>

	<div class="row">
		<div class="img col-md-5">
		<h2>Inscription</h2>
			<form method="POST">
				<label>Votre pseudo</label> : <input type="text" name="user[login]" />
				<label>Votre e-mail</label> : <input type="text" name="user[email]" />
				<label>Votre mot de passe</label> : <input type="password" name="user[password]" />
				<input type="submit" value="register" name="action" />
			</form>
		</div>
		<div class="col-md-5">
			<h2>Connexion</h2>
			<form method="POST">
				<label>Votre pseudo</label> : <input type="text" name="user[login]" />
				<label>Votre mot de passe</label> : <input type="text" name="user[password]" />
				<input type="submit" value="login" name="action" />
			</form>
		</div>
	</div>

	<?php include("footer.php"); ?>
</body>
</html>
