<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_mariage', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}


$Nom_utilisateur = $_POST['nom'];
$Mot_de_passe = $_POST['mot_de_passe'];

// ....................................
$req = $bdd->prepare("SELECT * FROM inscription WHERE nom_utilisateur= :nom AND mot_de_passe= :mot_de_passe");
 $req->execute([
     "nom" => $Nom_utilisateur, 
     "mot_de_passe" => $Mot_de_passe,
     ]);  
$user = $req->fetch();

//...........................................................
$recu = $bdd->prepare("SELECT statut FROM inscription WHERE nom_utilisateur= :nom ");
$recu->execute([
  "nom" => $Nom_utilisateur,
]);
$status= $recu->fetch();


// //........................................................
if ($user['nom'] AND $user['mot_de_passe'] AND $status['statut'] == 'administrateur' ) {
    session_start();
    $_SESSION['nom'] = $Nom_utilisateur;
    $_SESSION['mot_de_passe'] = $Mot_de_passe;
    header('Location: admin.php');
    } else if($user['nom'] AND $user['mot_de_passe'] AND $status['statut'] == 'utilisateur'){
        $_SESSION['nom'] = $Nom_utilisateur;
        $_SESSION['mot_de_passe'] = $Mot_de_passe;
        
    header('Location: accueil.php');
    }
  

 ?>


