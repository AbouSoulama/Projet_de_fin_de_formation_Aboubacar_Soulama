<?php
session_start();
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_mariage', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

?>

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




</head>
<body>

    <header>
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
   
   <div style="margin-top: 12%;">
   <h1 style="margin-top: -10%; color: rgb(254, 105, 20);opacity: 200%;filter:brightness(2.5);text-align:center;padding:0% 20%;">Bienvenu au service d'assistance pour votre mariage.</h1>
   <!-- <h1>Bienvenu au service d'assistance pour votre mariage</h1> -->
   <div class="he">
   
   <marquee behavior="" direction="right" style=" margin-top: 7%;">
   <img src="images/99df12c05e711dfb597c22df38c9be5f.jpg" alt="">
   <img src="images/7154b9fe16dfc2dca21f2d4dc8f6d0df.jpg" alt="">
   <img src="images/108812363-délicieuses-collations-sur-la-table-de-réception-de-mariage-dans-un-restaurant-en-plein-air-de.jpg" alt="">
   <img src="images/214039112-wedding-first-dance-and-black-couple-in-garden-with-love-celebration-and-excited-for-future-together.jpg" alt="">
   <img src="images/b004998d5514519c25ff20f605826a96.jpg" alt="">
   <img src="images/depositphotos_205630694-stock-photo-wedding-day-stylish-african-groom.jpg" alt="">
   <img src="images/download (3).jpg" alt="">
   <img src="images/la-dot-un-element-cle-du-mariage-traditionnel-africain.jpeg" alt="">
   <img src="images/Mariage-voici-le-budget-moyen-que-comptent-depenser-les-futurs-maries-en-2022.jpg" alt="">
   <img src="images/download (2).jpg" alt="">
   <img src="images/128132165-heureuse-mariée-afro-américaine-en-voile-blanc-souriant-près-du-marié-et-des-fleurs.jpg" alt="">
   <img src="images/heureuse-mariee-marie-lors-ceremonie-mariage-ile-tropicale_53876-85586.jpg" alt="">
   <img src="images/medium-shot-bride-and-groom-posing-outdoors_23-2150639456.jpg" alt="">
   <img src="images/mariee-marie_1303-11471.jpg" alt="">
   <img src="images/DSC7141.jpg" alt="">
   <img src="images/smiling-african-american-bridegroom-hugging-260nw-1421123387.webp" alt="">
   
   </marquee>
   
   
</div>
   <div class="ic" style="margin-top: %;">
    <img src="images/63e8da9968e3262a8ae5e991_engage.png" alt="">
    <img src="images/63e8da99eaf853532d5a5eb8_maroo-p-500.png" alt="">
    <img src="images/63e8da997073807a4727846f_guides-for-brides-p-500.png" alt="">
    <img src="images/63e8da99707380c4a927845b_wedding-sparrow-gold-p-500.png" alt="">
    <img src="images/63e8da998c09974b4cc18557_the-knot.png" alt="">
    </div>
   
   </div>

     </header>
     
     
     
     <section class="sect_1">
     <!-- <div class="ic0">
     <img src="images/nike.webp" alt="">
     <img src="images/yahoo.webp" alt="">
     <img src="images/unity.webp" alt="">
     <img src="images/sony.webp" alt="">
     <img src="images/samsung.webp" alt="">
     </div> -->
     <h1>Organiser un mariage inoubliables</h1>
     <p style="margin: 2% 10%;padding: 2% 5%;background: rgba(0, 0, 0, 0.815); color: white;">Tout pour organiser votre mariage. Commencez à planifier votre mariage avec nous, c'est gratuit !</p>
     <div class="di1">
     <div class="a">
     <div class="ov"><img src="images/98b2671bb5cb0c5a351029022603ace6.jpg" alt=""></div>
     <h2>Retrouvez les meuilleurs boutique pour les robes de marié</h2>
     <p>Votre robe d'un jour <br>Romantique, glam'rock, princesse, élégante ou sexy, trouvez celle qui vous sublimera parmi plus de 5000 modèles de robes de mariée.</p>
     <button><a href="robes.php">voir plus</a></button>
     </div>
    
     <div class="b">
     <h2>Couple parfait</h2>
     <div>
     <div class="ove"><img src="images/7154b9fe16dfc2dca21f2d4dc8f6d0df.jpg" alt=""></div>
     <img class="pos" src="images/wedding-rings-2252438_1280.jpg" alt="">
     </div>
     </div>
    
     <div class="c">
     <div class="ov"><img src="images/african-wedding-suit-groom--costume-mens-wedding-3pieces--african-wedd.jpg" alt=""></div>
        <h2>Retrouvez les meuilleurs boutique pour les costumes de marié</h2>
        <p>Votre costume d'un jour <br>Romantique, glam'rock, roi, élégant ou sexy, trouvez cellui qui vous sublimera parmi plus de 5000 modèles de costumes de mariée.</p>
    <button><a href="robes.php">voir plus</a></button>
     </div>
    </div>
     
     </section>
     
     <section class="sect_2"> 
     
     <div>
     
     <h1>Découvrer les boutiques de ventes de bagues alliance</h1>
     <h5>Vous envisagez d'acheter une bague de fiançailles au Burkina Faso ?

