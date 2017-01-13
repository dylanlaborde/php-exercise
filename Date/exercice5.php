<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date Exerice 5 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<menu>
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="/exercice1.php">exercice 1</a></li>
			<li role="presentation"><a href="/exercice2.php">exercice 2</a></li>
			<li role="presentation"><a href="/exercice3.php">exercice 3</a></li>
			<li role="presentation"><a href="/exercice4.php">exercice 4</a></li>
			<li role="presentation" class="active"><a href="/exercice5.php">exercice 5</a></li>
			<li role="presentation"><a href="/exercice6.php">exercice 6</a></li>
			<li role="presentation"><a href="/exercice7.php">exercice 7</a></li>
			<li role="presentation"><a href="/exercice8.php">exercice 8</a></li>

		</ul>
	</menu>
	<div>
		<h3>Exercice 5</h3>
		<h4>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</h4>
		<div>
			<?php 
			$date1 = new DateTime();
			$date2 = new DateTime('2016-05-18');
			$date1Format = $date1->format('d/m/Y');
			$date2Format = $date2->format('d/m/Y');
			$ecart = date_diff($date1, $date2);
			$afficheEcart = $ecart->format('%a jours');
			echo "<div>"."le nombre de jours separant le"."\n".$date1Format."\n"."et le"."\n".$date2Format."\n"."est de"."\n".$afficheEcart."</div>";
			?>
		</div>
	</div>
</body>
</html>