  <!-- Sales and Support -->
  <section class="rlr-section">
        <div class="container">
          <!-- Section heading -->
          <div class="rlr-section__title rlr-section__title--centered">
          <?php 
          $lang === "fr";
                        if ($lang==="en") {
                          echo '<h2 class="rlr-section__title--main">You have a question?</h2>';
                          echo '<span class="rlr-section__title--sub">Our service is available 24/7!</span>';
                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-section__title--main">Vous avez une question?</h2>';
                          echo ' <span class="rlr-section__title--sub">Notre service est disponible 24h/24 7jours/7 !</span>';
                        }
          ?>

          </div>
          <div class="row">
            <div class="offset-lg-1 col-lg-5" data-aos="fade-down-right" data-aos-duration="700" data-aos-once="true">
              <div class="rlr-support-card rlr-support-card--sale">
                <div class="rlr-support-card__content">
                  <div class="rlr-support-card__img-wrapper">
                    <img src="./assets/svg/headset.svg" alt="headset" />
                  </div>
                  <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-support-card__title">For Booking </h2>';
                          echo '<p class="rlr-support-card__subtitle rlr-support-card__text">Send us an Email or Call us!</p>';
                          echo '<p class="rlr-support-card__text">reservez@amitievoyage.fr</p>';
                          echo '<p class="rlr-support-card__text">33 958 96 63 </p>';

                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-support-card__title">Pour Reservez </h2>';
                          echo '<p class="rlr-support-card__subtitle rlr-support-card__text">Envoyez nous un Email ouAppelez nous!</p>';
                          echo '<p class="rlr-support-card__text">reservez@amitievoyage.sn</p>';
                          echo '<p class="rlr-support-card__text">33 958 96 63</p>';
                        }
                    ?>
              
                </div>
              </div>
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
              <div class="rlr-support-card rlr-support-card--help">
                <div class="rlr-support-card__content">
                  <div class="rlr-support-card__img-wrapper">
                    <img src="./assets/svg/help-circle.svg" alt="headset" />
                  </div>
                  <?php 
                        if ($lang==="en") {
                          echo '<h2 class="rlr-support-card__title">Help &amp; Support </h2>';
                          echo '<p class="rlr-support-card__subtitle rlr-support-card__text">You have any questions contact us here!</p>';
                          echo '<p class="rlr-support-card__text">reservez@amitievoyage.fr</p>';
                          echo '<p class="rlr-support-card__text">33 958 96 63</p>';

                        }elseif($lang==="fr") {
                          echo '<h2 class="rlr-support-card__title">Aide &amp; Support </h2>';
                          echo '<p class="rlr-support-card__subtitle rlr-support-card__text">Vous avez des question contactez nous ici !</p>';
                          echo '<p class="rlr-support-card__text">support@amitievoyage.fr</p>';
                          echo '<p class="rlr-support-card__text">33 958 96 63</p>';
                        }
                    ?>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer -->
    <footer class="rlr-footer rlr-section rlr-section__mt">
      <div class="container">
        <div class="rlr-footer__getintouch">
          <div class="rlr-footer__getintouch_col rlr-footer__getintouch__col--title">
          <?php 
                        if ($lang==="en") {
                          echo '<h4>You like to travel</h4>';
                          echo '<p>The adventures of Senegal are calling you!</p>';
                

                        }elseif($lang==="fr") {
                          echo '<h4>Vous Aimez Voyager</h4>';
                          echo '<p>Les aventures du sénégal vous appel!</p>';
                        }
            ?>
         
          </div>
          <div class="rlr-footer__getintouch_col rlr-footer__getintouch__col--address">
          <?php 
                        if ($lang==="en") {
                          echo '<h4>Our offices</h4>';
                          echo '<a href="#">Saly, Dakar</a>';
                

                        }elseif($lang==="fr") {
                          echo '<h4>Nos Locaux</h4>';
                          echo '<a href="#">Saly, Dakar</a>';
                        }
            ?>
            
          </div>
        </div>
        <!-- Footer menu -->
       
        <!-- Footer bottom -->
        <div class="rlr-footer__legal">
          <div class="rlr-footer__legal__row rlr-footer__legal__row--top">
            <div class="rlr-footer__legal__row__col">
            <?php 
                        if ($lang==="en") {
                          echo ' <a href="#">Our Travel Rules</a>';
                

                        }elseif($lang==="fr") {
                          echo ' <a href="#">Nos Régles de Voyages</a>';
                        }
            ?>
              <a href="#">Nos Régles de Voyages</a>
            </div>
            <!-- Footer social links -->
            <div class="rlr-footer__legal__row__col">
              <a href="https://www.linkedin.com/in/amitie-voyage-37065529a/">Linkedin</a>
              <span class="separate">/</span>
              <a href="https://www.facebook.com/amitievoyagesenegal/">Facebook</a>
              <span class="separate">/</span>
              <a href="https://www.instagram.com/amitievoyagesenegal/">Instagram</a>
            </div>
          </div>
          <!-- Footer copyright -->
          <div class="rlr-footer__legal__row rlr-footer__legal__row--bottom">
            <div class="rlr-footer__legal__row__col">
              <span>2023 © Amitié Voyage Sénégal</span>
            </div>
            <!-- Footer payment thumbs -->
            <div class="rlr-footer__legal__row__col">
              <img src="./assets/images/ele-payments.png" alt="Payments" />
            </div>
          </div>
        </div>
      </div>
    </footer>