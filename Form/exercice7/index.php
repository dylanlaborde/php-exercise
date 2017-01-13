<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>


    <?php 
    if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['file']) && !empty($_POST['file']) ) {
        ?><div>
        <h2><?php echo "Bienvenue"."\n".$_POST['genre']."\n".$_POST['nom']."\n".$_POST['prenom'];?></h2></div>
        <div>
            <h2><?php echo  "Le fichier"."\n".$_POST['file']."\n"."a bien été ajouter";?></h2>
        </div>
        <?php

    }else{
        ?>
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
        </form><?php
    }
    ?>



</body>
</html>


