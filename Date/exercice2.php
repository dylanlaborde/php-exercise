<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date Exerice 2 </title>
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
			<li role="presentation"><a href="/exercice6.php">exercice 6</a></li>
			<li role="presentation"><a href="/exercice7.php">exercice 7</a></li>
			<li role="presentation"><a href="/exercice8.php">exercice 8</a></li>

		</ul>
	</menu>
	<div>
		<h3>Afficher la date courante ! ( format :  jj-mm-aa )</h3>
		<div>
			<?php 
			$localDate2 = date("d-m-y");
			echo "<div>"."Aujourd'hui nous somme le"."\n".$localDate2."</div>";

			 ?>

		</div>
	</div>
</body>
</html>