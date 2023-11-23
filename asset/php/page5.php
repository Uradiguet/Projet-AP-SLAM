<?php
    require_once("../../yaml/yaml.php");
    $data=yaml_parse_file('../YAML/page5.yaml');


    echo "<h2>Formation</h2>\n";
    echo "<h3>Collège</h3>\n";
    foreach($data["college"] AS $unColl){
        echo "<p>".ucfirst($unColl["duree"])." ".$unColl["detail"]."</p>\n";
        echo "<p>".ucfirst($unColl["diplome"]).". Obtenue en : ".$unColl["date"]."</p>\n";
    }

    echo "<h3>Lycée</h3>\n";
    foreach($data["lycee"] AS $unlyc){
        echo "<p>".ucfirst($unlyc["duree"])."".$unlyc["detail"]."</p>\n";
        echo "<p>".ucfirst($unlyc["diplome"]).". Obtenue en : ".$unlyc["date"]."</p>\n";
    }

    echo "<h3>Fac</h3>\n";
    foreach($data["fac"] AS $unfac){
        echo "<p>".ucfirst($unfac["duree"])." ".$unfac["detail"]."</p>\n";
    }

    echo "<h3>BTS</h3>\n";
    foreach($data["bts"] AS $unbts){
        echo "<p>".ucfirst($unbts["duree"])." ".$unbts["detail"]."</p>\n";
    }

?>