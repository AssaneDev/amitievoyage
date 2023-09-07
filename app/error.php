<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Your vacation, tours and travel theme needs are all met at emprise." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour Travel Website Template | Emprise</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="./assets/favicon.ico" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="./styles/plugins.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="./styles/main.css" />
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
              <p class="type-lead-semibold">404 Error</p>
              <h1 class="type-h1">Page not found</h1>
              <span class="rlr-section__heading--sub">Sorry but the page you are looking for has been removed or had its name changed. Please try your search again!</span>
              <!-- Search field -->
              <form class="rlr-error__search">
                <label class="rlr-form-label rlr-form-label--light"> Search emprise site </label>
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
    <?= include_once 'include/footer.php'?>
    <!-- Scripts -->
    <script src="./vendors/navx/js/navigation.min.js" defer></script>
    <script src="./js/main.js" defer></script>
  </body>
</html>
