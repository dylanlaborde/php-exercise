<h3>Exercice 3 :</h3>
<?php 

$a = 100;
$b = 22;
$mult = $a * $b;
for (; ;) {
	if ($a <= 0) {
		break;
	}
	if ($a > 10) {
		
		 echo "<li>"."\n"."a * b ="."$mult"."\n"."($a * $b)"."</li>";

	}
	$a --;	
}

