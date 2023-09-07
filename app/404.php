<!DOCTYPE html>
<html lang="en">
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
      <section class="rlr-section rlr-error">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 rlr-error__content">
              <!-- Heading text -->
              <p class="type-lead-semibold">Site En Construction</p>
              <h1 class="type-h1">AMITIE VOYAGE SENEGAL</h1>
              <span class="rlr-section__heading--sub">Devenez dans 1h de temps le site sera operartionnel!</span>
              <!-- Search field -->
              <form class="rlr-error__search">
                <label class="rlr-form-label rlr-form-label--light"> Laissiez nous un message </label>
                <div class="rlr-input-group rlr-input-group__search">
                  <input type="search" autocomplete="off" class="form-control form-input" />
                </div>
              </form>
            </div>
            <div class="offset-lg-6"></div>
          </div>
        </div>
      </section>
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
