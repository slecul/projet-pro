<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Clinique vétérinaire Gaye-Metens</title>
   </head>
   <body>
      <!-- Navbar -->
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8 offset-sm-2 offset-md-2 offset-lg-2">
               <img src="assets/img/head.png" alt="Clinique vétérinaire Gaye-Metens">
            </div>
            <div class="connection col-sm-2 col-md-2 col-lg-2">
               <form action="">
                  <p class="connectionText">Connexion</p>
                  <label for="login">Identifiant :</label><input type="text" name="login" id="login" class="loginInput">
                  <label for="password">Mot de passe :</label><input type="password" name="password" id="password" class="loginInput">
                  <input type="submit" value="se connecter">
               </form>
            </div>
         </div>
      </div>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light sticky-top">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-center" id="navbarText">
            <ul class="navbar-nav ">
               <li class="nav-item active">
                  <a class="nav-link" href="vues/inscription.php">inscription</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="vues/connexion.php">Connexion</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="vues/profil.php">Profil</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Nos services</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Nos horaires</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Votre profil</a>
               </li>
            </ul>
            <div class="flagLanguages">
               <a href=""><img src="assets/img/anglais.png" alt="Drapeau anglais"></a>
               <a href=""><img src="assets/img/français.png" alt="Drapeau français"></a>
            </div>

         </div>
      </nav>
      <!-- Caroussel -->
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="assets/img/carouselIppy.png" class="d-block w-100" alt="Image d'un chien chez le vétérinaire.">
                     </div>
                     <div class="carousel-item">
                        <img src="assets/img/carouselVic.png" class="d-block w-100" alt="Photo de la Clinique vétérinaire de Vic-sur-Aisnes.">
                     </div>
                     <div class="carousel-item">
                        <img src="assets/img/carouselTrosly.png" class="d-block w-100" alt="Photo de la Clinique vétérinaire de Vic-sur-Aisnes.">
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- Actus-->
      <div class="container-fluid actus">
         <div class="title">
         <h1>Actualités</h1>
         <p>date du jour</p>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5">
               <div class="bd-example">
                  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="assets/img/racoon.png" class="d-block w-100" alt="Photo d'un raton laveur en train d'être soigné.">
                           <div class="carousel-caption d-none d-md-block">
                              <p>Un raton laveur à la clinique :</p>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img src="..." class="d-block w-100" alt="...">
                           <div class="carousel-caption d-none d-md-block">
                              <p>Second slide label</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img src="..." class="d-block w-100" alt="...">
                           <div class="carousel-caption d-none d-md-block">
                              <p>Third slide label</p>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
               <div class="infos col-sm-12 col-md-3 col-lg-3 offset-md-1 offset-lg-1">
                  <h2>Bon à savoir :</h2>
                  <ul>
                     <li></li>
                  </ul>
               </div>
            <div class="statut col-sm-12 col-md-3 col-lg-3">
               <h2>Statut</h2>
               <ul></ul>
            </div>
         </div>
      </div>
      <!-- Services -->
      <div class="container-fluid">
            <h2 class="title">Nos Services</h2>
         <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2 offset-1"><img src="assets/img/stérilisation.png" alt="photo de stérilisation."></div>
            <div class="col-sm-12 col-md-2 col-lg-2"><img src="assets/img/chatSoin.png" alt="photo d'un chat en soins."></div>
            <div class="col-sm-12 col-md-2 col-lg-2"><img src="assets/img/microscope.png" alt="photo du vétérinaire regardant au microscope."></div>
            <div class="col-sm-12 col-md-2 col-lg-2"><img src="assets/img/perroquet.png" alt="photo d'un perroquet"></div>
            <div class="col-sm-12 col-md-2 col-lg-2"><img src="assets/img/chirurgie4.png" alt="photo du vétérinaire en train d'opérer."></div>
         </div>
      </div>
      <!-- Contact -->
      <div class="container-fluid">
         <div class="row contact">
            <div class="col-sm-12 col-md-4 col-lg-4 contactElement">
               <div class="contactAlign">
               <h3>Nos structures :</h3>
               <ul>
                  <li>À Vic-Sur-Aisnes : 3 rue de rivière, 02290.</li>
                  <li>À Cuise-La Motte : jeconnaispasl'adresse.</li>
               </ul>
               </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 contactElement">
               <div class="contactAlign">
               <h3>Nous contacter</h3>
               <p>03 23 55 36 12</p>
               </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 contactElement">
               <div class="contactAlign">
               <h3>Service d'urgences</h3>
               <p>03 23 55 36 12</p>
               </div>
            </div>
         </div>
      </div>
      <!-- équipe -->
      <div class="container-fluid">
         <div class="row team">
            <div class="col-12 titleTeam">               
            <h2>Notre équipe</h2>
            <p>Blablabalbalbalbalbalbalababbalbalablablabblablablablablablabalbalbalbablablabalbablabalablablablabalbalbalbalbalbabalbablababl</p>
            </div>
            <div class="col-sm-5 col-md-2 col-lg-2">
               <img src="assets/img/Christine.png" alt="Photo de la vétérinaire Christine Gaye-Metens">
               <h3 class="teamNames">Docteur Christine Gaye-Metens</h3>
               <p>Docteur en médecine vétérinaire</p>
            </div>
            <div class="col-sm-5 col-md-2 col-lg-2 ">
               <img src="assets/img/Jean-Pol.png" alt="Photo du vétérinaire Jean-Pol Gaye">
               <h3 class="teamNames">Docteur Jean-Pol Gaye</h3>
               <p>Docteur en médecine vétérinaire</p>
            </div>
            <div class="col-sm-5 col-md-2 col-lg-2">
               <img src="assets/img/Anne-Claire.png" alt="Photo de l'auxiliaire Anne-Claire">
               <h3 class="teamNames">Anne-Claire</h3>
               <p>Auxiliaire spécialisée vétérinaire</p>
            </div>
            <div class="col-sm-5 col-md-2 col-lg-2">
               <img src="assets/img/Christel.png" alt="Photo de l'auxiliaire Christelle">
               <h3 class="teamNames">Christelle</h3>
               <p>Auxiliaire vétérinaire</p>
            </div>
         </div>
      </div>
      
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   </body>
</html>