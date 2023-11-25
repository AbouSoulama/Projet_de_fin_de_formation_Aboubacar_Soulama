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

    <header style=" background-image: linear-gradient(rgba(231, 231, 231, 0),rgba(63, 63, 63, 0.644)),url(images/1000_F_68487456_xcCRBfnLaxiYPnY3G8rLDWexoRb5vTXi.jpg);">
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
   <h1 style="margin-top: 0%; color: rgb(254, 105, 20);">Les alliances des marié</h1>
   
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
   
   
   
   <div class="ic">
    <img src="images/63e8da9968e3262a8ae5e991_engage.png" alt="">
    <img src="images/63e8da99eaf853532d5a5eb8_maroo-p-500.png" alt="">
    <img src="images/63e8da997073807a4727846f_guides-for-brides-p-500.png" alt="">
    <img src="images/63e8da99707380c4a927845b_wedding-sparrow-gold-p-500.png" alt="">
    <img src="images/63e8da998c09974b4cc18557_the-knot.png" alt="">
    </div>
   
   </div>

     </header>
     
     <section class="sect_8">
     
     <div class="ic4">
     <img src="images/amazon.webp" alt="">
     <img src="images/63e8da99eaf853532d5a5eb8_maroo-p-500.png" alt="">
     <img src="images/unity.webp" alt="">
     <img src="images/yahoo.webp" alt="">
     
     </div>
     
     <h1>Les alliances de qualité et leurs boutiques</h1>
     
     <div class="all">
     <div class="al"><img src="images/alliance-mariage-offerte.jpg" alt=""></div>
     <div class="al"><img src="images/alliance-mariage.jpg" alt=""></div>
     <div class="al"><img src="images/alliance-mariage-couple-049ikq-1.jpg" alt=""></div>
     <div class="al"><img src="images/Alliances-3_Fotolia_1719934.jpg" alt=""></div>
     <div class="al"><img src="images/cdbb095782aa37d3970f7b38a00ef0ca.jpg" alt=""></div>
     <div class="al"><img src="images/alliance-couple-bague-anneau-dore-a-l-or-fin.jpg" alt=""></div>
     <div class="al"><img src="images/2148463_uploaded_image1_1590023535.jpg" alt=""></div>
     <div class="al"><img src="images/home_alliance_femme.jpg" alt=""></div>
     </div>
     <h5 style="margin: 2% 10%;padding: 2% 5%;background: black; color: white;border-radius: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit necessitatibus, dolore veritatis corporis nobis earum est, magnam provident enim quibusdam voluptatibus culpa ex natus perspiciatis nisi hic laudantium error aspernatur.
    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos aperiam laudantium est eius dolor vel deserunt odit quaerat recusandae amet temporibus repellat dolores, architecto qui eveniet asperiores praesentium. Maxime, iure.</h5>
     <h2>Les meuilleurs boutiques</h2>
     
    
     
    
     <div class="di">
     <div>
     <img src="images/boutiquejpg_65265bac39ecd.jpg" alt="">
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur repellat numquam id, nobis quisquam eum officia ipsum aliquam magni libero voluptates, rerum natus recusandae doloribus asperiores aperiam corrupti sed.</p>
     <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
     <span class="i">
      <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
      <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
      <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
     <a href=""><i class="fa-brands fa-twitter" ></i></a>
     <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
 </span>
     <!-- <div class="bo"><button><a href="">Contacté</a></button></div> -->
    </div>
    <div>
     <img src="images/hanna-1-MD.webp" alt="">
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur repellat numquam id, nobis quisquam eum officia ipsum aliquam magni libero voluptates, rerum natus recusandae doloribus asperiores aperiam corrupti sed.</p>
     <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
    <span class="i">
     <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
     <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
     <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
    <a href=""><i class="fa-brands fa-twitter" ></i></a>
    <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
     <!-- <div class="bo"><button><a href="">Contacté</a></button></div> -->
    </div>
    <div>
     <img src="images/Les-Georgettes-Sévigné-3-BDlogos.jpg" alt="">
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur repellat numquam id, nobis quisquam eum officia ipsum aliquam magni libero voluptates, rerum natus recusandae doloribus asperiores aperiam corrupti sed.</p>
     <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
     <span class="i">
      <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
      <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
      <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
     <a href=""><i class="fa-brands fa-twitter" ></i></a>
     <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
 </span>
     <!-- <div class="bo"><button><a href="">Contacté</a></button></div> -->
    </div>
</div>
    
    <div class="di">
    <div>
     <img src="images/salon-alliance.jpg" alt="">
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur repellat numquam id, nobis quisquam eum officia ipsum aliquam magni libero voluptates, rerum natus recusandae doloribus asperiores aperiam corrupti sed.</p>
     <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
    <span class="i">
     <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
     <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
     <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
    <a href=""><i class="fa-brands fa-twitter" ></i></a>
    <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
     <!-- <div class="bo"><button><a href="">Contacté</a></button></div> -->
    </div>
    <div>
     <img src="images/Les-Georgettes-Sévigné-3-BDlogos.jpg" alt="">
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur repellat numquam id, nobis quisquam eum officia ipsum aliquam magni libero voluptates, rerum natus recusandae doloribus asperiores aperiam corrupti sed.</p>
     <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
     <span class="i">
      <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
      <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
      <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
     <a href=""><i class="fa-brands fa-twitter" ></i></a>
     <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
 </span>
     <!-- <div class="bo"><button><a href="">Contacté</a></button></div> -->
    </div>
    <div>
     <img src="images/ADD-Ferney4-edited.jpg" alt="">
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur repellat numquam id, nobis quisquam eum officia ipsum aliquam magni libero voluptates, rerum natus recusandae doloribus asperiores aperiam corrupti sed.</p>
     <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
    <span class="i">
     <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
     <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
     <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
    <a href=""><i class="fa-brands fa-twitter" ></i></a>
    <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
     <!-- <div class="bo"><button><a href="">Contacté</a></button></div> -->
    </div>
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
    <div class="text-center p-4"  style="background: rgb(46, 44, 44);margin-top: %;">
     <span style="color: bisque;"> © 2021 Copyright:</span>
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/" style="color: aliceblue;">N'ésitez pas à nous contacter</a>
    </div>
    <!-- Copyright -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>