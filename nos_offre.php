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


<style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .bg-image {
      background-color: #f2f2f2;
      height: 60vh;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .content {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .content h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .content p {
      font-size: 1.5rem;
    }

    .fa-star {
      font-size: 3rem;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container-fluid px-0">
    <div class="row mx-0">
      <div class="col-12 bg-image">
        <div class="content">
        <h1 class="display-4 text-center text-dark"><i class="fas fa-star"></i> NOS OFFRES <i class="fas fa-star"></i></h1>

        </div>
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
      <div class="col-sm-6 order-sm-2">
        <h2 class="titre-texte">
          Entretient Et Nettoyage
        </h2>
        <p>
        le ménage telle que le nettoyage et l’entretien professionnels. Nous intervenons dans tous les secteurs d’activité en proposant des services adaptés aux besoins industriels de nos clients. Nos prestations incluent le nettoyage de bâtiments de bureaux et de maisons, le ménage à domicile, ainsi que la désinfection, la désinsectisation et l’entretien des carreaux.
</p>
        <a href="entretient.php" class="btn btn-primary btn-en-savoir-plus">Lire plus</a>
      </div>
      <div class="col-sm-6 order-sm-1">
        <div class="img">
          <img src="f4.jpg" class="photo img-fluid" alt="img">
        </div>           
      </div>
    </div>
  </div>
</section>

<section class="apropos" id="apropos">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2 class="titre-texte">
          Jardinnage
        </h2>
        <p>
        Notre expertise en jardinage nous permet d'offrir une gamme diversifiée de services, comprenant l'aménagement paysager, l'entretien des espaces verts, la plantation et la taille des arbustes. Notre équipe professionnelle s'engage à fournir un travail de qualité tout en respectant l'environnement et en favorisant la biodiversité. Que ce soit pour des projets résidentiels, commerciaux ou institutionnels, nous sommes équipés pour répondre à vos besoins en matière de jardinage avec un service de qualité supérieure.
        </p>
        <a href="jardinnage.php" class="btn btn-primary btn-en-savoir-plus">Lire plus</a>
      </div>
      <div class="col-sm-6">
        <div class="img">
          <img src="f6.webp" class="photo img-fluid" alt="img">
        </div>           
      </div>
    </div>
  </div>
</section>

<section class="apropos" id="apropos">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 order-sm-2">
        <h2 class="titre-texte">
          Transport
        </h2>
        <p>
        Avec notre solide expérience et notre savoir-faire éprouvé dans le domaine du transport, nous sommes en mesure d'offrir une vaste gamme de services répondant à une multitude de besoins. Que ce soit pour des déplacements locaux ou longue distance, notre équipe professionnelle et bien équipée garantit des solutions de transport fiables et efficaces. Nous mettons un point d'honneur à assurer la sécurité et le confort de nos clients à chaque étape de leur voyage, tout en fournissant un service personnalisé et attentif à leurs besoins spécifiques. Qu'il s'agisse de transports de personnes ou de marchandises, nous sommes là pour répondre à vos exigences avec professionnalisme et dévouement.
        </p>
        <a href="transport.php" class="btn btn-primary btn-en-savoir-plus">Lire plus</a>
      </div>
      <div class="col-sm-6 order-sm-1">
        <div class="img">
          <img src="f7.jpg" class="photo img-fluid" alt="img">
        </div>           
      </div>
    </div>
  </div>
</section>

<section class="apropos" id="apropos">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2 class="titre-texte">
          Savonnerie
        </h2>
        <p>
        Grâce à notre savoir-faire étendu dans le domaine de la savonnerie, nous sommes en mesure de créer une large gamme de produits, allant des savons traditionnels aux formulations spécialisées. Notre expertise nous permet de répondre aux besoins spécifiques de nos clients en proposant des produits de qualité supérieure, élaborés avec soin et souci du détail. Nous accordons une grande importance à la qualité de nos ingrédients et à nos processus de fabrication, garantissant ainsi des produits finis qui répondent aux normes les plus élevées en matière de santé et de sécurité. Que ce soit pour des besoins personnels, commerciaux ou industriels, notre savonnerie est prête à fournir des solutions adaptées et à satisfaire les exigences les plus exigeantes.
         </p>
        <a href="savonnerie.php" class="btn btn-primary btn-en-savoir-plus">Lire plus</a>
      </div>
      <div class="col-sm-6">
        <div class="img">
          <img src="f12.jpg" class="photo img-fluid" alt="img">
        </div>           
      </div>
    </div>
  </div>
</section>

<section class="apropos" id="apropos">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 order-sm-2">
        <h2 class="titre-texte">
          Gardinnage et Securité
        </h2>
        <p>
        Notre engagement envers le gardiennage et la sécurité se reflète dans notre approche holistique de la protection des biens et des personnes. En combinant nos compétences en gardiennage avec des pratiques sécuritaires, nous veillons à créer des environnements sûrs et protégés pour nos clients. Notre équipe dévouée travaille avec diligence pour garantir que chaque mission de gardiennage soit menée avec professionnalisme et vigilance, en respectant les normes de sécurité les plus strictes. En tant que spécialistes du gardiennage axés sur la sécurité, nous nous efforçons de fournir à nos clients une tranquillité d'esprit totale en assurant une surveillance constante et efficace de leurs biens et de leurs espaces.
          </p>
          <a href="securite.php" class="btn btn-primary btn-en-savoir-plus">Lire plus</a>
        
      </div>
      <div class="col-sm-6 order-sm-1">
        <div class="img">
          <img src="f.webp" class="photo img-fluid" alt="img">
        </div>           
      </div>
    </div>
  </div>
</section>


<section class="apropos" id="apropos">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2 class="titre-texte">
          Conseils & Formations
        </h2>
        <p>
        Vous cherchez une formation de qualité dans les domaines de l'entretien, du nettoyage, du jardinage, de la sécurité ou même du transport? Ne cherchez plus! ESSO-PLUS est là pour répondre à vos besoins professionnels avec des services spécialisés et fiables. Rejoignez-nous dès aujourd'hui pour transformer vos compétences en véritables atouts dans ces secteurs en plein essor
         </p>
        <a href="formation.php" class="btn btn-primary btn-en-savoir-plus">Nos formations</a>
      </div>
      <div class="col-sm-6">
        <div class="img">
          <img src="formation.jpg" class="photo img-fluid" alt="img">
        </div>           
      </div>
    </div>
  </div>
</section>

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