<h3>Exercice 7</h3>

<?php 

function youAre($age,$genre){

	if ($age <= 18 && $genre ==="Homme") {

		echo "<li>"."vous ête mineur\n"."et vous ête un\n".$genre."</li>";
	
	}
	if ($age >= 18 && $genre ==="Homme") {

		echo "<li>"."vous ête Majeur\n"."et vous ête un\n".$genre."</li>";

	}
	if ($age >= 18 && $genre ==="Femme") {

		echo "<li>"."vous ête Majeur\n"."et vous ête une\n".$genre."</li>";

	}
	if ($age <= 18 && $genre ==="Femme") {

		echo "<li>"."vous ête Mineur\n"."et vous ête une\n".$genre."</li>";
	}
	
}

youAre(25,"Homme");
youAre(16,"Homme");
youAre(22,"Femme");
youAre(17,"Femme");


?>

