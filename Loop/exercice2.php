<h3>Exercice 2 :</h3>
<?php 

$a = 0;
$b = 12;

for (; ;) {
	if ($a >=30 ) { 	
   
		echo "<li>"."a * b = ".$a * $b ." ($a * $b)"."\n"."</li>";
	
	}
	if ($a >40 ) {
		break;
	}
	$a++;
}
