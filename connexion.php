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
            <button class="b3"><a href="inscription.php">S'enregistré</a></button>
            <button class="b4"><a href="accueil.php">Retour</a></button>

        </div>
        </ul>
   </nav>
   
  <!-- <h1>Fomulaire d'enregistrement</h1> -->
    <div class="form">

        <form action="traitement2.php" method="post">
            <h1 style="color: #684807">Connectez-vous a la page avec :</h1>
        <div class="ne">
            <div>
                <label for="">Email ou nom utilisateur</label><br>
                <input type="text" name="nom_utilisateur" id="Nom_utilisateur" placeholder="Entré votre email ou nom utilisateur">
            </div>
            <div>
                <label for="" class="in">Mot de passe</label><br>
                <input type="password" name="mot_de_passe" id="Passe" placeholder="Entré votre mot de passe" class="in"><br>
                <input type="radio" style="width: 15px;border: 2px solid black; border-bottom: none">
                <label for="">Afficher mot de passe</label>
                <a href="" style="margin-left:7%">Mot de passe oublie ?</a>
            </div>
        </div>


        <div class="suit">
            <button type="submit">Connexion</button>

          
        </div>

        <h5>Ou rejoignez nous avec :</h5>

            <div class="i">
        <a href=""><i class="fa-brands fa-facebook icon"></i></a>
        <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
        <a href=""><i style="color: green" class="fa-brands fa-square-whatsapp icon"></i></a>
        <a href=""><i class="fa-brands fa-twitter" ></i></a>
        </div>
           </form>


       </div>



     </header>

     </body>
</html>