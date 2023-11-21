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

    <header style=" background-image: linear-gradient(rgba(231, 231, 231, 0),rgba(63, 63, 63, 0.644)),url(images/annuaire-1422868768.jpg);">
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
   <!-- <h1 style="margin-top: -5%; color: rgb(254, 105, 20);opacity: 200%;filter:brightness(3);">Tout savoir a propos de nous.</h1> -->
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


<section class="sect_16">

  <h1>A propos de notre agence</h1>
<h6>Nous une équipe passionnée, enthousiaste et audacieuse, partageant la même vision : celle d’embellir l'amour, en proposant des prestations expertes et plus authentiques. <br>Convaincu qu’il était possible de créer une offre accessible à tous, nous avons imaginé une plateforme en laquelle on puisse s'identifier, s'y retrouver, une première en la matière, qui s'adapte constamment et ne propose que le meilleur en toute transparence.
<br> <br>Parce que nous croyons à l'amour et en vos rêves, parce que l'organisation de vos événements à deux ne doit pas être synonyme de calvaires. Nous ne proposons que du complet, nous trions sur le volet nos partenaires et aménageons nos offres pour ne proposer que l'excellence.
<br><br>Parce que prôner l’excellence du conseil et du service, c’est rendre accessible à toutes et à tous la recette d’un événement réussi et heureux, nous avons à coeur de vous écouter avec bienveillance, de vous guider en toute indépendance, de vous donner les clés en toute transparence.
</h6>

<h2>Nos engagements</h2>
<div class="container">

<div>
  <!-- <i class="fa-regular fa-message"></i> -->
  <i class="fa-regular fa-comments"></i>
  <!-- <i class="fa-regular fa-comment-dots"></i> -->
  <!-- <i class="fa-solid fa-comment-sms"></i> -->
<h3>Proche de vous</h3>
<p>A votre écoute du début à la fin de votre prestation, 24h/24</p>
</div>
<div style="margin-right: 5%;">
  <i class="fa-solid fa-children"></i>
<h3>Expert du domaine</h3>
<p>Avec de multiples love story à notre actif</p>
</div>
<div>
  <i class="fa-solid fa-mobile-screen-button"></i>
<h3>Discrétion</h3>
<p>Après tout, c'est l'objectif principal !</p>
</div>


</div>

<button><a href="">Nos services</a></button>

</section>



<section class="sect_17">
  <div>
    <h2>Galerie des evènements passes</h2>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, accusantium libero. Eius iure at ab, assumenda fuga labore eaque odit ratione quasi laboriosam hic ipsam neque reiciendis magni sed est?</p>
  <div class="container">
    <img src="images/smiling-african-american-bridegroom-hugging-260nw-1421123387.webp" alt="">
<img src="images/stock-photo-loving-couple-at-an-international-wedding-at-sunset-beautiful-sophisticated-bride-of-asian-2145977163.jpg" alt="">
<img src="images/jeune-couple-africain-etreinte-romantique-dans-champ-jeunes-amants-dans-champ-fleuri_1157-49767.avif" alt="">
 <img src="images/DSC7141.jpg" alt="">
 <img src="images/title-1635614230.jpg" alt="">
 <img src="images/b004998d5514519c25ff20f605826a96.jpg" alt="">
 <img src="images/3-1.jpg" alt="">
 <img src="images/128132165-heureuse-mariée-afro-américaine-en-voile-blanc-souriant-près-du-marié-et-des-fleurs.jpg" alt="">
</div>

</div>

<button><a href="">Voir plus</a></button>
</section>

<section style="background:#2b2a283f;margin-top: -5%;">
  <section class="sect_5">

<h1>Témoignages</h1>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light"  style="margin: 0% 13%;">
<div class="carousel-indicators">
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
  <div class="container">
    <div class="carousel-caption text-start">
    <div class="pro"><img src="images/64228f3e50a1d9bb4bd40b9d_tiffany-r-tiffany-l-1000x1000-p-500.jpg" alt="" style="height: 100px;width: 100px;border-radius: 50%;" alt=""></div>
    <h5>Nom</h5>
    <p class="opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique temporibus mollitia, nam eligendi accusantium saepe delectus ex perspiciatis totam nulla iure qui unde possimus facere expedita ea, vitae consequatur?<p>
    <!-- <p><a class="btn btn-lg btn-primary" href="#">commenter</a></p> -->
    </div>
  </div>
</div>
<div class="carousel-item">
  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
  <div class="container">
    <div class="carousel-caption">
      <h1>Another example headline.</h1>
      <p>Some representative placeholder content for the second slide of the carousel.</p>
    </div>
  </div>
</div>
<div class="carousel-item">
  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
  <div class="container">
    <div class="carousel-caption text-end">
      <h1>One more for good measure.</h1>
      <p>Some representative placeholder content for the third slide of this carousel.</p>
      <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
    </div>
  </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>



     </section>
   
  
     <div class="comment">
      <h6>Commentaire</h6>
          <form action="traitement3.php" method="post">
              <textarea name="texte" id="Texte" cols="30" rows="10" placeholder="Mettez votre commentaire"></textarea> <br>
             <button type="submit">Soumettre</button>
           </form>
        </div>



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