<?php
    require_once("../../yaml/yaml.php");
    $data=yaml_parse_file('../YAML/page1.yaml');

    echo "<h1>".$data["titre"]."</h1>\n";

    foreach($data["Nav"] AS $nav){
        echo "<a href'#".$nav["nom"]."'>".ucfirst($nav["nom"])."</a><br>";
    }

    echo "<h2 id='accueil'>Accueil</h2>\n";
    foreach($data["Accueil"] AS $unAccueil){
        echo "<p>".ucfirst($unAccueil["nom"])."<br> Age : ".$unAccueil["age"]."<br>".$unAccueil["accroche"]."</p>\n";
    }

 ?>   