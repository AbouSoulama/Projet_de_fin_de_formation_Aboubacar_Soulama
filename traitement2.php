<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_mariage', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}


$Nom_utilisateur = $_POST['nom_utilisateur'];
$Mot_de_passe = $_POST['mot_de_passe'];

// ....................................
$req = $bdd->prepare("SELECT * FROM inscription WHERE nom_utilisateur= :nom_utilisateur AND mot_de_passe= :mot_de_passe");
 $req->execute([
     "nom_utilisateur" => $Nom_utilisateur, 
     "mot_de_passe" => $Mot_de_passe,
     ]);  
$user = $req->fetch();

//...........................................................
$recu = $bdd->prepare("SELECT statut FROM inscription WHERE nom_utilisateur= :nom_utilisateur ");
$recu->execute([
  "nom_utilisateur" => $Nom_utilisateur,
]);
$status= $recu->fetch();


// //........................................................
if ($user['nom_utilisateur'] AND $user['mot_de_passe'] AND $status['statut'] == 'administrateur' ) {
    session_start();
    $_SESSION['nom_utilisateur'] = $Nom_utilisateur;
    $_SESSION['mot_de_passe'] = $Mot_de_passe;
    header('Location:admin.php');
    } else if($user['nom_utilisateur'] AND $user['mot_de_passe'] AND $status['statut'] == 'utilisateur'){
      session_start();
        $_SESSION['nom_utilisateur'] = $Nom_utilisateur;
        $_SESSION['mot_de_passe'] = $Mot_de_passe;
        
    header('Location:accueil.php');
    }
  

 ?>