Dans ce guide, nous explorerons les meilleures options de bagues de fiançailles disponibles, y compris les choix traditionnels tels que les diamants, les saphirs, les émeraudes et les rubis, ainsi que la popularité croissante d'options alternatives comme la Moissanite, les diamants de laboratoire et les options innovantes et abordables.</h5>
     <div class="alian">
     <div>
     <div class="ali"><img src="images/téléchargement.jpeg" alt=""></div>
     <p>Diamants sont connus pour leur brillance et leur feu, ce qui en fait un choix populaire pour les bagues de fiançailles. Ils sont considérés comme un symbole d'amour et d'engagement depuis des siècles</p>
     <button><a href="aliance.php">voir plus</a></button>
     </div>
     <div>
     <div class="ali"><img src="images/organisateur-mariage.jpg" alt=""></div>
     <p>Diamants sont connus pour leur brillance et leur feu, ce qui en fait un choix populaire pour les bagues de fiançailles. Ils sont considérés comme un symbole d'amour et d'engagement depuis des siècles</p>
     <button><a href="aliance.php">voir plus</a></button>
     </div>
     <div>
     <div  class="ali"><img src="images/alliance-mariage.jpg" alt=""></div>
     <p>Diamants sont connus pour leur brillance et leur feu, ce qui en fait un choix populaire pour les bagues de fiançailles. Ils sont considérés comme un symbole d'amour et d'engagement depuis des siècles</p>
     <button><a href="aliance.php">voir plus</a></button>
     </div>
     </div>
    </div>
     </section>
     
     <section class="sect_3">
      <h1>Une equipe  a l'écoute et très sympatiques </h1>
      <!-- <p>Une equipe  a l'écoute et très sympatiques , une prestation adaptée à toute à chacun, <br> je vous recomande fortement et sans hésitation les yeux fermés</p> -->
      <div class="equi">
     <div class="eq">
     <img class="img" src="images/jeune-garcon-afro-americain-tient-plateau-hamburger-au-restaurant_627829-1207.avif" alt="">
     </div>
     <div class="eq">
     <h3>Notre equipe 100% disponible pour vous</h3>
     <p style="margin: 2% 0%;margin-left: 10%; padding: 2% 5%;background: rgba(255, 255, 255, 0.37); color: black;">Une equipe  a l'écoute et très sympatiques , une prestation adaptée à toute à chacun, je vous recomande fortement et sans hésitation les yeux fermés, officiis totam fugiat, doloribus tempore?
     <br><br>Parcourez notre site et accédez à tous les prestataires de votre région en quelques clics.
     <br><br>Maintenant ipsum dolor sit amet consectetur adipisicing elit. Dolor nesciunt animi molestias ab, magni accusantium amet quod enim facere asperiores tempora sequi nostrum inventore dignissimos, officiis totam fugiat, doloribus tempore?</p>
     <button><a href="equipe.php">voir plus</a></button>
     </div>
    </div>
    
     
     </section>
     
     <section class="sect_4">
     
     <h1>Possibilité de choisir un lieu pour votre mariage</h1>
     
     <div>
     <img class="z1" src="images/1af3ac54a54ba65fb6a270d16a890375.jpg" alt="">
     <img class="z2" src="images/espace-mariage-piste-de-danse-et-tables-de-salle-a-manger-2b248d0.jpg" alt="">
     <img class="z3" src="images/Atawa_cristal_Mariage_ADRIEN_LEFEBRE_Hauts_de_France_2018_client1_2c022daf9f.jpg" alt="">
   
     </div>
     
     <div class="or">
     <h3>Organiser votre cérémonie de mariage dans l'un de ces lieux magnifique</h3>
     <p style="margin: 2% 10%;padding: 2% 5%;background: rgba(63, 11, 11, 0.699); color: white;border-radius: 45%;">L'espace de vos rêves
Naviguez et choisissez facilement votre lieu de réception parmi des centaines de domaines, restaurants et hôtels dans votre zone.</p>
    <div class="butt"> <button><a href="equipe.php">voir plus</a></button></div>
     </div>
     </section>
     
     <section style="background:#ffc18f17;margin-top: -5%;">
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
        
        <?php 
             $req = $bdd->query("SELECT * FROM commentaire");
              while($user= $req->fetch()){
          ?>
        <div class="carousel-caption text-start">
          <div class="pro"><img src="images/64228f3e50a1d9bb4bd40b9d_tiffany-r-tiffany-l-1000x1000-p-500.jpg" alt="" style="height: 100px;width: 100px;border-radius: 50%;" alt=""></div>
          <h5>Nom</h5>
          <p class="opacity-75"><?php echo $user['texte'] ?><p>
          </div>
        </div>
      </div>
      <?php } ?>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
          <div class="pro"><img src="images/64228f3e50a1d9bb4bd40b9d_tiffany-r-tiffany-l-1000x1000-p-500.jpg" alt="" style="height: 100px;width: 100px;border-radius: 50%;" alt=""></div>
            <h1>Amelie</h1>
            <p class="opacity-75">J'ai vraiment aimé ce site, sa ma beaucoup aidé dans l'organisation de notre mariage.Vraiment ces très fiable, je vous invites a venir a l'utiliser pour organer un mariage plandide..</p>
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
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
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
        
        


           </section>
           
           <section class="sect_1">
            <div class="ic0">
            <img src="images/" alt="">
            <img src="images/" alt="">
            <img src="images/" alt="">
            <img src="images/" alt="">
            <img src="images/" alt="">
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
        
    
    
    
    

    <script src="script.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>












