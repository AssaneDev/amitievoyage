<?php
require __DIR__.'/database/conexion.php';
$programmeDB = require_once __DIR__.('/database/models/programmeDB.php');
 const ERROR_TO_SHORT = 'Contenue trop court';
 const ERROR_REQUIRED = 'Veuillez remplire ce champs';
 const ERROR_URL ='Url Inconrect';
 const ERROR_INT = 'Chiffre Incorrect';
 const ERROR_TO_LARGE = 'Veuillez Resumer le description sur 100 mots';

 $errors = [
   'intituler'=>"",
   'region'=>"",
   'prix'=>"",
   'nombredejour'=>"",
   'category'=>"",
   'types'=>"",
   'image'=>"",
   'canva'=>"",
   'description'=>"",
 ];

   $_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_SPECIAL_CHARS);
    $idprogramme = $_GET['id'] ?? '';

	// var_dump($idprogramme);
	// exit;

	if($idprogramme){
		$programme = $programmeDB->ModifOne($idprogramme);
		// echo "<pre>";
        // var_dump($modif);
        // echo "</pre>";
		// exit;
		foreach ($programme as $excur) {
			$intituler = $excur['intituler'];
			$region = $excur['region'];
			$prix = $excur['prix'];
			$nombredejour = $excur['nombredejour'];
			$category = $excur['category'];
			$types = $excur['types'];
			$image  = $excur['images'];
			$canva = $excur['canva'];
			$description = $excur['description'];
		}
		
	}

 
 if ($_SERVER['REQUEST_METHOD']==='POST') {
	//sanatize
	$_POST = filter_input_array(INPUT_POST,[
		'intituler'=>FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'region'=>FILTER_SANITIZE_SPECIAL_CHARS,
		'prix'=>FILTER_SANITIZE_NUMBER_INT,
		'nombrejour'=>FILTER_SANITIZE_SPECIAL_CHARS,
		'category'=>FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'types'=>FILTER_SANITIZE_SPECIAL_CHARS,
		'image'=>FILTER_SANITIZE_URL,
		'canva'=>FILTER_SANITIZE_URL,
		'description'=>FILTER_SANITIZE_FULL_SPECIAL_CHARS
	]);
	
	//recuperation des données

	$intituler = $_POST['intituler'];
	$region = $_POST['region'];
	$prix = $_POST['prix'];
	$nombredejour = $_POST['nombrejour'];
	$category = $_POST['category'];
	$types = $_POST['types'];
	$image = $_POST['image'];
	$canva = $_POST['canva'];
	$description = $_POST['description'];

	

    //Verification

	if (!$intituler) {
		$errors['intituler'] = ERROR_REQUIRED;
	}elseif(mb_strlen($intituler)<5){
		$errors['intituler'] = ERROR_TO_SHORT;
	}

	if (!$region) {
		$errors['region'] = ERROR_REQUIRED;
	}
    
	if (!$prix) {
		$errors['prix'] = ERROR_REQUIRED;
	}elseif(!filter_var($prix,FILTER_VALIDATE_INT)){
		$errors['prix'] = ERROR_INT;
	}
	if (!$nombredejour) {
		$errors['nombredejour'] = ERROR_REQUIRED;
	}
	if (!$category) {
		$errors['category'] = ERROR_REQUIRED;
	}
	if (!$types) {
		$errors['types'] = ERROR_REQUIRED;
	}
	if (!$image) {
		$errors['image'] = ERROR_REQUIRED;
	}elseif(!filter_var($image,FILTER_VALIDATE_URL)){
		$errors['image'] = ERROR_URL;
	}
	if (!$canva) {
		$errors['canva'] = ERROR_REQUIRED;
	}elseif(!filter_var($canva,FILTER_VALIDATE_URL)){
		$errors['canva'] = ERROR_URL;
	}
	if (!$description) {
		$errors['description'] = ERROR_REQUIRED;
	}elseif(mb_strlen($description)>500){
		$errors['description'] = ERROR_TO_LARGE;
	}elseif(mb_strlen($description)<10){
		$errors['description'] = ERROR_TO_SHORT;
	}
	
	if (empty(array_filter($errors,fn($e)=>$e !== ''))) {
		if ($idprogramme) {
			$programme['intituler'] = $intituler;
			$programme['region'] = $region;
			$programme['prix'] = $prix;
			$programme['nombredejour'] = $nombredejour;
			$programme['category'] = $category;
			$programme['types'] = $types;
			$programme['images'] = $image;
			$programme['canva'] = $canva;
			$programme['description'] = $description;
			$programme['idprogramme'] = $idprogramme;
			
		
			
			$programmeDB->UpdateOne($programme);
		}else{
		$programmeDB->createOne([
			'intituler'=>$intituler,
			'region'=>$region,
			'prix'=>$prix,
			'nombredejour'=>$nombredejour,
			'category'=>$category,
			'types'=>$types,
			'images'=>$image,
			'canva'=>$canva,
			'description'=>$description
		]);
	}
		header('location:/');
	
	}
	








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
			 <ul class="liste">
				<li class="menu"><a href="excurgestion.php">Gestion Excursion</a></li>
				<li class="menu"><a href="circuitgestion.php">Gestion Gestion Circuit</a></li>

			 </ul>
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
									<form  action="/form.php<?= $idprogramme ? "/?id=$idprogramme" : '' ?>" method="POST" >
									
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Intituler</label>
													<input type="text" class="form-control" name="intituler" id="name" placeholder="Name" value="<?=$intituler ?? '' ?>">
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
													<input type="text" class="form-control" name="category" id="categorie" placeholder="Categorie" value="<?=$category ?? '' ?>">
													<?php if($errors['category']): ?>
                                                           <h6 style="color: red;"><?= $errors['category'] ?></h6>
													<?php endif; ?>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="types">Types</label>
													 <select name="types" id="types" >
														<option  value="Excursion">Excursion</option>
														<option  value="Mini-circuit">Mini-circuit</option>
														<option  value="Circuit">Circuit</option>
														<option value="Culturel">Culturel</option>


													 </select>
													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="image">Image</label>
													<input type="url" class="form-control" name="image" id="image" placeholder="image" value="<?=$image ?? '' ?>">
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
													<textarea name="description" class="form-control" id="message" cols="30" rows="4" placeholder="Mini description de programme"><?=$description ?? '' ?></textarea>
													<?php if($errors['description']): ?>
                                                           <h6 style="color: red;"><?= $errors['description'] ?></h6>
													<?php endif; ?>
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="form-group">
													<!-- <input type="submit" value="Enrigistrer" class="btn btn-primary">
													<div class="submitting"></div> -->
													<button class="btn btn-primary" type="submit"><?= $idprogramme ? 'Modifier' : 'Enrigistrer' ?></button>
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

