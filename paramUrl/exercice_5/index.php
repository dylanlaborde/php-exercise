<?php  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET["semaine"])) {
	
	echo "\n".$_GET["semaine"]."\n";

}
if (!isset($_GET["semaine"])) {
	echo "404 not found";
}

//index.php?semaine=12
?>

