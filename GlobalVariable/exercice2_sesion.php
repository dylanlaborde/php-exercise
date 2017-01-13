<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>identifiant sesion</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<menu>
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="/exercice1.php">exercice 1</a></li>
			<li role="presentation"><a href="/exercice2.php">exercice 2</a></li>
			<li role="presentation"><a href="/exercice3.php">exercice 3</a></li>
			<li role="presentation"><a href="/exercice4.php">exercice 4</a></li>
			<li role="presentation"><a href="/exercice5.php">exercice 5</a></li>
		</ul>
	</menu>
	<div>
		<h3>Sesion utilisateur</h3>
	</div>
	<div>
		<li><a href="/exercice2.php">back</a></li>
	</div>
	<div>
		
		<?php 

		echo  "<li>"."nom :"."\n".$_SESSION["nom"]."</li>";
		echo  "<li>"."prenom :"."\n".$_SESSION["prenom"]."</li>";
		echo  "<li>"."age :"."\n".$_SESSION["age"]."</li>";

		?>
	</div>

</body>
</html>