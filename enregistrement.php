<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date_naissance=$_POST['date_naissance'];
$date_admission=$_POST['date_admission'];
$genre=$_POST['genre'];
$telephone=$_POST['telephone'];

include('connexion.php');
$reponse=$bdd->query("INSERT INTO `etudiant`( `nom`, `prenom`, `date_naissance`, `date_admission`, `genre`, `telephone`) VALUES ('$nom','$prenom','$date_naissance','$date_admission','$genre','$telephone')");
$reponse->closeCursor();

echo('Enregistrement effectué avec succès!');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="liste.php"><button type="button"> Afficher la liste.</button></a>
</body>
</html>