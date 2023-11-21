<!-- <?php
session_start();
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_mariage', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de mariage</title>
    <link rel="shortcut icon" href="images/duran-kirsten-wedding-website.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="carousel.rtl.css">
    <link rel="shortcut icon" href="images/609544.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
</head>
<body>

    <header style=" background-image: linear-gradient(rgba(231, 231, 231, 0),rgba(63, 63, 63, 0.644)),url(images/Generique-Contact_e-Business-Afrique_Low.jpg);">
        <nav>
        <ul>
        
        <img src="images/téléchargement (4).png" alt="" style="margin-top: -2.5%; height: 100px;border-radius: 50px; margin-right: 2%;">
            <li><a href="accueil.php">Accueil</a></li>
            <!-- <li><a href="#">Coordination</a></li> -->
            <!-- <li><a href="#">Portfolio</a></li> -->
            <li><a href=" service.php">Nos services</a></li>
            <li><a href="a_propos.php">A propos</a></li>
            <li><a href="contact.php">Contact</a></li>
            <div class="nom">
    <?php
    if (isset($_SESSION['nom_utilisateur'])) {
      echo $_SESSION['nom_utilisateur'];
      echo '<button><a href="deconnexion.php">Déconnexion</a></button>';
    } else {
      echo '
      <div class="index">
            <button class="b1"><a href="inscription.php">Enregistrer-vous</a></button>
            <button class="b2"><a href="connexion.php">Se connecter</a></button>    
      </div>' ;
    }
       ?>
       </div>
  
    
            
            
            
            <img src="images/téléchargement (4).jpg" alt="" style="margin-top: -2.5%; height: 100px;margin-left: 2%;border-radius: 50px;">
        
        
        </ul>
   </nav>
   
   <div class="head">
   <h1 style="margin-top: -5%; color: rgb(254, 105, 20);opacity: 200%;filter:brightness(3);">Contactez-nous .</h1>
   <marquee behavior="" direction="" style="margin-top: 5%;">
   <h3>Nous somme a votre servie pour vous aidez a organiser votre mariage en vous offrant la totalités des secrvice neccesaires pour organiser un marige inoubliables</h3>
   </marquee>
   <marquee behavior="" direction="right">
   <img src="images/wedding-2595862_1280.jpg" alt="">
   <img src="images/6J4YcEYhare9XYeXMN1vII.jpg" alt="">
   <img src="images/241-08-face_3_191293-168804938795131.jpeg" alt="">
   <img src="images/128132165-heureuse-mariée-afro-américaine-en-voile-blanc-souriant-près-du-marié-et-des-fleurs.jpg" alt="">
   <img src="images/heureuse-mariee-marie-lors-ceremonie-mariage-ile-tropicale_53876-85586.jpg" alt="">
   <img src="images/medium-shot-bride-and-groom-posing-outdoors_23-2150639456.jpg" alt="">
   <img src="images/mariee-marie_1303-11471.jpg" alt="">
   <img src="images/29584-nicole-arienne-ok.jpeg" alt="">
   <img src="images/Team-Wedding-in-Style_front_large.jpg" alt="">
   
   </marquee>
   
   <marquee behavior="" direction="">
   <h3>Nous somme a votre servie pour vous aidez a organiser votre mariage en vous offrant la totalités des secrvice neccesaires pour organiser un marige inoubliables</h3>
   </marquee>
   
   <div class="ic">
    <img src="images/63e8da9968e3262a8ae5e991_engage.png" alt="">
    <img src="images/63e8da99eaf853532d5a5eb8_maroo-p-500.png" alt="">
    <img src="images/63e8da997073807a4727846f_guides-for-brides-p-500.png" alt="">
    <img src="images/63e8da99707380c4a927845b_wedding-sparrow-gold-p-500.png" alt="">
    <img src="images/63e8da998c09974b4cc18557_the-knot.png" alt="">
    </div>
   
   </div>

     </header>


     <section class="sect_18">
<h1>CONTACTEZ-NOUS</h1>
<h6>Nous sommes disponnible 7jrs/7jrs</h6>

<div class="contai">



