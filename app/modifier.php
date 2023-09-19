<?php 
require __DIR__.'/database/conexion.php';
$programmeDB = require_once __DIR__.('/database/models/programmeDB.php');


$_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_SPECIAL_CHARS);
$idprogramme = $_GET['id'];
$modif = $programmeDB->ModifOne($idprogramme);

// echo "<pre>";
// var_dump($modif);
// echo "</pre>";
foreach ($modif as $excur) {
    $intituler = $excur['intituler'];
    $region = $excur['region'];
    $prix = $excur['prix'];
    $nombredejour = $excur['nombredejour'];
    $category = $excur['category'];
    $types = $excur['types'];
    $images  = $excur['images'];
    $canva = $excur['canva'];
    $description = $excur['description'];
}






?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Avs Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="styleform/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Espace Admin AVS</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						
						
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Nouveau Programme</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Programme Ajouter avec Succés!
				      		</div>
									<form method="POST"  action="/form.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Intituler</label>
													<input type="text" class="form-control" name="intituler" id="name" placeholder="Name" value="<?=$intituler?>">
													<?php if($errors['intituler']): ?>
                                                           <h6 style="color: red;"><?= $errors['intituler'] ?></h6>
													<?php endif; ?>

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="region">Region</label>
													<input type="text" class="form-control" name="region" id="region" placeholder="Region Concerner" value="<?=$region ?? '' ?>">
													<?php if($errors['region']): ?>
                                                           <h6 style="color: red;"><?= $errors['region'] ?></h6>
													<?php endif; ?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="prix">Prix</label>
													<input type="number" class="form-control" name="prix" id="prix" placeholder="prix par personne"  value="<?=$prix ?? '' ?>">
													<?php if($errors['prix']): ?>
                                                           <h6 style="color: red;"><?= $errors['prix'] ?></h6>
													<?php endif; ?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="nombrejour">Nombre de Jour</label>
													<input type="text" class="form-control" name="nombrejour" id="nombrejour" placeholder="Nombre de Jour" value="<?=$nombredejour ?? '' ?>">
													<?php if($errors['nombredejour']): ?>
                                                           <h6 style="color: red;"><?= $errors['nombredejour'] ?></h6>
													<?php endif; ?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="categorie">Categorie</label>
													<input type="text" class="form-control" name="categorie" id="categorie" placeholder="Categorie" value="<?=$category ?? '' ?>">
													<?php if($errors['categorie']): ?>
                                                           <h6 style="color: red;"><?= $errors['categorie'] ?></h6>
													<?php endif; ?>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="types">Types</label>
													 <select name="types" id="types"  >
														<option value="Excursion">Excursion</option>
														<option value="Mini-circuit">Mini-circuit</option>
														<option value="Circuit">Circuit</option>
														<option value="Circuit">Culturel</option>


													 </select>
													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="image">Image</label>
													<input type="url" class="form-control" name="image" id="image" placeholder="image" value="<?=$images ?? '' ?>">
													<?php if($errors['image']): ?>
                                                           <h6 style="color: red;"><?= $errors['image'] ?></h6>
													<?php endif; ?>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="canva">Liens Canva du programme</label>
													<input type="url" class="form-control" name="canva" id="canva" placeholder="canva" value="<?=$canva ?? '' ?>">
													<?php if($errors['canva']): ?>
                                                           <h6 style="color: red;"><?= $errors['canva'] ?></h6>
													<?php endif; ?>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Description</label>
													<textarea name="description" class="form-control" id="message" cols="30" rows="4" placeholder="Mini description de programme" ><?=$description ?? '' ?></textarea>
                                                   
													<?php if($errors['description']): ?>
                                                           <h6 style="color: red;"><?= $errors['description'] ?></h6>
													<?php endif; ?>
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="form-group">
													<!-- <input type="submit" value="Enrigistrer" class="btn btn-primary">
													<div class="submitting"></div> -->
													<button class="btn btn-primary" type="submit">Enrigistrer</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(styleform/images/img1.jpg);">
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

