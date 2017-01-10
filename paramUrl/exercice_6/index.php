<?php  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET["batiment"])) {
	echo "\n".$_GET["batiment"]."\n";
}
if (!isset($_GET["batiment"])) {
	echo "404 not found";
}
if (isset($_GET["salle"])) {
	echo "\n".$_GET["salle"]."\n";
}
if (!isset($_GET["salle"])) {
	echo "404 not found";
}
//index.php?batiment=12&salle=101
?>

