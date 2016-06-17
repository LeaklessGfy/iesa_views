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
			<form>
			<label>Votre pseudo</label> : <input type="text" name="pseudo" />
			<label>Votre e-mail</label> : <input type="email" />
			<label>Votre mot de passe</label> : <input type="password" />
			<input type="submit" value="Creer" />
			</form>
		</div>
		<div class="col-md-5">
			<h2>Connexion</h2>
			<form>
			<label>Votre pseudo</label> : <input type="text" name="pseudo" />
			<label>Votre mot de passe</label> : <input type="password" />
			<input type="submit" value="Connexion" />
			</form>

		</div>
	</div>

		<?php include("footer.php"); ?>

</body>
</html>
