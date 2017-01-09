<h3>Exercice 4 :</h3>
<?php 
$i = 1;
for (; ;) {

	
	if ($i > 15) {
		break;
	}
	if ($i <= 10) {
		$moitier = $i/2;
		$i = $i + $moitier;
		echo  "<li>"."\n"."i =".$i."\n"."</li>";
	}else{
		
		echo "la variable est superieur a 10";
	}

	$i++;
}







