<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_mariage', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$Nom = $_POST["nom"];
$Prenom = $_POST["prenom"];
$Email = $_POST["email"];
$Mot_de_passe = $_POST["passe"];
$Nom_utilisateur = $_POST["utilisateur"];
$Tel = $_POST["numero"];
$Photo = $_POST["photo"];



$roles = $bdd->query("SELECT statut FROM roles WHERE statut= 'utilisateur' ");
$son= $roles->fetch();

// .......................................................................
$req = $bdd->prepare('INSERT INTO inscription( nom, prenom,
email, mot_de_passe, nom_utilisateur, numero, photo, statut) VALUES(:Nom, :Prenom, :Email, :Mot_de_passe, :Nom_utilisateur, :Tel, :Photo, :Statut)');
$req->execute([
'Nom'=>$Nom,
'Prenom'=>$Prenom,
'Email'=> $Email,
'Mot_de_passe'=>$Mot_de_passe,
'Nom_utilisateur'=>$Nom_utilisateur,
'Tel'=>$Tel,
'Photo'=>$Photo,
'Statut'=> $son['statut'],
]);

echo 'Les données sont sauvegardées !';



header('Location: connexion.php');
  exit();

?>