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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
</head>
<body>

    <header style=" background-image: linear-gradient(rgba(231, 231, 231, 0),rgba(63, 63, 63, 0.644)),url(images/Mariage-civil-Montreal-notaire-celebrant-de-mariage-celebration-de-mariage-civil-palais-de-justice-mariage-civil-salle-de-mariage-salle-celebration-de-mariage-civil-quebec-canada-21.jpg);">
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
   <h1 style="margin-top: -5%; color: rgb(248, 86, 11);opacity: 200%;filter:brightness(2.5);">Pour les decoration, la restauration, le lieu de ceremonie</h1>
   
   <marquee behavior="" direction="right" style=" margin-top: 3%;">
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
     
     <section class="sect_9">
     
        <div class="ic0">
            <!-- <img src="images/nike.webp" alt="">
            <img src="images/yahoo.webp" alt="">
            <img src="images/unity.webp" alt="">
            <img src="images/sony.webp" alt="">
            <img src="images/samsung.webp" alt=""> -->
            </div>
     
            <!-- <h1>Découvrer nos lieu et decoration</h1> -->
     
     <div class="deco">
     
     <h2>Nos décorations</h2>
     <h3 style="padding: 3% 5%;margin: 2% 10%;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem reiciendis ad suscipit repellat voluptatem cupiditate sapiente dolores fugiat. Praesentium, tempore quas! Dicta fuga ipsam rerum quaerat soluta veritatis ipsa ex.</h3>
     <div class="dec">
        
       <div class="sep">
        <img src="images/e3d59e7fa687da1bc67bf9c2b136f10a.jpg" alt="">
        <h3>Like</h3>
        <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
        <span class="i">
         <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
         <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
         <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
        <a href=""><i class="fa-brands fa-twitter" ></i></a>
        <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
    </span>
       </div> 
       <div class="sep">
        <img src="images/57a50db5bf8dc934df56f43eb5dccd87.jpg" alt="">
        <h3>Like</h3>
        <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
        <span class="i">
         <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
         <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
         <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
        <a href=""><i class="fa-brands fa-twitter" ></i></a>
        <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
    </span>
       </div> 
       <div class="sep">
        <img src="images/GettyImages-1171816219.webp" alt="">
        <h3>Like</h3>
        <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
        <span class="i">
         <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
         <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
         <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
        <a href=""><i class="fa-brands fa-twitter" ></i></a>
        <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
    </span>
       </div> 
       <div class="sep">
        <img src="images/b3f8f4277ca85268a9831d5d6c31de1d.jpg" alt="">
        <h3>Like</h3>
        <p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
        <span class="i">
         <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
         <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
         <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
        <a href=""><i class="fa-brands fa-twitter" ></i></a>
        <a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
    </span>
       </div> 
     
    </div>
    
     </div>
     
     
     </section>

     <section class="sect_10">
        <h1>Des lieux que nous vous proposons pour votre évènement</h1>
        <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi deleniti impedit iure consequuntur illo laborum, rem amet ipsam porro, fugiat iste ex aperiam nostrum blanditiis dignissimos! Soluta doloremque velit sequi.</h3>

<div class="dis">

    <div class="sep">
        <img src="images/Mariage-civil-Montreal-notaire-celebrant-de-mariage-celebration-de-mariage-civil-palais-de-justice-mariage-civil-salle-de-mariage-salle-celebration-de-mariage-civil-quebec-canada-21.jpg" alt="">
<h5>Luxe</h5>
<p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
<span class="i">
 <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
 <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
 <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
<a href=""><i class="fa-brands fa-twitter" ></i></a>
<a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
    </div>
    
<div class="sep">
    <img src="images/16640802-1192817464098747-8572334686566413652-n_3_96848_v1.jpeg" alt="">
<h5>Luxe</h5>
<p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
<span class="i">
 <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
 <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
 <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
<a href=""><i class="fa-brands fa-twitter" ></i></a>
<a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
</div>
    
<div class="sep">
    <img src="images/1af3ac54a54ba65fb6a270d16a890375.jpg" alt="">
<h5>Luxe</h5>
<p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
<span class="i">
 <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
 <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
 <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
<a href=""><i class="fa-brands fa-twitter" ></i></a>
<a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
</div>

<div class="sep">
    <img src="images/CcUPuzTR4aoAzBDTJd3CzZ.jpg" alt="">
<h5>Luxe</h5>
<p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
<span class="i">
 <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
 <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
 <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
<a href=""><i class="fa-brands fa-twitter" ></i></a>
<a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
</div>
    

</div>
     </section>

     <section class="sect_11">
<h1>Notre équipe à votre disposition; n'hésitez pas à nous contacter pour tous besoins</h1>

<div class="content">

<div class="box">
    <img src="images/1-00-header-3.jpg" alt="">

<div class="content">

<div>
<h2>Asistance masculin</h2>
<p> Explicabo facilis, voluptates quam quidem, officiis quas voluptatum, minima culpa consequatur delectus laboriosam dolores!</p>
<p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
<span class="i">
 <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
 <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
 <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
<a href=""><i class="fa-brands fa-twitter" ></i></a>
<a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
</div>

</div>


</div>
   
<div class="box">
    <img src="images/ouvrir-une-agence-d-organisation-de-mariage (1).webp" alt="">

<div class="content">

<div>
<h2>Asistance féminine</h2>
<p>Explicabo facilis, voluptates quam quidem, officiis quas voluptatum, minima culpa consequatur delectus laboriosam dolores!</p>
<p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
<span class="i">
 <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
 <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
 <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
<a href=""><i class="fa-brands fa-twitter" ></i></a>
<a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
</div>

</div>


</div>
   
<div class="box">
    <img src="images/ciric_288770-1024x682.jpg" alt="">

<div class="content">

<div>
<h2>Asistance mixte</h2>
<p>Explicabo facilis, voluptates quam quidem, officiis quas voluptatum, minima culpa consequatur delectus laboriosam dolores!</p>
<p class="p"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
<span class="i">
 <a href=""><i class="fa-solid fa-phone" style="color: rgb(4, 5, 4);"></i></a>
 <a href=""><i class="fa-brands fa-whatsapp" style="color: green;"></i></a>
 <a href=""><i class="fa-brands fa-facebook icon" style="color: rgb(31, 30, 30);"></i></a>
<a href=""><i class="fa-brands fa-twitter" ></i></a>
<a href=""> <i class="fa-brands fa-google" style="color: brown;"></i></a>
</span>
</div>

</div>


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