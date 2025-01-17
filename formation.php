<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entête et Diaporama avec Bootstrap</title>
  <!-- Liens vers Bootstrap et Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <style>
    
    body {
      overflow-x: hidden; /* Empêche le débordement horizontal */
    }

    .container {
      max-width: 100%; /* Définit une largeur maximale pour le contenu */
    }

    /* Ajoutez ces styles à votre balise <style> */

    /* Espacement et Marges */
    .container {
      padding: 20px;
    }

    .apropos {
      padding: 50px 0;
    }

    .image-section {
      margin-top: 50px;
    }

    .comment-form {
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .footer {
      margin-top: 50px;
      padding: 30px 0;
    }

    /* Typographie */
    body {
      font-family: Arial, sans-serif;
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: bold;
    }

    /* Couleurs */
    .menu-section {
      background-color: #333;
    }

    .header {
      background-color: #333 ;
      color: #fff;
    }

    .menu-section .navbar-nav .nav-link {
      color: #fff;
    }

    .menu-section .navbar-nav .nav-link:hover {
      color: #007bff;
    }

    .footer {
      background-color: #333;
      color: #fff;
    }

    .footer a {
      color: #fff;
    }

    .footer a:hover {
      color: #007bff;
    }

    /* Images */
    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    /* Contraste */
    .navbar-brand {
      color: #fff;
    }

    body {
      overflow-x: hidden; /* Empêche le débordement horizontal */
    }

    .container {
      max-width: 100%; /* Définit une largeur maximale pour le contenu */
    }

    /* Styles pour l'en-tête */
    .header {
      padding: 10px;
    }

    .header ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .header ul li {
      display: inline-block;
      margin-right: 20px;
    }

    /* Styles pour le menu */
    .menu-section {
      background-color:   rgb(180, 180, 180);
      padding: 10px;
    }

    .menu-section .navbar-brand {
      margin-right: auto;
    }

    .menu-section .navbar-nav {
      margin-left: auto;
    }

    .nav-item a:hover {
      color: #007bff;
    }

    .navbar-brand span {
      color: #000;
    }

    .navbar-brand {
      font-size: 30px;
      font-weight: 900;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    .btn-en-savoir-plus:hover {
    background-color: #0056b3; /* Bleu un peu plus foncé au survol */
}
  </style>
  </head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark menu-section" id="menu">
  <div class="container">
    <a class="navbar-brand" href=""><i class="fas fa-handshake"></i> <span>E</span>sso-plus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><i class="fas fa-home"> L’Accueil</i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="nos_offre.php"><i class="fas fa-shopping-cart"> Nos Offres</i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="formation.php"><i class="fas fa-graduation-cap">Formation</i> </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php"><i class="fas fa-envelope">Contact</i> </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Les scripts Bootstrap et Font Awesome -->


<div class="container">
  <div class="row">
    <div class="col text-center">
      <h2>Notre Objectif</h2>
      <p>Notre objectif dans nos programmes de formation en savonnerie et en jardinage est de fournir à nos participants une expérience complète et enrichissante. En savonnerie, nous enseignons les techniques de fabrication du savon avec un accent sur la sécurité, la qualité et la créativité, tout en encourageant l'innovation responsable. Pour le jardinage, nous couvrons la planification, la conception et l'entretien des jardins, en mettant l'accent sur des pratiques durables et respectueuses de l'environnement. Notre objectif ultime est d'autonomiser nos participants en leur donnant les compétences nécessaires pour réussir dans ces domaines, tout en favorisant le respect de l'environnement et le développement personnel.</p>   
    </div>
  </div>
</div>

<style>
.btn-en-savoir-plus {
    background-color: #007bff; /* Bleu clair */
    padding: 10px 20px; /* Ajoutez du rembourrage pour former un rectangle */
    border-radius: 5px; /* Ajoutez un peu de bord arrondi pour une meilleure apparence */
    color: white; /* Couleur du texte */
    text-decoration: none; /* Supprimez le soulignement par défaut */
    display: inline-block; /* Permet au bouton d'être affiché comme un élément de bloc */
    margin-bottom: 10px; /* Ajoutez une marge en bas */
    margin-top: 30px;
}

.btn-en-savoir-plus:hover {
    background-color: #0056b3; /* Bleu un peu plus foncé au survol */
}
</style>

<section class="apropos" id="apropos">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2 class="titre-texte">
           Formation en Jardinnage
        </h2>
        <p>
        Notre entreprise propose des formations en jardinage, adaptées à tous les niveaux, de débutant à avancé. Nos programmes couvrent un large éventail de sujets, de la conception de jardins à la gestion durable des ressources. Nous visons à inspirer la création de jardins écologiquement responsables, tout en fournissant aux participants les compétences nécessaires pour réussir dans le domaine du jardinage.
        </p>
        <a href="inscrivez_vous.php" class="btn btn-primary btn-en-savoir-plus">Inscrivez-vous</a>
      </div>
      <div class="col-sm-6">
        <div class="img">
          <img src="f6.webp" class="photo img-fluid" alt="img">
        </div>           
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col text-center">
      <h2>Formation en Savonnerie</h2>
      <p>Dans notre entreprise, nous mettons à disposition des formations approfondies en savonnerie, offrant à nos participants une immersion complète dans l'art de créer des savons artisanaux. Nos cours sont conçus pour enseigner non seulement les techniques fondamentales de fabrication du savon, mais aussi pour encourager la créativité et l'innovation. En suivant nos programmes, les apprenants apprennent à maîtriser chaque aspect du processus, depuis le choix des ingrédients de qualité jusqu'à la conception et la décoration de savons uniques. Nous croyons fermement en l'importance de transmettre des connaissances pratiques et théoriques, tout en encourageant nos participants à explorer leur propre style et à développer leur passion pour cet artisanat.</p>   
      <a href="inscrivez_vous.php" class="btn btn-primary btn-en-savoir-plus">Inscrivez-vous</a>
    </div>
  </div>
</div>

<!-- Footer -->
<!-- Footer -->
<footer class="footer bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <!-- Logo et présentation de l'entreprise -->
      <div class="col-md-4">
        <h4><a class="navbar-brand" href=""><i class="fas fa-handshake"></i> <span>E</span>sso-plus</a></h4>
        <p>Présentation de l'entreprise</p>
      </div>
      <!-- Localisation de l'entreprise -->
      <div class="col-md-4">
        <h4>Localisation</h4>
        <p>Adresse de l'entreprise<br>
        Division de l'entreprise</p>
      </div>
      <!-- Liens de raccourci du menu et plus d’information -->
      <div class="col-md-4">
        <h4>Liens rapides</h4>
        <ul class="list-unstyled">
          <li><a href="formation.php" class="text-white">Formation</a></li>
          <li><a href="nos_offre.php" class="text-white">Nos Offres</a></li>
          <li><a href="contact.php" class="text-white">Contact</a></li>
        </ul>
      </div>
    </div>
    <!-- En-tête -->
    <header class="header bg-dark text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li><i class="fas fa-building"></i>+228 70-44-81-06</li>
              <li><i class="far fa-envelope"></i> gregoire8@gmail.com</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="social-icons">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="#"><i class="fas fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  </div>
  <!-- Copyright -->
  <div class="row mt-3">
    <div class="col-12">
      <p class="text-center m-0 copyright-text">Copyright 2024 <a href="#" class="text-white"> ESSO-PLUS</a> Tous droits réservés.</p>
    </div>
  </div>
</footer>
<!-- Les scripts Bootstrap et Font Awesome -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.sticky {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000; /* Assurez-vous que le menu reste au-dessus de tout autre contenu */
  background-color: #333; /* Couleur de fond du menu lorsque fixé */
  box-shadow:0 2px 4px rgba(0,0,0,0.1); /* Ajoutez une ombre pour améliorer la visibilité */
  transition: all 0.3s ease; /* Une transition douce pour une meilleure expérience utilisateur */
}

/* Vous pouvez également ajouter d'autres styles comme la taille du texte, la couleur, etc. */
</style>

<script>
window.addEventListener('scroll', function() {
    const menu = document.getElementById('menu'); // Sélectionnez votre menu par son ID
    menu.classList.toggle("sticky", window.scrollY > 0);
});
</script>

</body>
</html>