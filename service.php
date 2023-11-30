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

    <header style=" background-image: linear-gradient(rgba(59, 59, 59, 0.407),rgba(63, 63, 63, 0.857)),url(images/adobestock_65593952_cropped.jpg);">
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
   <h1 style="margin-bottom: 17%; color: rgb(254, 105, 20);opacity: 200%;filter:brightness(3);">Nos service</h1>
   <!-- <marquee behavior="" direction="right" style=" margin-top: 7%;">
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
   
   </marquee> -->
   
   <div class="ic">
    <img src="images/63e8da9968e3262a8ae5e991_engage.png" alt="">
    <img src="images/63e8da99eaf853532d5a5eb8_maroo-p-500.png" alt="">
    <img src="images/63e8da997073807a4727846f_guides-for-brides-p-500.png" alt="">
    <img src="images/63e8da99707380c4a927845b_wedding-sparrow-gold-p-500.png" alt="">
    <img src="images/63e8da998c09974b4cc18557_the-knot.png" alt="">
    </div>
   
   </div>

     </header>



     <section class="sect_12">
<h1>Nos services</h1>
<p>Adipisicing elit. Similique animi incidunt aliquam quisquam eos omnis doloribus, earum quasi distinctio, suscipit sapiente. Laboriosam molestiae nihil vitae eligendi. Harum cum reprehenderit fuga?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia labore, earum tempora laborum cupiditate magni! Deserunt reprehenderit ducimus totam laudantium magni repellat, corporis vel autem earum et, dolorem, numquam molestias!</p>

<div class="container">

<div>
  <h3>Organiser votre mariage en fonction de votre budjet</h3>
  <p> Consectetur adipisicing elit. Id reprehenderit vel quidem. Nesciunt consequuntur distinctio sunt nihil doloremque placeat hic aut delectus, tempora iste tempore incidunt quo perferendis porro? Facilis? Amet consectetur adipisicing elit. Doloremque voluptatem voluptatum nam error tenetur perferendis necessitatibus? Laborum non rem qui consectetur officia eaque voluptatem accusantium ratione. Quisquam aut aliquid nulla!</p>
<button><a href="">votez un budjet</a></button>
</div>
<div>
<img src="images/ciric_288770-1024x682.jpg" alt="">
</div>


</div>

     </section>

     <section class="sect_13">

      <h1>Vos besoins</h1>


      <div class="container">

<div>
  <img src="images/Quels-sont-les-différents-types-secrétariats-externalisés_3.jpg" alt="">
</div>

<div>
<h3>Votre besoin</h3>
<p>Nous definissons ensemble vos besoins et elaborons votre demande autour de la date, de l'heure, et du budget communiquer!</p>
<button><a href="">Exprimer</a></button>

</div>






      </div>

     </section>


     <section class="sect_14">

      <h1>Pris en charge de la restauration</h1>
      <p>Remlos ipsum dolor sit amet consectetur adipisicing elit. Tempore, esse doloribus quidem ullam vitae in quia tempora illum, magni ipsa facilis id est quod quo cupiditate corrupti, necessitatibus porro quibusdam.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, eligendi. Repellendus dignissimos doloremque optio consequatur voluptates, enim, consequuntur explicabo minima praesentium reiciendis quam labore dicta soluta nulla, aliquid corporis eaque.</p>
      
      <div class="container">
        <img src="images/77794789-catering-y-comida-para-bodas-y-eventos.jpg" alt="">
        <img src="images/108812363-délicieuses-collations-sur-la-table-de-réception-de-mariage-dans-un-restaurant-en-plein-air-de.jpg" alt="">
        <img src="images/portfolio_img_7.jpg" alt="">
        <img src="images/image_3_127853_v10.jpeg" alt="">
      </div>
      
      <button><a href="">Faire une demande !</a></button>
      
      
      </section>

      <section class="sect_15">
<h1>Des photographe experimente</h1>
<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, mollitia corrupti. Quos autem deserunt quam amet voluptates dicta animi natus, ipsam quasi sequi dignissimos eaque in beatae, sed, error exercitationem.</h5>
<div class="container">
<div>
  <h3>Prendre des photos et les recuperer plutard</h3>
  <p>Bapsum dolor sit amet consectetur adipisicing elit. Soluta debitis, natus expedita libero magni velit ipsam veritatis nisi vitae ad voluptatum, ea consectetur nobis repudiandae provident. Numquam atque asperiores accusamus?</p>
<button><a href="">Votre demande !</a></button>
</div>

<div>
  <img src="images/103180-thumbnail-resized-BLOG_PAGE_THUMBNAIL .jpg" alt="">
  <!-- <img src="images/Photographe femme.webp" alt=""> -->
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