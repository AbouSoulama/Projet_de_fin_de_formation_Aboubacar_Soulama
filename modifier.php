<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    
     <div class="container">
     
    <div class="row">
    
    <div class="col s12">
        <h1>Modifier l'utilisateur</h1>
        
        <form action="/ajouter/traitement" method="POST" class="form-group">

                        <div class="form-group">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="nom" placeholder="modifier votre nom">
                        </div>
                        <div class="form-group">
                            <label for="Prenom" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="Prenom" name="prenom" placeholder="modifier votre prénom">
                        </div>

                        <div class="form-group">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="Email" name="email" placeholder="modifier votre email">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="Mot_de_passe" name="mot_de_passe" placeholder="modifier votre mot de passe">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Nom utilisateur</label>
                            <input type="text" class="form-control" id="Text" name="nom_utilisateur" placeholder="modifier votre nom utilisateur">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Tel</label>
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="modifier votre numero de telephone ">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="Photo" name="photo" placeholder="modifier votre photo ">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Status</label>
                            <input type="text" class="form-control" id="Statut" name="statut" placeholder="modifier le statut ">
                        </div>
                       
                       <br><br>
                        <button type="submit" class="btn btn-primary">Modifier l'utilisateur</button>
                        <br><br>
                        <a href="/utilisateur" class="btn btn-danger"> Revenir a la liste des utilisateurs</a>
                        <br>
                </form>
       
      
    </div>
   
    </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>