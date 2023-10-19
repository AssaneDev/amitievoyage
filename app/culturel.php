<?php 
  require __DIR__.'/database/conexion.php';
  $_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $lang = $_GET['lang'] ?? 'fr';
if ($lang === 'fr'){
  $programmeDB = require_once __DIR__.('/database/models/programmeDB.php');
  $Circuit = 'Culturel';
 
}elseif($lang === 'en'){
  $programmeDB = require_once __DIR__.('/database/models/programmeEnglish.php');
  $Circuit = 'Culturel';
 
};
 
  $programmeCircuit = $programmeDB->selectOne($Circuit);

//   echo"<pre>";
//      var_dump($programmeExcursions);
//   echo"</pre>";

?>
<!DOCTYPE html>
<html lang='<?=isset($lang) ? $lang : 'fr'?>'>
  <head>
      <?= require_once 'include/head.php'?>
      <link rel="stylesheet" href="/styleform/css/index.css">
  </head>

  <body class="rlr-body">
    <!-- Header -->
    <header>
        <?= require_once 'include/header.php'?>
    </header>
    <!-- Main Content -->
    <main id="rlr-main" class="rlr-main--fixed-top">
      <div class="container">
      <?php 
                        if ($lang==="en") {
                          echo '<div style="position: relative; width: 100%; height: 0; padding-top: 50.0000%;
                          padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                          border-radius: 8px; will-change: transform;">
                           <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                             src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxpiTbYgI&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                           </iframe>
                         </div>
                        ';
                     
                        }elseif($lang==="fr") {
                          echo '<div style="position: relative; width: 100%; height: 0; padding-top: 50.0000%;
                          padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                          border-radius: 8px; will-change: transform;">
                           <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                             src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFwaikSk_c&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                           </iframe>
                         </div>';
                          
                        }
                ?>

      



      

        <div class="row rlr-search-results-page__product-details justify-content-center">
          <section class="rlr-search-results-page__product-list">
            <!-- <div class="row rlr-listings__header">
             
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb rlr-breadcrumb__items">
                  <li class="breadcrumb-item rlr-breadcrumb__item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item rlr-breadcrumb__item"><a href="/">Destination</a></li>
                  <li class="breadcrumb-item rlr-breadcrumb__item active" aria-current="page">Tour</li>
                </ol>
              </nav>
              <h1 class="rlr-section__heading--main">Blog List - No Sidebar</h1>
            </div> -->
            <div class="row rlr-search-results-page__card-wrapper">
                
            <?php foreach ($programmeCircuit as $circuits ) :?>  
              <div class="col-md-6 col-lg-4">
                <article class="rlr-postcard">
                  <!-- <img class="rlr-postcard__thumbnail" src="./assets/images/blog/blog-listing01.jpg" alt="blog image" /> -->
                  <div class="image-container  clazyload "  style="background-image: url(<?=$circuits['images']?>);"></div>
                  <div class="rlr-postcard__summary">
                    <!-- <span class="rlr-postcard__author">Sanjeev Jha | 19 Jan 2022</span> -->
                    <a href="<?=$circuits['canva']?>" class="rlr-product-card__anchor-title">
                      <h2 class="rlr-product-card__title" style="color: orangered;"><?=$circuits['intituler']?></h2>
                    </a>
                    <p><?=$circuits['description']?></p>
                    <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">A Partir de </span>
                        <span class="rlr-product-card__price p-10" > <mark itemprop="price" style="color: orangered;"><?=$circuits['prix']?></mark><mark itemprop="priceCurrency" style="color: orangered;"> €</mark> </span>
                    </div>

                    <div class="rlr-product-card__footer " style="margin-top: 10px;">
                        
                      <!-- <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__anchor rlr-product-card__icon-text"> <i class="rlr-icon-font flaticon-comment-left"> </i> <span class="rlr-postcard__replies">5 Replies </span> </a> -->
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class=""><?=$circuits['nombredejour']?> Jours</span></div>
                      <div class="rlr-product-card__icon-text-list">
                        <a href="<?=$circuits['canva']?>" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__anchor rlr-product-card__icon-text"> <i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-postcard__tag"><?=$circuits['category']?> </span> </a>
                        <!-- <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__anchor rlr-product-card__icon-text"> <i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-postcard__tag">Mountain </span> </a>
                        <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__anchor rlr-product-card__icon-text"> <i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-postcard__tag">Road Trip </span> </a> -->
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <?php endforeach; ?>
             
              
            </div>
            <!-- <hr class="rlr-search-results-page__divider" />
            <nav class="rlr-pagination" aria-label="Product list navigation">
              <ul class="pagination rlr-pagination__list">
                <li class="page-item rlr-pagination__page-item disabled">
                  <a class="page-link rlr-pagination__page-link rlr-pagination__page-link--prev" href="#" aria-label="Previous">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.833 10H4.167m0 0L10 15.833M4.167 10 10 4.167" stroke="var(--body-color)" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span aria-hidden="true">Previous</span>
                  </a>
                </li>
                <li class="page-item rlr-pagination__page-item">
                  <ul class="pagination rlr-pagination__child-list">
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">1</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">2</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">3</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">...</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">8</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">9</a></li>
                    <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="#">10</a></li>
                  </ul>
                </li>
                <li class="page-item rlr-pagination__page-item">
                  <a class="page-link rlr-pagination__page-link rlr-pagination__page-link--next" href="#" aria-label="Next">
                    <span aria-hidden="true">Next</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.167 10h11.666m0 0L10 4.167M15.833 10 10 15.833" stroke="var(--body-color)" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </li>
              </ul>
            </nav> -->
          </section>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer class="rlr-footer rlr-section rlr-section__mt">
         <?= include_once 'include/footer.php'?>
    </footer>
    <!-- Scripts -->
    <script src="./vendors/navx/js/navigation.min.js" defer></script>
    <script src="./js/main.js" defer></script>
  </body>
</html>
