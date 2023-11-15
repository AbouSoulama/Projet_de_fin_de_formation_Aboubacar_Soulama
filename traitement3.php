<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_mariage', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}


$Commentaire= $_POST["texte"];

$req = $bdd->prepare('INSERT INTO commentaire(texte) VALUES(:Texte)');
$req->execute([
    'Texte'=> $Commentaire,
]);
// echo'Le témoignage est enregistré'

header('Location: accueil.php')

?>