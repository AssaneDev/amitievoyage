<?php
require __DIR__.'/database/conexion.php';
$programmeDB = require_once __DIR__.('/database/models/programmeEnglish.php');

$_GET = filter_input_array(INPUT_GET,FILTER_SANITIZE_SPECIAL_CHARS);
$idprogramme = $_GET['id'];

 if ($idprogramme) {
    //  $programme = $programmeDB->ModifOne();
    $programmeDB->DeleteOne($idprogramme);
 }
header('location:/form.php');