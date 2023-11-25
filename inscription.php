<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de mariage</title>
    <link rel="shortcut icon" href="images/duran-kirsten-wedding-website.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="shortcut icon" href="images/609544.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
</head>
<body>

<header style="   background-image: linear-gradient(rgba(231, 231, 231, 0),rgba(63, 63, 63, 0.644)),url(images/mariage-n4juoxeonnwvnb9q11cx7rpe1litmixman1e78pr0w.jpg);">
    <nav>
        <ul>
        <div style="margin-top: -2.5%; margin-right: 55%;">
            <img src="images/téléchargement (4).png" alt="" style=" height: 75px;width: 75px; border-radius: 50px; font-family: crossorigin;" >
            <span style="color: rgb(252, 137, 117);font-size: 1.1rem;font-family: crossorigin;">Service  Mariage</span>
        </div>
        <div>
            <button class="b3"><a href="connexion.php">Se connecté</a></button>
            <button class="b4"><a href="accueil.php">Retour</a></button>

        </div>
        </ul>
   </nav>
   
  <!-- <h1>Fomulaire d'enregistrement</h1> -->
    <div class="form">

        <form action="traitement.php" method="post">
        <h1 style="color: #684807;font-size:2rem">Enregistrez-vous a la page avec :</h1>
            <div class="np">
            <div>
                <!-- <label for="">Nom</label><br> -->
                <input type="text" name="nom" id="Nom" placeholder="Entré votre nom">
            </div>
            <div>
                <!-- <label for="" class="in">Prénom</label><br> -->
                <input type="text" name="prenom" id="Prenom" placeholder="Entré votre prenom" class="in">
            </div>
        </div><br>        <div class="suit">

            <!-- <label for="">Email</label><br> -->
            <input type="email" name="email" id="Email" placeholder="Entré un l'email"><br><br>
            <!-- <label for="">Mot de passe</label><br> -->
            <input type="password" name="passe" id="Passe" placeholder="Entré un mot de passe"><br><br>
            <!-- <label for="">Nom utilisateur</label><br> -->
            <input type="text" name="utilisateur" id="Utilisateur" placeholder="Entré un nom utilisateur"><br><br>
            <!-- <label for="">Tel</label><br> -->
            <input type="tel" name="numero" id="Numero" placeholder="Entré un numero de téléphone"><br><br>
            <!-- <label for="">Photo de profil</label><br> -->
            <input type="file" name="photo" id="Photo" placeholder="Entré une photo de profil"><br><br>
            <button type="submit">Enregistré</button>


        </div>
            
        
        
           </form>


       </div>



     </header>

     </body>
</html>