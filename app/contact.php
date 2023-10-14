
<!doctype html>
<html lang="en">
  <head>
  	<title>Avs Admin</title>
	  <?= require_once 'include/head.php'?>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="styleform/css/style.css">

	</head>
	<body>
		  <!-- Header -->
		  <header>
        <?= require_once 'include/header.php'?>
    </header>
    <!-- Main Content -->
	<section class="ftco-section">
		
		<div class="container">
		
		
			<div class="row justify-content-center">
			<div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 				padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
				 border-radius: 8px; will-change: transform;">
 				 <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
  				  src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFxQdRULU8&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  				</iframe>
</div>

				<div class="col-md-12">
					<div class="wrapper">
						
						
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Formulaire</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Programme Ajouter avec Succés!
				      		</div>
							  <form class="contact-form" action="https://api.web3forms.com/submit" method="POST" id="form">
         					<input type="hidden" name="access_key" value="e28c4628-4fe7-4a19-92ad-a539f9dfe6db" />
        					 <input type="hidden" name="subject" value="Réservation Amitié Voyage Sénégal" />
        					<input type="hidden" name="redirect" value="https://web3forms.com/suc²cess" />
        						<input type="checkbox" name="botcheck" id="" style="display: none;" />
									
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="nom">Nom</label>
													<input type="text" class="form-control" name="nom" id="Nom" placeholder="Votre Nom" >
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="prenom">Prénom</label>
													<input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre Prénom" >
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Email</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" >
												
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="telephone">Téléphone</label>
													<input type="number" class="form-control" name="telephone" id="telephone" placeholder="Votre telephone"  >
													
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="pays">Pays</label>
													<input type="text" class="form-control" name="pays" id="pays" placeholder="Votre Pays"  >
													
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="nombre de personne">Nombre de personne</label>
													<input type="nombre" class="form-control" name="nombre de personne" id="nombre de personne" placeholder="nombre de personne">
													
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="arrivée">Date D'arrivée au Sénégal</label>
													<input type="date" class="form-control" name="arrivée" id="arrivée" placeholder="Date D'arrivée au Sénégal">
												
												</div>
											</div>
											 <div class="col-md-6">
												<div class="form-group">
													<label class="label" for="surplace">Déja au Sénégal</label>
													<input type="checkbox"  name="sur place" id="surplace" >
												
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="sejour">Durée en Jour</label>
													<input type="nombre" class="form-control" name="Nombre de jours" id="sejour" placeholder="Durée du séjour">
													
												</div>
											</div>
										
											
											
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Décrivez votre projet de voyage.</label>
													<textarea name="description" class="form-control" id="message" cols="30" rows="4" placeholder="Mini description de programme"></textarea>
													
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="form-group">
													<!-- <input type="submit" value="Enrigistrer" class="btn btn-primary">
													<div class="submitting"></div> -->
													<button class="btn btn-primary" type="submit">Envoyez</button>
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

