<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercice 5</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<menu>
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="/exercice1.php">exercice 1</a></li>
			<li role="presentation"><a href="/exercice2.php">exercice 2</a></li>
			<li role="presentation"><a href="/exercice3.php">exercice 3</a></li>
			<li role="presentation"><a href="/exercice4.php">exercice 4</a></li>
			<li role="presentation"  class="active"><a href="/exercice5.php">exercice 5</a></li>
		</ul>
	</menu>
	<h3>exerice 5 :</h3>
	<form action="exercice3.php" method="POST">
		<div>
			<label for="">modifier votre mail</label>
			<input type="text" name="mail">
		</div>
		<div>
			<label for="">nouveau mot de passe</label>
			<input type="text" name="mdp">
		</div>
		<button type="submit">valider les modification</button>

	</form>
</body>
</html>

