<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	if(isset($_POST['nom']) && !empty($_POST['nom'])  ) { ?> 

	<div>
		<h2><?php echo "Bienvenue"."\n".$_POST['genre']."\n".$_POST['nom']."\n".$_POST['prenom'];?></h2>
	</div>

	<?php } 

	if(empty($_POST['nom']) || empty($_GET['nom'])){
		include __DIR__. '/../exercice5/index.php';
		
	}
	else { 
		include __DIR__. '/../exercice5/index.php';
	}?> 

</body>
</html>
