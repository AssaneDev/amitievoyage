<?php 

require_once __DIR__.'/database/conexion.php';
$_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lang = $_GET['lang'] ?? 'fr';
if ($lang === 'fr'){
  $programmeDB = require_once __DIR__.('/database/models/programmeDB.php');
}elseif($lang === 'en'){
  $programmeDB = require_once __DIR__.('/database/models/programmeEnglish.php');
};


$listProgramme = $programmeDB->fetchAll();
$Excursion = 'Excursion';
$circuit = 'Circuit';
$minicircuit = 'Mini-circuit';
$culture = 'Culturel';
  

$programmeExcursions = $programmeDB->selectOne($Excursion);
$programmeMiniCircuit = $programmeDB->selectOne($minicircuit);
$programmecircuits = $programmeDB->selectOne($circuit);
$programmeculturel= $programmeDB->selectOne($culture);







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
      <!-- Hero Banner -->
      <aside class="rlr-hero--half-mast">
        <div class="container">
          <div id="rlr_banner_slider" class="splide rlr-banner-splide rlr-banner-splide--v3">
            <div class="splide__track rlr-banner-splide__track">
              <ul class="splide__list">
                <!-- Banner slide 1 -->
                <li class="splide__slide rlr-banner-splide__slide">
                  <div class="rlr-banner-splide__image-wrapper">
                    <img class="rlr-banner-splide__banner-img lazyload" data-sizes="auto" data-src="./assets/images/banner/banner-03.jpg" src="./assets/images/banner/banner-03.jpg" alt="#" />
                  </div>
                  <article class="rlr-banner-splide__content-wrapper">
                    <header class="rlr-banner-splide__header">
                     <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-banner-splide__slogan"> Discover Senegal </h2>';
                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-banner-splide__slogan"> Découvrez Le Sénégal </h2>';
                        }
                      ?>
                      
                      <span class="rlr-banner-splide__sub-title">Amitie Voyage</span>
                    </header>
                    <div class="rlr-banner-splide__content-desc">
                      <div class="rlr-banner-splide__temperature">
                        <div class="rlr-banner-splide__arrows">
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--prev rlr-banner-js-arrow-prev" aria-label="prev button">
                            <span> <i class="rlr-icon-font flaticon-left"> </i> </span>
                          </button>
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--next rlr-banner-js-arrow-next" aria-label="next button">
                            <span> <i class="rlr-icon-font flaticon-right"> </i> </span>
                          </button>
                        </div>
                      </div>
                      <div class="rlr-banner-splide__payment-option">
                        <span> <i class="rlr-icon-font flaticon-credit-cards-payment"> </i> </span>
                        <div class="rlr-banner-splide__content-desc-right">
                          
                          <?php 
                        if ($lang==="en") {
                          echo '<a href="./contact.php" class="btn rlr-button rlr-banner-splide__book-now"> Booking! </a>';
                        }elseif($lang==="fr") {
                          echo '<a href="./contact.php" class="btn rlr-button rlr-banner-splide__book-now"> Réservez! </a>';
                        }
                      ?>
                        </div>
                      </div>
                    </div>
                  </article>
                </li>
                <!-- Banner slide 2 -->
                <li class="splide__slide rlr-banner-splide__slide">
                  <div class="rlr-banner-splide__image-wrapper">
                    <img class="rlr-banner-splide__banner-img lazyload" data-sizes="auto" data-src="./assets/images/banner/Banner-1.jpg" src="./assets/images/banner/banner-03-2.jpg" alt="#" />
                  </div>
                  <article class="rlr-banner-splide__content-wrapper">
                    <header class="rlr-banner-splide__header">
                    <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-banner-splide__slogan">Ecology - Discovery - Culture </h2>';
                          echo '<span class="rlr-banner-splide__sub-title">Total Immersion </span>';
                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-banner-splide__slogan">Ecologie - Découverte - Culture </h2>';
                          echo '<span class="rlr-banner-splide__sub-title">Immersion Total </span>';
                        }
                      ?>
                      
                    </header>
                    <div class="rlr-banner-splide__content-desc">
                      <div class="rlr-banner-splide__temperature">
                       
                        <div class="rlr-banner-splide__arrows">
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--prev rlr-banner-js-arrow-prev" aria-label="prev button">
                            <span> <i class="rlr-icon-font flaticon-left"> </i> </span>
                          </button>
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--next rlr-banner-js-arrow-next" aria-label="next button">
                            <span> <i class="rlr-icon-font flaticon-right"> </i> </span>
                          </button>
                        </div>
                      </div>
                      <div class="rlr-banner-splide__payment-option">
                        <span> <i class="rlr-icon-font flaticon-credit-cards-payment"> </i> </span>
                        <div class="rlr-banner-splide__content-desc-right">
                        <?php 
                        if ($lang==="en") {
                          echo '<a href="./contact.php" class="btn rlr-button rlr-banner-splide__book-now"> Booking! </a>';
                        }elseif($lang==="fr") {
                          echo '<a href="./contact.php" class="btn rlr-button rlr-banner-splide__book-now"> Réservez! </a>';
                        }
                      ?>
                        </div>
                      </div>
                    </div>
                  </article>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </aside>
     
      <!-- Product Carousel -->
      <section class="rlr-section rlr-section__mb">
        <div class="container">
          <!-- Swiper -->
          <div class="rlr-carousel__items">
            <div class="swiper rlr-js-product-card-swiper">
              <!-- Carousel header -->
              <div class="rlr-section-header">
                <!-- Section heading -->
                <div class="rlr-section__title">
                <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-section__title--main">Private Program</h2>';
                          echo '<span class="rlr-section__title--sub">Visit Senegal according to your plan! Ideal program for your corporate vacation</span>';
                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-section__title--main">Programme Privative</h2>';
                          echo ' <span class="rlr-section__title--sub">Visiter le sénégal selon votre planing! Programme Idéals pour vos vancances d\'entreprise</span>';
                        }
                      ?>
                </div>
                <div class="button-row">
                  <button type="button" class="btn rlr-button button button--previous rlr-button--carousel" aria-label="Previous">
                    <i class="rlr-icon-font flaticon-left-chevron"> </i>
                  </button>
                  <div class="button-group button-group--cells">
                    <button class="button is-selected">1</button>
                    <button class="button">2</button>
                  </div>
                  <button type="button" class="btn rlr-button button button--next rlr-button--carousel" aria-label="Next">
                    <i class="rlr-icon-font flaticon-chevron"> </i>
                  </button>
                </div>
              </div>
              

                <div class="swiper-wrapper">
                <?php foreach($listProgramme as $programme): ?>
                  <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--accent-red rlr-product-card__badge"> <?= $programme['types']?> </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="<?= $programme['canva']?>">
                        <div class="swiper rlr-js-product-multi-image-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <!-- <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/01.jpg" data-srcset="./assets/images/product-images/small/01.jpg" class="lazyload" alt="product-image" /> -->
                              <div class="image-container" style="background-image: url(<?= $programme['images']?>);"></div>
                            </div>
                          
                        </div>
                      </a>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a href="<?= $programme['canva']?>" class="rlr-product-card__anchor-title">
                            <h2 class="rlr-product-card__title" itemprop="name"><?= $programme['intituler']?></h2>
                          </a>
                          <div>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-cat">
                              <span class="rlr-product-card__sub-title"><?= $programme['category']?></span>
                            </a>
                            <!-- <span class="rlr-product-card__sub-title">|</span>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-sub-cat">
                              <span class="rlr-product-card__sub-title">Dubronik</span>
                            </a> -->
                          </div>
                        </div>
                      </header>
                      <!-- Product card body -->
                      <div class="rlr-product-card__details">
                        <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                          <span class="rlr-product-card__from">Prix </span>
                          <span class="rlr-product-card__price"> <mark itemprop="price"><?= $programme['prix']?></mark> <mark itemprop="priceCurrency"> €</mark> </span>
                        </div>
                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                          <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                            <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                          </div>
                          <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (577)</span>
                        </div>
                      </div>
                      <!-- Product card footer -->
                      <div class="rlr-product-card__footer">
                        <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class=""><?= $programme['nombredejour']?> </span></div>
                        <!-- <ul class="rlr-product-card__icon-text-list">
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                        </ul> -->
                      </div>
                    </div>
                  </article>
                </div>
                <?php endforeach; ?> 
                
                </div>
                
               
                
               
              </div>
              
              
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Category Carousel -->
      <section class="rlr-section rlr-section__mb">
        <div class="container">
          <!-- Swiper -->
          <div class="rlr-carousel__items">
            <div class="swiper rlr-js-category-card-swiper">
              <!-- Carousel header -->
              <div class="rlr-section-header">
                <!-- Section heading -->
                <div class="rlr-section__title">
                  
                <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-section__title--main">Several Program Categories</h2>';
                          echo '<span class="rlr-section__title--sub">Amitie Voyage offers you different programs according to your tastes!</span>';
                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-section__title--main">Plusieurs Categories de Programmes</h2>';
                          echo ' <span class="rlr-section__title--sub">Amitie Voyage vous propose differents programmes selon vos gout!</span>';
                        }
                ?>
                </div>
                <div class="button-row">
                  <button type="button" class="btn rlr-button button button--previous rlr-button--carousel" aria-label="Previous">
                    <i class="rlr-icon-font flaticon-left-chevron"> </i>
                  </button>
                  <div class="button-group button-group--cells">
                    <button class="button is-selected">1</button>
                    <button class="button">2</button>
                  </div>
                  <button type="button" class="btn rlr-button button button--next rlr-button--carousel" aria-label="Next">
                    <i class="rlr-icon-font flaticon-chevron"> </i>
                  </button>
                </div>
              </div>

              <?php 
                        if ($lang==="en") {
                          echo '<div style="position: relative; width: 100%; height: 0; padding-top: 50.0000%;
                          padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                          border-radius: 8px; will-change: transform;">
                           <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                             src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxmQoH_iY&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                           </iframe>
                         </div>';
                     
                        }elseif($lang==="fr") {
                          echo '<div style="position: relative; width: 100%; height: 0; padding-top: 50.0000%;
                          padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                         border-radius: 8px; will-change: transform;">
                           <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                  src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFwaD8UvJs&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                             </iframe>
                   </div>';
                          
                        }
                ?>

              
           
            </div>
          </div>
        </div>
      </section>
    
      <!-- Best Sellers -->
       <!-- Best Sellers -->
       <section class="rlr-section rlr-section__mb rlr-section__cards">
        <div class="container">
          <!-- Section heading -->
          <div class="rlr-section-header">
            <!-- Section heading -->
            <div class="rlr-section__title">
            <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-section__title--main">Tour in Senegal</h2>';
                          echo '<span class="rlr-section__title--sub">Visit Senegal in its entirety with our tailor-made tours!!</span>';
                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-section__title--main">Circuit au Sénégal</h2>';
                          echo ' <span class="rlr-section__title--sub">Visiter le Sénégal en entier avec Nos Circuits sur mesures!!</span>';
                        }
                ?>

            </div>
            <div class="button-row">
              <a href="./circuit.php" class="btn rlr-button rlr-button--large rlr-button--rounded rlr-button--brand"> Voir Circuits </a>
            </div>
          </div>
          <div class="row rlr-featured__cards">
          <?php $i = 0 ?>
            <?php foreach ($programmecircuits as $cir):?>
              <?php $i++ ?>
              <?php if ($i < 4):?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
              <!-- Featured prodcut card -->
              <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
                <!-- Image -->
                <figure class="rlr-product-card__image-wrapper">
                  <!-- <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-01.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-01.jpg" data-sizes="auto" class="lazyload" alt="" /> -->
                  <div class="image-container  clazyload "  style="background-image: url(<?=$cir['images']?>);"></div>
                </figure>
                <!-- Card body -->
                <div class="rlr-product-card--featured__inner">
                  <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                  <div class="rlr-product-card--featured__body card-img-overlay">
                    <div class="rlr-product-card--featured__duration">
                      <p class="body rlr-button--brand rlr-button--rounded" style="color: black;"><?=$cir['nombredejour']?> Jours</p>
                      <h4 class="type-h4 rlr-button--brand rlr-button--rounded" style="color: black;"><?=$cir['prix']?> €</h4>
                    </div>
                    <div class="rlr-product-detail-header__actions">
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="<?=$cir['canva']?>"  class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explorez </a>
                    </div>
                  </div>
                </div>
                <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
              </article>
              <!-- Summary -->
              <div class="rlr-product-card--featured__summary">
                <h4 class="type-h6-semi-bold"><?=$cir['intituler']?></h4>
                <p class="type-body"><?=$cir['description']?></p>
              </div>
            </div>
            <?php endif; ?>
            <?php endforeach;?>
          </div>
        </div>

        <?php 
                        if ($lang==="en") {
                          echo '<div style="position: relative; width: 100%; height: 0; padding-top: 50.0000%;
                          padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                          border-radius: 8px; will-change: transform;">
                           <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                             src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxnEi_b5g&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                           </iframe>
                         </div>';
                     
                        }elseif($lang==="fr") {
                          echo '<div style="position: relative; width: 100%; height: 0; padding-top: 50.0000%;
                          padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                          border-radius: 8px; will-change: transform;">
                           <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                             src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFwavqaI_Q&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                           </iframe>
                         </div>
                        
                        ';
                          
                        }
                ?>


        
      </section>
           <!-- Loisir -->
           

            <?php 
                        if ($lang==="en") {
                          echo '<div style="position: relative; width: 100%; height: 0; padding-top: 70.7071%;
                          padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                          border-radius: 8px; will-change: transform;">
                           <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                             src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxnMWyGqA&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                           </iframe>
                         </div>
                        
                       ';
                     
                        }elseif($lang==="fr") {
                          echo '<div style="position: relative; width: 100%; height: 0; padding-top: 70.7071%;
                          padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                          border-radius: 8px; will-change: transform;">
                            <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                              src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFwaY0ZmGE&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                            </iframe>
                      </div>

                        
                        ';
                          
                        }
                ?>
  
       <!-- Loisir -->
    


      <!-- Logo Carousel -->
      <!-- <section id="features" class="rlr-section rlr-section__mb landding__plugin">
        <div class="container">
          <div class="rlr-logos-slider">
            <div class="rlr-logos-slider__items">
              <div class="slide-track">
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/trivago.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/tripadvisor.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/expedia.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/tailormade.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/all-inclusive.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/radisson.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/disneyland.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/national-geographic.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/lonelyplanet.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/tailormade.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/trivago.png" width="187px" height="64px" alt="partner logo" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    <?= include_once 'include/footer.php'?>
    <!-- Scripts -->
    <script src="./vendors/navx/js/navigation.min.js" defer></script>
    <script src="./js/main.js" defer></script>
    <script src="./js/traduction.js" defer></script>
  </body>
</html>
