<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date Exerice 4 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<menu>
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="/exercice1.php">exercice 1</a></li>
			<li role="presentation"><a href="/exercice2.php">exercice 2</a></li>
			<li role="presentation"><a href="/exercice3.php">exercice 3</a></li>
			<li role="presentation" class="active"><a href="/exercice4.php">exercice 4</a></li>
			<li role="presentation"><a href="/exercice5.php">exercice 5</a></li>
			<li role="presentation"><a href="/exercice6.php">exercice 6</a></li>
			<li role="presentation"><a href="/exercice7.php">exercice 7</a></li>
			<li role="presentation"><a href="/exercice8.php">exercice 8</a></li>

		</ul>
	</menu>
	<div>
		<h3>Timestamp</h3>
		<div>
			<?php 
			$actualTime = new DateTime();
			$timeStmp = $actualTime->getTimestamp();
			echo "<div>"."Le Timestamp actuel est"."\n".$timeStmp."</div>";
			$time2 = new DateTime("07/02/2016 15:00");
			$timeStmp2 = $time2->getTimestamp();
			echo "<div>"."le Timestamp du mardi 2 août 2016 à 15h00 est :"."\n".$timeStmp2."</div>";
			?>
		</div>
	</div>
</body>
</html>