<div class="ro">
<i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i>
<h3>Par telephone</h3>
<p>Magnam nisi maiores cumque quo officia eveniet repellendus ex aperiam sunt, voluptate suscipit fugiat dolor officiis laborum, rem atque. Laboriosam, aliquid sit.</p>
<button><a href="">Une question</a></button>
</div>

<div class="ro">
<i class="fa-regular fa-message"></i>
<h3>Par chat</h3>
<p>Magnam nisi maiores cumque quo officia eveniet repellendus ex aperiam sunt, voluptate suscipit fugiat dolor officiis laborum, rem atque. Laboriosam, aliquid sit.</p>
<a href="">Posez ici</a>
</div>

<div class="ro">
<i class="fa-regular fa-envelope"></i>
<h3>Par email</h3>
<p>Magnam nisi maiores cumque quo officia eveniet repellendus ex aperiam sunt, voluptate suscipit fugiat dolor officiis laborum, rem atque. Laboriosam, aliquid sit.</p>
<a href="email/Soulama@gmail.com">notreadress@gmail.com</a>
</div>

</div>

     </section>

     <section class="sect_19">


     <div class="contact-form">



<div>
  <h1>Emplacement</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Mollitia ad dolorem deserunt ratione laudantium architecto voluptatibus <br> ab delectus impedit. Necessitatibus quos repellendus ut <br> corrupti facilis autem, saepe nisi aspernatur dicta.</p>
      <div>
      <a href=""><i class="fa-brands fa-linkedin icon"></i></a>
      <a href=""><i class="fa-brands fa-instagram"></i></a>
      <a href=""><i class="fa-brands fa-facebook icon"></i></a>
      <a href=""><i class="fa-brands fa-youtube icon"></i></a>
      </div>
</div>

<div>
<form action="" >
<h2>Formulaire de contact</h2>
<input type="text" name="nom" placeholder="Entrez votre nom et prenom"><br>
<input type="text" name="email" placeholder="Entrez votre email"><br>
<input type="text" name="contact" placeholder="Entrez votre numero de telephone"><br>
<input type="text" name="ville" placeholder="Entrez votre ville"><br>
<textarea name="demande" id="" cols="30" rows="10" placeholder="Entrez votre demande" class="textarea"></textarea><br>
<button type="submit">Soumettre</button>

</form>
</div>



</div>


<div class="comment">
        <h6>Commentaire</h6>
            <form action="traitement3.php" method="post">
                <textarea name="texte" id="Texte" cols="30" rows="10" placeholder="Mettez votre commentaire"></textarea> <br>
               <button type="submit">Soumettre</button>
             </form>
          </div>




     </section>


     
  
     <footer class="foot">

        <div>
        <a class="ff" href="">calendriers</a><br><br>
        <a href="">Documents essentiels</a><br><br>
        <a href="">Politiques UoPeople</a><br><br>
        <a href="">Catalogue</a><br><br>
        <a href=""><i class="fa-brands fa-linkedin icon"></i></a>
        <a href=""><i class="fa-brands fa-facebook icon"></i></a>
        <a href=""><i class="fa-brands fa-square-whatsapp icon"></i></a>
        <a href=""><i class="fa-brands fa-youtube icon"></i></a>
        </div><br><br>
        
        <div>
        <a class="ff" href="">Contacter-nous</a><br><br>
        <a href="">Bénévole</a><br><br>
        <a href="">Centre</a><br><br>
        <a href="">Administration</a><br><br>
        </div><br><br>
        <div>
        <a class="ff" href="">Blogues</a><br><br>
        <a href="">Evènement</a><br><br>
        <a href="">Préference</a><br><br>
        <a href="">Catalogue</a><br><br>
        
        </div><br><br>
        <div>
        <a class="ff" href="">Situation geographique</a><br><br>
        <a href="">Documents essentiels</a><br><br>
        <a href="">Politiques UoPeople</a><br><br>
        <a href="">Catalogue</a><br><br>
        </div><br><br>
        
        </footer>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4"  style="background: rgb(46, 44, 44);">
     <span style="color: bisque;"> © 2021 Copyright:</span>
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/" style="color: aliceblue;">N'ésitez pas à nous contacter</a>
    </div>
    <!-- Copyright -->
        
    
    
    
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>







