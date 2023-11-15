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

    <header style="   background-image: linear-gradient(rgba(231, 231, 231, 0),rgba(63, 63, 63, 0.644)),url(images/Header-Lucie-et-Maxime-2.jpg);">
        <nav>
        <ul>
        <img src="images/téléchargement (4).png" alt="" style="margin-top: -2.5%; height: 100px;border-radius: 50px; margin-right: 2%;">
            <li><a href="accueil.php">Accueil</a></li>
            <!-- <li><a href="#">Coordination</a></li> -->
            <!-- <li><a href="#">Portfolio</a></li> -->
            <li><a href="#">Service</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Contact</a></li>
            <div class="index">
            <button class="b1"><a href="inscription.php">S'enregistrer</a></button>
    <button class="b2"><a href="connexion.php">Se connecter</a></button>
            
      </div> 
            
    
    <!-- <div class="nom">
    <?php
    if ($_SESSION['nom']) {
      echo $_SESSION['nom'];
    }?>
    
    </div>
    
    
     
    <div class="dec" style=>
    <?php
    if ($_SESSION['nom']) {
    echo '<button><a href="index.php">Déconnexion</a></button>';
    } ?>
    </div>
    
            
             -->
            
            <img src="images/téléchargement (4).jpg" alt="" style="margin-top: -2.5%; height: 100px;margin-left: 2%;border-radius: 50px;">
        
        </ul>
   </nav>
   
   <div class="head">
   <!-- <h1 style="margin-top: -4%; color: rgb(248, 86, 11);">Les robes et costumes des marié. On vous met en contact avec les meuilleurs boutiques pour votre mariage</h1> -->
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
                <form action="">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mettez votre commentaire"></textarea> <br>
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






    