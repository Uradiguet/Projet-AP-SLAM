<?php
   /* require_once __DIR__ . '/../../yaml/yaml.php';
    $yamlFilePath = __DIR__ . '/../YAML/page1.yaml';

    if (!file_exists($yamlFilePath)) {
        die("Error: The YAML file '$yamlFilePath' does not exist.");
    }*/
    
    $data = yaml_parse_file($yamlFilePath);

   
    echo "<header>
    <ul class='nav-list'>";
    foreach($data["Nav"] AS $nav){
        echo "<li class='nav-item'><a href'#".$nav["nom"]."'>".ucfirst($nav["nom"])."</a><li><br>";
    }
    echo "</ul> </header>";


    
    echo "<h1>".$data["titre"]."</h1>\n";




    echo "<div class='Accueil'>
    <h2 id='Accueil'><i class='fa-solid fa-house fa-2xl'style='color: #4c757a;'></i>Accueil</h2>\n";
    foreach($data["Accueil"] AS $unAccueil){
        echo "<p>".ucfirst($unAccueil["nom"])."<br> Age : ".$unAccueil["age"]."<br>".$unAccueil["accroche"]."</p>\n";
    }
    echo "<div class='slider'>
        <div class='slider-viewport'>
            <div id='img1'>
                <div id='img2'>
                    <div class='slider-content'>
                        <img src='./asset/img/pp.jpg' width='200px'>
                        <img src='./asset/img/pp2.jpg' width='200px'>
                        <img src='./asset/img/pp3.jpg' width='200px'>
                        <img src='./asset/img/pp4.jpg' width='200px'>
                        <img src='./asset/img/pp5.jpg' width='200px'>
                        <img src='./asset/img/pp6.jpg' width='200px'>
                        <img src='./asset/img/pp7.jpg' width='200px'>
                        <img src='./asset/img/pp8.jpg' width='200px'>
                    </div>
                </div>
            </div>
        </div>
        <div class='slider-nav'>
                <a href='#img1'></a>
                <a href='#img2'></a>
            </div>
        </div>
        </div>";

 ?>   