<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$debut ="dateDebut";
$fin ="dateFin";
if (isset($_GET["$debut"]) && isset($_GET["$fin"])) {
	echo "debut :"."\n".$_GET["$debut"]."\n"."fin :"."\n".$_GET["$fin"];

}
if (!isset($_GET["$debut"]) && !isset($_GET["$fin"])) {
	echo "erreur 404";
}


// index.php?dateDebut=2/05/2016&dateFin=27/11/2016