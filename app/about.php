<?php 

 
$_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lang = $_GET['lang'] ?? 'fr';
 
?>
<!DOCTYPE html>
<html lang='<?=isset($lang) ? $lang : 'fr'?>'>
  <head>
    <?= require_once 'include/head.php'?>
  </head>

  <body class="rlr-body">
    <!-- Header -->
    <header>
      <?= require_once 'include/header.php'?>
    </header>
    <!-- Main Content -->
    <main id="rlr-main" class="rlr-main--fixed-top">
      <!-- Hero Banner -->
      <section class="rlr-about-hero">
        <div class="container">
          <div class="rlr-about-hero__content">
            <img class="rlr-about-hero__bg" src="./assets/images/banner/Acceuil.png" alt="..." />
            <div class="rlr-about-hero__content-inner">
              <h1 class="type-d1 rlr-about-hero__title" style="color: orangered;"> Amitié Voyage Sénégal</h1>
              <div class="rlr-about-hero__cards">
                <div class="rlr-about-hero-card" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
                <?php 
                        if ($lang==="en") {
                          echo '<h5 class="type-h5-semibold rlr-about-hero-card__title">Who we are ?</h5>';
                          echo '  <p class="type-lead rlr-about-hero-card__desc">
                          A team of professionals offers tailor-made programs to discover the legendary hospitality of the Senegalese population, through diversified programs to satisfy customers and local populations.</p>';
                        }elseif($lang==="fr") {
                          echo '<h5 class="type-h5-semibold rlr-about-hero-card__title">Qui nous sommes ?</h5>';
                          echo '  <p class="type-lead rlr-about-hero-card__desc">Une équipe de professionnels propose des programmes sur mesure pour découvrir la légendaire hospitalité de la population Sénégalaise, à travers des programmes diversifiés pour satisfaire la clientèle et les populations locales.</p>';
                        }
                      ?>
                 
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Vision -->
      <section class="rlr-about rlr-section rlr-section__my">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <!-- Section heading -->
              <div class="rlr-section__title">
              <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-section__title--main">An experiment put into action</h2>';
                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-section__title--main">Une expérience mise en marche</h2>';
                        }
                      ?>
                
                <span class="rlr-section__title--sub"></span>
              </div>
              <div class="row gy-5">
                <div class="col-xl-6" data-aos="fade-up" data-aos-offset="250" data-aos-duration="500">
                  <!-- Text card -->
                  <div class="rlr-text-card rlr-text-card--numbered">
                  <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-section__title--main">An experiment put into action</h2>';
                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-section__title--main">Une expérience mise en marche</h2>';
                        }
                      ?>
                    <h5 class="rlr-text-card__title">1</h5>
                    <?php 
                        if ($lang==="en") {
                          echo ' <p class="rlr-text-card__desc">With around twenty years of experience in Tourism, the idea of establishing this travel agency aims to promote sustainable, equitable, humanitarian and social Tourism.
                          Through tailor-made and diversified programs for better customer satisfaction and local populations, a team of professionals accompanies you to discover a country full of contrasts where the legendary hospitality of the population called TERANGA SENEGALAISE is the stamp of an entire people.
                      </p>';
                        }elseif($lang==="fr") {
                          echo ' <p class="rlr-text-card__desc">Fort d’une vingtaine d’années d’expériences dans le Tourisme l’idée d’assoir cet Agence de voyage vise à promouvoir un Tourisme durable, équitable, humanitaire, et social.
                          A travers des programmes conçus sur mesure et diversifiés pour une meilleure satisfaction de la clientèle et des populations locales, une équipe de professionnels vous accompagne pour la découverte d’un pays pleins de contrastes ou l’hospitalité légendaire de la population dénommée TERANGA SENEGALAISE est le cachet de tout un peuple.
                      </p>';
                        }
                      ?>
                   
                  </div>
                </div>
                
              </div>
            </div>
            <div class="offset-xl-1 col-lg-5">
              <div class="rlr-img rlr-img--dotted img-fluid">
                <img class="img-fluid" src="./assets/images/about11.png " alt=" image our vision" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Values -->
      <section class="rlr-about rlr-section rlr-section__my">
        <div class="container">
          <div class="row">
            <div class="offset-xl-1 col-lg-5 flex-sm-column-reverse rlr-dotted-image">
              <div class="rlr-img rlr-img--dotted-reversed">
                <img class="img-fluid" src="./assets/images/about12.png " alt=" image our values" />
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Section heading -->
              <div class="rlr-section__title">
              <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-section__title--main">Our strong points</h2>';
                          echo '<span class="rlr-section__title--sub">A Humanitarian travel agency!!</span>';
                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-section__title--main">Nos Points Forts</h2>';
                          echo '<span class="rlr-section__title--sub">Une agence de voyage Humanitaire!</span>';
                        }
                      ?>
                
                
              </div>
              <div class="row gy-5">
                <div class="col-xl-6" data-aos="fade-up" data-aos-offset="250" data-aos-duration="500">
                  <!-- Text card -->
                  <div class="rlr-text-card rlr-text-card--numbered">
                  <?php 
                        if ($lang==="en") {
                          echo '<h5 class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand">Accommodation</h5>';
                          echo ' <p class="rlr-text-card__desc">For your stay in Senegal, you have the choice between various types of accommodation, ranging from two to four star hotels, tourist camps, furnished houses, and even homestays. Each offers different advantages, some offering absolute tranquility, while others allow immersion in local life and the discovery of the many facets of Senegal.</p>';
                        }elseif($lang==="fr") {
                          echo '<h5 class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand">Hebergement</h5>';
                          echo ' <p class="rlr-text-card__desc">Pour votre séjour au Sénégal, vous avez le choix entre divers types d\'hébergement, allant des hôtels de deux à quatre étoiles, aux campements touristiques, aux maisons meublées, et même aux séjours chez l\'habitant. Chacun offre des avantages différents, certains proposant une tranquillité absolue, tandis que d\'autres permettent une immersion dans la vie locale et la découverte des multiples facettes du Sénégal..</p>';
                        }
                      ?>
                   
                  </div>
                </div>
                <div class="col-xl-6" data-aos="fade-up" data-aos-offset="275" data-aos-duration="600">
                  <!-- Text card -->
                  <div class="rlr-text-card rlr-text-card--numbered">
                  <?php 
                        if ($lang==="en") {
                          echo '<h5 class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand">Tourisme Humanitaire</h5>';
                          echo ' <p class="rlr-text-card__desc">We aim to promote sustainable development through humanitarian tourism, which creates jobs and finances necessary infrastructure for host communities, such as schools, wells, medicine donations, collective fields, sugar mills. millet and livestock. Tourism is a means to achieve sustainable development in these communities.</p>';
                        }elseif($lang==="fr") {
                          echo '<h5 class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand">Humanitarian Tourism</h5>';
                          echo '<p class="rlr-text-card__desc">Nous visons à promouvoir le développement durable à travers le tourisme humanitaire, qui crée des emplois et finance des infrastructures nécessaires pour les communautés d\'accueil, telles que des écoles, des puits, des dons de médicaments, des champs collectifs, des moulins à mil et des élevages. Le tourisme est un moyen pour atteindre le développement durable dans ces communautés.</p>';
                        }
                      ?>
                  
                  </div>
                </div>
                <div class="col-xl-6" data-aos="fade-up" data-aos-offset="300" data-aos-duration="700">
                  <!-- Text card -->
                  <div class="rlr-text-card rlr-text-card--numbered">
                  <?php 
                        if ($lang==="en") {
                          echo '<h5 class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand">Field experience</h5>';
                          echo ' <p class="rlr-text-card__desc">We aim to promote sustainable development through humanitarian tourism, which creates jobs and finances necessary infrastructure for host communities, such as schools, wells, medicine donations, collective fields, sugar mills. millet and livestock. Tourism is a means to achieve sustainable development in these communities.</p>';
                        }elseif($lang==="fr") {
                          echo '<h5 class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand">Expérience du terrain</h5>';
                          echo '<p class="rlr-text-card__desc">Une large connaissance des différentes régions et sites touristiques du sénègal nous ont permis de crée des itinéraires uniques en son genres permettant aux visiteurs de découvrir le Sénégal des profondeurs en symbiose avec la nature et les habitants du térroir.</p>';
                        }
                      ?>
                    
                    
                  </div>
                </div>
                <div class="col-xl-6" class="col-xl-6" data-aos="fade-up" data-aos-offset="325" data-aos-duration="800">
                  <!-- Text card -->
                  <div class="rlr-text-card rlr-text-card--numbered">
                  <?php 
                        if ($lang==="en") {
                          echo '<h5 class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand">ITINERARIES</h5>';
                          echo ' <p class="rlr-text-card__desc">Thanks to our vast knowledge of the different regions and tourist sites of Senegal, we have created unique itineraries that allow visitors to discover Senegal from another perspective, in symbiosis with nature and local inhabitants.</p>';
                        }elseif($lang==="fr") {
                          echo '<h5 class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand">ITINERAIRES</h5>';
                          echo '<p class="rlr-text-card__desc">Grâce à notre vaste connaissance des différentes régions et sites touristiques du Sénégal, nous avons créé des itinéraires uniques qui permettent aux visiteurs de découvrir le Sénégal sous un autre angle, en symbiose avec la nature et les habitants locaux.</p>';
                        }
                      ?>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Team
      <section class="rlr-section">
        <div class="container">
          <div class="row">
             Section heading
            <div class="rlr-section__title rlr-section__title--centered">
              <h2 class="rlr-section__title--main">Our Team</h2>
              <span class="rlr-section__title--sub">Sost Brilliant reasons Emprise should be your one-stop-shop!</span>
            </div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-offset="250" data-aos-duration="500">
              - Team card
              <div class="rlr-team-card rlr-team-card--v2">
                 Team thumb 
                <div class="rlr-team-card__thumb">
                  <img src="./assets/images/team/team-03.jpg" alt="Member Photo" />
                </div>
                Team summary 
                <div class="rlr-team-card__summary">
                  <h3 class="rlr-team-card__title">
                    <a href="#">Devon Lane</a>
                  </h3>
                  <h3 class="rlr-team-card__subtitle">Founder</h3>
                   Team details 
                  <p class="rlr-team-card__desc">ed non iaculis sem</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-offset="300" data-aos-duration="600">
               Team card 
              <div class="rlr-team-card rlr-team-card--v2">
                 Team thumb 
                <div class="rlr-team-card__thumb">
                  <img src="./assets/images/team/team-05.jpg" alt="Member Photo" />
                </div>
                Team summary 
                <div class="rlr-team-card__summary">
                  <h3 class="rlr-team-card__title">
                    <a href="#">Cleona Mathur</a>
                  </h3>
                  <h3 class="rlr-team-card__subtitle">Co-Founder</h3>
                  Team details 
                  <p class="rlr-team-card__desc">ed non iaculis sem</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-offset="350" data-aos-duration="700">
               Team card 
              <div class="rlr-team-card rlr-team-card--v2">
                 Team thumb 
                <div class="rlr-team-card__thumb">
                  <img src="./assets/images/team/team-06.jpg" alt="Member Photo" />
                </div>
                 Team summary 
                <div class="rlr-team-card__summary">
                  <h3 class="rlr-team-card__title">
                    <a href="#">Darren Spratt</a>
                  </h3>
                  <h3 class="rlr-team-card__subtitle">Tour Manager</h3>
                   Team details 
                  <p class="rlr-team-card__desc">ed non iaculis sem</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-offset="400" data-aos-duration="800">
               Team card 
              <div class="rlr-team-card rlr-team-card--v2">
                 Team thumb 
                <div class="rlr-team-card__thumb">
                  <img src="./assets/images/team/team-04.jpg" alt="Member Photo" />
                </div>
                 Team summary
                <div class="rlr-team-card__summary">
                  <h3 class="rlr-team-card__title">
                    <a href="#">Lejla Fizovic</a>
                  </h3>
                  <h3 class="rlr-team-card__subtitle">Administrator</h3>
                   Team details 
                  <p class="rlr-team-card__desc">ed non iaculis sem</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    </main>
    <!-- Footer -->
    <?= require_once 'include/footer.php'?>
    <!-- Scripts -->
    <script src="./vendors/navx/js/navigation.min.js" defer></script>
    <script src="./js/main.js" defer></script>
  </body>
</html>
