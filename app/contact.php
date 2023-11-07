<?php
   $_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $lang = $_GET['lang'] ?? 'fr';
?>
<!doctype html>
<html lang='<?=isset($lang) ? $lang : 'fr'?>'>
  <head>
  	<title>Contact</title>
	  <?= require_once 'include/head.php'?>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="styleform/css/style.css">

	</head>
	<body class="rlr-body">
		  <!-- Header -->
	<header >
	<nav id="navigation" class="navigation rlr-navigation default-nav fixed-top">
        <!-- Logo -->
        <div class="navigation-header">
          <div class="navigation-brand-text">
            <div class="rlr-logo rlr-logo__navbar-brand rlr-logo--default">
              <a href="/">
                <img src="./assets/svg/logoa.svg" alt="#" class="" />
              </a>
            </div>
          </div>
          <div class="navigation-button-toggler">
            <span class="rlr-sVGIcon"> <i class="rlr-icon-font rlr-icon-font--megamenu flaticon-menu"> </i> </span>
          </div>
        </div>
        <div class="navigation-body rlr-navigation__body container">
          <div class="navigation-body-header rlr-navigation__body-header">
            <div class="navigation-brand-text">
              <div class="rlr-logo rlr-logo__navbar-brand rlr-logo--default">
                <a href="/">
                  <img src="./assets/svg/amitie.png" style="width:200px; height:75px" alt="#" class="" />
                </a>
              </div>
            </div>
            <span class="rlr-sVGIcon navigation-body-close-button"> <i class="rlr-icon-font rlr-icon-font--megamenu flaticon-close"> </i> </span>
          </div>

          <!-- Main menu -->
          <ul class="navigation-menu rlr-navigation__menu rlr-navigation__menu--main-links">
            <!-- Dropdown menu 1 -->
            <li class="navigation-item is-active">
              <a class="navigation-link" href="/">Acceuil</a>
            </li>
            <!-- Mega menu -->
            <li class="navigation-item ">
              <a class="navigation-link" href="excursions.php">Excursion</a>
            </li>
          
            <!-- Dropdown menu 1 -->
            <li class="navigation-item">
              <a class="navigation-link" href="circuit.php">Circuits</a>
            </li>
            <li class="navigation-item">
              <a class="navigation-link" href="culturel.php"> Culturel </a>
            </li>
            <!-- Dropdown menu 2 -->
            <li class="navigation-item">
              <a class="navigation-link" target="_blank" href="https://amitievoyage.com/evens"> Séminaire </a>
            </li>
           
            <!-- Dropdown menu 2 -->
            <li class="navigation-item">
              <a class="navigation-link" href="./contact.php"> Contact </a>
            </li>
            <li class="navigation-item">
              
              <a class="navigation-link" href="?lang=en">
              <img class="image-container" style="width: 20px; height: 20px" src="../assets/images/english.png" >
              Anglais 
            </a>
              <!-- -->

            </li>
            <li class="navigation-item">
            <a class="navigation-link" href="?lang=fr"> 
            <img class="image-container" style="width: 20px; height: 20px" src="../assets/images/france_299753.png" >
              français 
            </a>
            </li>
          </ul>
         
        </div>
      </nav>
    </header>
    <!-- Main Content -->
	<section class="ftco-section">
		
		<div class="container">
		
		
			<div class="row justify-content-center">

			<?php 
                        if ($lang==="en") {
                          echo '<div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
						  padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
						  border-radius: 8px; will-change: transform;">
						   <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
							 src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxpiMB3YA&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
						   </iframe>
						 </div>
						 ';
                     
                        }elseif($lang==="fr") {
                          echo ' <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
						  padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
						  border-radius: 8px; will-change: transform;">
						   <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
							 src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxQdRULU8&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
						   </iframe>
					   </div>';
                          
                        }
                ?>







			 

				<div class="col-md-12">
					<div class="wrapper">
						
						
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
								<?php 
									if ($lang==="en") {
										echo '<h3 class="mb-4">Formulaire</h3>';
									}elseif($lang==="fr") {
										echo '<h3 class="mb-4">Form</h3>';
									}
								?>
									
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            
				      		</div>
							  <form class="contact-form" action="https://api.web3forms.com/submit" method="POST" id="form">
         					<input type="hidden" name="access_key" value="e28c4628-4fe7-4a19-92ad-a539f9dfe6db" />
        					 <input type="hidden" name="subject" value="Réservation Amitié Voyage Sénégal" />
        					<input type="hidden" name="redirect" value="https://web3forms.com/suc²cess" />
        						<input type="checkbox" name="botcheck" id="" style="display: none;" />
									
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
													echo '<label class="label" for="nom">Last Name</label>';
													echo '<input type="text" class="form-control" name="nom" id="Nom" placeholder="Last Name" >';
													}elseif($lang==="fr") {
													echo '<label class="label" for="nom">Nom</label>';
													echo '<input type="text" class="form-control" name="nom" id="Nom" placeholder="Votre Nom" >';
													}
												?>
													
													
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
													echo '<label class="label" for="prenom">First name</label>';
													echo '<input type="text" class="form-control" name="nom" id="Nom" placeholder="First name" >';
													}elseif($lang==="fr") {
													echo '<label class="label" for="prenom">Prénom</label>';
													echo '<input type="text" class="form-control" name="nom" id="Nom" placeholder="Votre Nom" >';
													}
												?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
													echo '<label class="label" for="email">Email</label>';
													echo '<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >';
													}elseif($lang==="fr") {
													echo '<label class="label" for="email">Email</label>';
													echo '<input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" >';
													}
												?>
												
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
													echo '<label class="label" for="telephone">phone</label>';
													echo '<input type="email" class="form-control" name="email" id="email" placeholder="Your Number Phone" >';
													}elseif($lang==="fr") {
													echo '<label class="label" for="telephone">Téléphone</label>';
													echo '<input type="number" class="form-control" name="telephone" id="telephone" placeholder="Votre telephone"  >';
													}
												?>
													
													
													
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
													echo '<label class="label" for="pays">Country</label>';
													echo '<input type="text" class="form-control" name="pays" id="pays" placeholder="your country" >';
													}elseif($lang==="fr") {
													echo '<label class="label" for="pays">Pays</label>';
													echo '<input type="text" class="form-control" name="pays" id="pays" placeholder="Votre Pays" >';
													}
												?>
													
													
													
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
													echo '<label class="label" for="nombre de personne">Number of person</label>';
													echo '<input type="nombre" class="form-control" name="nombre de personne" id="nombre de personne" placeholder="Number of person">';
													}elseif($lang==="fr") {
													echo '<label class="label" for="nombre de personne">Nombre de personne</label>';
													echo '<input type="nombre" class="form-control" name="nombre de personne" id="nombre de personne" placeholder="nombre de personne">';
													}
												?>
													
													
													
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
														echo '<label class="label" for="arrivée">Date of arrival in Senegal</label>';
														echo '<input type="date" class="form-control" name="arrivée" id="arrivée" placeholder="Date of arrival in Senegal">';
													}elseif($lang==="fr") {
													echo '<label class="label" for="arrivée">Date D\'arrivée au Sénégal</label>';
													echo '<input type="date" class="form-control" name="arrivée" id="arrivée" placeholder="Date D\'arrivée au Sénégal">';
													}
												?>
													
													
												
												</div>
											</div>
											 <div class="col-md-6">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
													echo '<label class="label" for="surplace">Already in Senegal</label>';
													echo '<input type="checkbox"  name="sur place" id="surplace" >';
													}elseif($lang==="fr") {
													echo '<label class="label" for="surplace">Déja au Sénégal</label>';
													echo '<input type="checkbox"  name="sur place" id="surplace" >';
													}
												?>
													
													
												
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
													echo '<label class="label" for="sejour">Duration in Days</label>';
													echo '<input type="nombre" class="form-control" name="Nombre de jours" id="sejour" placeholder="Length of stay">';
													}elseif($lang==="fr") {
														echo '<label class="label" for="sejour">Durée en Jour</label>';
														echo '<input type="nombre" class="form-control" name="Nombre de jours" id="sejour" placeholder="Durée du séjour">';
													}
												?>
													
													
													
												</div>
											</div>
										
											
											
											<div class="col-md-12">
												<div class="form-group">
												<?php 
													if ($lang==="en") {
														echo '<label class="label" for="#">Describe your travel plan.</label>';
														echo '<textarea name="description" class="form-control" id="message" cols="30" rows="4" placeholder="Describe your travel plan, your tastes and desires"></textarea>';
													}elseif($lang==="fr") {
														echo '<label class="label" for="#">Décrivez votre projet de voyage.</label>';
														echo '<textarea name="description" class="form-control" id="message" cols="30" rows="4" placeholder="Décrivez votre projet de voyage, vos gout et envie"></textarea>';
													}
												?>
													
													
													
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="form-group">
													<!-- <input type="submit" value="Enrigistrer" class="btn btn-primary">
													<div class="submitting"></div> -->
													<?php 
														if ($lang==="en") {
															echo '<button class="btn btn-primary" type="submit">Send</button>';
														}elseif($lang==="fr") {
															echo '<button class="btn btn-primary" type="submit">Envoyez</button>';
														}
													?>
													
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								
								<div class="info-wrap w-100 p-5 img" style="background-image: url(styleform/images/img12.png);">
			               </div> 


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="styleform/js/jquery.min.js"></script>
  <script src="styleform/js/popper.js"></script>
  <script src="styleform/js/bootstrap.min.js"></script>
  <script src="styleform/js/jquery.validate.min.js"></script>
  <script src="styleform/js/main.js"></script>

	</body>
</html>

