<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



 $nom = $_GET["nom"];
 $prenom = $_GET["prenom"];

if (isset($nom) && isset($prenom)) {
		echo "<li>"."$nom"."</li>";
		echo "<li>"."$prenom"."</li>";
	}

// index.php?nom=Nemare&prenom=Jean