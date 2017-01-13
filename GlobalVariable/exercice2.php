<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$_SESSION["prenom"] = "Dylan";
$nom = $_SESSION["nom"] = "Laborde";
$age = $_SESSION["age"] = "20";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercice 2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<menu>
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="/exercice1.php">exercice 1</a></li>
			<li role="presentation" class="active"><a href="/exercice2.php">exercice 2</a></li>
			<li role="presentation"><a href="/exercice3.php">exercice 3</a></li>
			<li role="presentation"><a href="/exercice4.php">exercice 4</a></li>
			<li role="presentation"><a href="/exercice5.php">exercice 5</a></li>
		</ul>
	</menu>
	<h3>exerice 2 :</h3>
<li><a href="/exercice2_sesion.php">acceder a vos information</a></li>

</body>
</html>