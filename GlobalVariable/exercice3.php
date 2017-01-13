<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
setcookie("mail",$_POST["mail"], time() + 3600);
setcookie("mdp",$_POST["mdp"], time() + 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercice 3</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<menu>
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="/exercice1.php">exercice 1</a></li>
			<li role="presentation"><a href="/exercice2.php">exercice 2</a></li>
			<li role="presentation" class="active"><a href="/exercice3.php">exercice 3</a></li>
			<li role="presentation"><a href="/exercice4.php">exercice 4</a></li>
			<li role="presentation"><a href="/exercice5.php">exercice 5</a></li>
		</ul>
	</menu>
	<h3>exerice 3 :</h3>
	

	<div class="container">
		<form method="POST" action="/exercice4.php">
			<div class="form-group row">
				<label for="mail" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="mail" name="mail">
				</div>
			</div>
			<div class="form-group row">
				<label for="mdp" class="col-sm-2 col-form-label">Mot de passe</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="mdp" name="mdp">
				</div>
			</div>

			
			<div class="form-group row">
				<div class="offset-sm-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Connexion</button>
				</div>
			</div>
		</form>
	</div>



</body>
</html>