<!doctype html>
<html lang="fr">
	<head>
		<title>Accueil</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
		<link rel="stylesheet" href="./asset/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	</head>

<?php 
    set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);
    require './yaml/yaml.php';
    echo '<body>';
    require "./asset/php/page1.php"; 
    require "./asset/php/page2.php"; 
    require "./asset/php/page3.php"; 
    require "./asset/php/page4.php"; 
    require "./asset/php/page5.php"; 
    require "./asset/php/page6.php"; 
    echo '</body>';
?>