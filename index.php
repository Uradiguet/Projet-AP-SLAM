<!doctype html>
<html lang="fr">
	<head>
		<title>Accueil</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
		<link rel="stylesheet" href="./asset/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" src="./asset/img/logo.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <?php 
include_once './vendor/autoload.php';
require_once './yaml/yaml.php'; 
?>
    </head>
    <body>

        <?php

            include("asset/php/page1.php"); 
            include("asset/php/page2.php"); 
            include("asset/php/page3.php"); 
            include("asset/php/page4.php"); 
            include("asset/php/page5.php"); 
            include("asset/php/page6.php"); 
        ?>

    </body>
</html>
