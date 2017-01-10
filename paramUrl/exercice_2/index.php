<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if (isset($_GET["age"])) {
	echo $_GET["age"];
}
if (!isset($_GET["age"])) {
	echo "pas d'age present";
}

// index.php?nom=Nemare&prenom=Jean