<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET["langage"])) {
	
	echo "\n".$_GET["langage"]."\n";

}
if (!isset($_GET["langage"])) {
	echo "404 not found";
}
if (isset($_GET["serveur"])) {
	echo "\n".$_GET["serveur"]."\n";
}
if (!isset($_GET["serveur"])) {
	echo "404 not found";

}


// index.php?langage=PHP&serveur=LAMP
 ?>