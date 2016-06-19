<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscris-toi</title>
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
	</div>

	<?php include("footer.php"); ?>
</body>
</html>