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

    <header style="   background-image: linear-gradient(rgba(231, 231, 231, 0),rgba(63, 63, 63, 0.644)),url(images/la-dot-un-element-cle-du-mariage-traditionnel-africain.jpeg);">
        <nav>
        <ul>
        <img src="images/téléchargement (4).png" alt="" style="margin-top: -2.5%; height: 100px;border-radius: 50px; margin-right: 2%;">
            <li><a href="accueil.php">Accueil</a></li>
            <!-- <li><a href="#">Coordination</a></li> -->
            <!-- <li><a href="#">Portfolio</a></li> -->
            <li><a href="service.php">Service</a></li>
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
            <button class="b1" style="   margin-left: 15px;"><a href="inscription.php">Enregistrer-vous</a></button>
            <button class="b2"><a href="connexion.php">Se connecter</a></button>    
      </div>' ;
    }
       ?>
  
    
    
    </div>
           
            
            <img src="images/téléchargement (4).jpg" alt="" style="margin-top: -2.5%; height: 100px;margin-left: 2%;border-radius: 50px;">
        
        </ul>
   </nav>
   
   <div class="head">
   <h1 style="margin-top: -2%; color: black;padding:0% 30%;">Les robes et costumes des marié</h1>
   
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

     </header style=" background-image: linear-gradient(rgba(231, 231, 231, 0),rgba(63, 63, 63, 0.644)),url(images/istockphoto-1181587386-1024x1024.jpg);">
     
     <section class="sect_6" style="background: rgba(112, 112, 107, 0.438);">
     <div class="ic2">
     <img src="images/téléchargement (3).png" alt="">
     <img src="images/téléchargement.jpg" alt="">
     <img src="images/téléchargement (5).png" alt="">
     <img src="images/téléchargement2.png" alt="">
     <img src="images/téléchargement (1).png" alt="">
    </div>
     
     <h1>Découvver les robes dans les meuilleurs boutiques</h1>
     
     <div class="rob">
     <div class="irob"><img src="images/QUEEEEN.jpg" alt=""></div>
     <div class="irob"><img src="images/r10_2x_2532883.jpg" alt=""></div>
     <div class="irob"><img src="images/robe-de-mariee-AGORA-23-13-toulon-var-83-paca-1.jpg" alt=""></div>
     <div class="irob"><img src="images/1018-7976_3_137836-1564408130.jpeg" alt=""></div>
     <div class="irob"><img src="images/241-08-face_3_191293-168804938795131.jpeg" alt=""></div>
     <div class="irob"><img src="images/147533-nmuyec.jpg" alt=""></div>
     <div class="irob"><img src="images/180701-1737_0846~2_xgaplus.jpg" alt=""></div>
     <div class="irob"><img src="images/29584-nicole-arienne-ok.jpeg" alt=""></div>
     <div class="irob"><img src="images/8982eb102afa6e519cbb6c387231d3d9.jpg" alt=""></div>
     </div>
      
      <h2>Les meuilleurs boutiques</h2>
     <div class="bouti">
     
     <div style="margin-left: 5%;">
     <div class="bou"><img src="images/images.jpg" alt=""></div>
     <p>Harum iure ipsum vero iusto, minima sunt laborum vitae ducimus, illum est!</p>
     <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
    <span class="i">
     <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
     <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
     <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
    <a href=""><i class="fa-brands fa-twitter" ></i></a>
    <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
    
     <div class="butt2"><button><a href="">Conctacté</a></button></div>
    </div>
    
    <div>
    <div class=""><img src="images/boutique_mariage_nice3.jpg" alt=""></div> 
    <p>Harum iure ipsum vero iusto, minima sunt laborum vitae ducimus, illum est!</p>
    <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
    <span class="i">
     <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
     <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
     <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
    <a href=""><i class="fa-brands fa-twitter" ></i></a>
    <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
    <div class="butt2"><button><a href="">Conctacté</a></button></div>
   </span>
    </div>
    
    <div>
    <div class="bou"><img src="images/eef16899-94e5-418a-9ce0-78969dfa496c_3_172831-163456134859440.jpeg" alt=""></div> 
    <p>Harum iure ipsum vero iusto, minima sunt laborum vitae ducimus, illum est!</p>
    <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
    <span class="i">
     <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
     <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
     <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
    <a href=""><i class="fa-brands fa-twitter" ></i></a>
    <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
    <div class="butt2"><button><a href="">Conctacté</a></button></div>
   </span>
    </div>
    
    <div>
     <div class="bou"><img src="images/vue-haut_3_188233-1558523822.jpeg" alt=""></div>
     <p>Harum iure ipsum vero iusto, minima sunt laborum vitae ducimus, illum est!</p>
     <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
    <span class="i">
     <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
     <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
     <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
    <a href=""><i class="fa-brands fa-twitter" ></i></a>
    <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
     <div class="butt2"><button><a href="">Conctacté</a></button></div>
    </div>
     
     
     </div>
     
     
     
     </section>
     
     <section class="sect_7">
     <div class="ic3">
        <img src="images/images.png" alt="">
        <img src="images/images (1).png" alt="">
        <img src="images/images (5).jpg" alt="">
        <img src="images/images (3).jpg" alt="">
        <img src="images/images (6).jpg" alt="">
     </div>
     
     
     <h1>Constumes des mariés</h1>
     <div class="disp">
     
     <div class="dis1">
     <img src="images/64ed48444decb5793c9cca6ddef882d9.jpg" alt="">
     <img src="images/17bfc2eddc0458e8661d53d6632c9e85.jpg" alt="">
     <img src="images/1d96004ff775c39b486230967b01fa41.jpg" alt="">
     <img src="images/marie-vue-laterale-costume-bleu_23-2149003490.jpg" alt="">
     <img src="images/costume-bleu-mariage-homme-waterloo.png" alt="">
     <img src="images/128132165-heureuse-mariée-afro-américaine-en-voile-blanc-souriant-près-du-marié-et-des-fleurs.jpg" alt="">
     </div>
     
     <div class="dis2">
     <div><img src="images/dsc01565-hdr_3_211361-161485026234658.jpeg" alt="">
     <img src="images/Costume_rdc4-1.webp" alt="">
     <img src="images/img-3073_3_211361-161485037664990.jpeg" alt="">
     <img src="images/dsc01580-hdr_3_211361-161485027823867.jpeg" alt=""> </div>
     <h2>Les boutiques</h2>
     <p> Tempora cum est et iure, voluptatum facere vero quis ea <br> voluptatem mollitia commodi sint minus, odio minima <br> </p>
     <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
    <span class="i">
     <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
     <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
     <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
    <a href=""><i class="fa-brands fa-twitter" ></i></a>
    <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
     <!-- <div class="butt3"><button><a href="">Contacté</a></button></div> -->
    </div>
    
</div>

<div class="log">
<img src="images/clothing-brand-boutique-logo,-icon-design-template-719f3bddebb8fd89386bffa27f2d8839_screen.jpg" alt="">
<img src="images/online-store-logo,-e-commerce-logo-(2)-design-template-cb9d14d3afd279503f8de3bf5ebe5a70.jpg" alt="">
<img src="images/9-Best-Boutique-Logos-and-How-to-Make-Your-Own-for-Free-image3.png" alt="">
<img src="images/Logo-boutique@2x.png" alt="">
<img src="images/online-store-logo,-e-commerce-logo-design-template-0d53622234589ba0ac5d2cd780e5b9d4_screen.jpg" alt="">

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






    