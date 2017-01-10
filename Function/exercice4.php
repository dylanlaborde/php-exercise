<h3>Exercice 4 :</h3>

<?php 

function returnNumber($nb1,$nb2){

	if ($nb1>$nb2) {

		echo "<li>"."Le premier nombre est plus grand"."</li>";

	}
	if ($nb1<$nb2) {

		echo "<li>"."Le premier nombre est plus petit"."</li>";


	}
	if ($nb1===$nb2) {

		echo "<li>"."Les deux nombres sont identiques"."</li>";


	}

}

returnNumber(15,6);
returnNumber(6,15);
returnNumber(15,15);

?>