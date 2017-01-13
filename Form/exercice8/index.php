<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	

	<?php

	$info = new SplFileInfo($_POST['file']);
	$file_ext = $info->getExtension();
	$file_autorized = "pdf";

	if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['file']) && !empty($_POST['file'])) {
		echo "<div>"."Bienvenue"."\n".$_POST['genre']."\n".$_POST['nom']."\n".$_POST['prenom']."</div>";

		if ($file_ext === $file_autorized ) {
			echo  "<div>"."Le fichier"."\n".$_POST['file']."\n"."a bien été ajouter"."</div>";
		}
		else {
			echo "<div>"."l'extension"."\n".$file_ext."\n"."n'est pas autoriser"."</div>";
			echo "<div>"."seul l'extension"."\n".$file_autorized."\n"."est autoriser"."</div>";
		}

	}else{?>
	<form action="/index.php" method="POST">
		<div>
			<label for="genre">Civilité</label>
			<select name="genre" id="">
				<option value="Mr">Mr</option>
				<option value="Mme">Mme</option>
			</select>
		</div>
		<div>
			<label for="nom">Nom</label>
			<input type="text" name="nom">
		</div>
		<div>
			<label for="prenom">Prénom</label>
			<input type="text" name="prenom">
		</div>
		<div>
			<input type="file" name="file">
		</div>
		<div>
			<button type="submit">Valider</button>
		</div>
	</form>
	<?php
}?>




</body>
</html>