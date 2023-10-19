<?php 
  require __DIR__.'/database/conexion.php';
  $_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $lang = $_GET['lang'] ?? 'fr';
if ($lang === 'fr'){
  $programmeDB = require_once __DIR__.('/database/models/programmeDB.php');
  $Excursion = 'Excursion';
 
}elseif($lang === 'en'){
  $programmeDB = require_once __DIR__.('/database/models/programmeEnglish.php');
  $Excursion = 'Excursion';
 
};
$programmeExcursions = $programmeDB->selectOne($Excursion);
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
      <div class="rlr-search-results-page container">
        
       
        <aside class="row rlr-search-results-page__dynamic-filter-section">
          <!-- Swiper -->
          <div class="swiper rlr-dynamic-filter-swiper rlr-js-dynamic-filter-swiper">
            <ul class="swiper-wrapper">
                    
        
              <li class="rlr-search-results-page__dynamic-filter-item swiper-slide">
                <a class="rlr-icon-text btn rlr-icon-text__card rlr-icon-text--anchor">  <span class="rlr-icon-text__card-title">Exursion en famille ou en petit groupe</span> </a>
              </li>
            
             
              
            </ul>
            <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev">
              <i class="rlr-icon-font flaticon-left-chevron"> </i>
            </button>
            <button type="button" class="btn rlr-button splide__arrow splide__arrow--next">
              <i class="rlr-icon-font flaticon-chevron"> </i>
            </button>
          </div>
        </aside>
        <div class="row rlr-search-results-page__product-details">
          <div class="rlr-search-results-page__product-list col-xl-12">
            <div class="row rlr-search-results-page__card-wrapper">

             <?php foreach ($programmeExcursions as $Excursion ) :?>
              <div class="col-md-6 col-xl-4 col-xxl-3">
                <!-- Product card item -->
                <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                  <!-- Product card image -->
                  <figure class="rlr-product-card__image-wrapper">
                    <!-- <span class="rlr-badge rlr-badge-- rlr-badge-- rlr-badge--abs rlr-badge--abs-left"> -30% </span>
                    <img itemprop="image" data-sizes="auto" data-src="./assets/images/item-listing/01.jpg" data-srcset="./assets/images/item-listing/01.jpg 1x, ../../assets/images/item-listing/01.jpg 2x" class="lazyload" alt="product-image" /> -->
                    <div class="image-container  clazyload "  style="background-image: url(<?=$Excursion['images']?>);"></div>
                  </figure>
                  <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                    <!-- Product card header -->
                    <header class="rlr-product-card__header">
                      <div>
                        <a href="<?=$Excursion['canva']?>" target="_blank" class="rlr-product-card__anchor-title">
                          <h2 class="rlr-product-card__title" itemprop="name"><?=$Excursion['intituler']?></h2>
                        </a>
                        <div>
                          <a href="<?=$Excursion['canva']?>" target="_blank" class="rlr-product-card__anchor-cat">
                            <span class="rlr-product-card__sub-title"><?=$Excursion['category']?></span>
                          </a>
                          <!-- <span class="rlr-product-card__sub-title">|</span> -->
                          <!-- <a href="./product-detail-page.html" class="rlr-product-card__anchor-sub-cat">
                            <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                          </a> -->
                        </div>
                      </div>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                    </header>
                    <!-- Product card body -->
                    <div class="rlr-product-card__details">
                      <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <span class="rlr-product-card__from">A Partir </span>
                        <span class="rlr-product-card__price"> <mark itemprop="price"><?=$Excursion['prix']?></mark><mark itemprop="priceCurrency"> €</mark> </span>
                      </div>
                      <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                          <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                        </div>
                        <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (108)</span>
                      </div>
                    </div>
                    <!-- Product card footer -->
                    <div class="rlr-product-card__footer">
                      <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class=""><?=$Excursion['nombredejour']?></span></div>
                      <ul class="rlr-product-card__icon-text-list">
                        <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Excursion Privative</span></li>
                        <!-- <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li> -->
                      </ul>
                    </div>
                  </div>
                  <!-- Product card link -->
                  <a href="<?=$Excursion['canva']?>" target="_blank" class="rlr-product-card__anchor"></a>
                </article>
              </div>
             <?php endforeach; ?>
            
            
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <?= include_once 'include/footer.php'?>
    <!-- Scripts -->
    <script src="./vendors/navx/js/navigation.min.js" defer></script>
    <script src="./js/main.js" defer></script>
  </body>
</html>
