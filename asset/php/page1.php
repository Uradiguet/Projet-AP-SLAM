<?php

    function yaml_parse_file($file){
        try {
            return Yaml::parseFile($file);
        } catch (ParseException $exception) {
            printf('Unable to parse the YAML string: <b>%s</b>', $exception->getMessage());
        }
    }
    $data=yaml_parse_file('./YAML/page1.yaml');

    echo "<h1>".$data["titre"]."</h1>\n";


    echo "<h2>Accueil</h2>\n";
    foreach($data["Accueil"] AS $unAccueil){
        echo "<p>".ucfirst($unAccueil["nom"])."<br> Age : ".$unAccueil["age"]."<br>".$unAccueil["accroche"]."</p>\n";
    }

 ?>   