<?php
    require_once("../../yaml/yaml.php");
    $data=yaml_parse_file('../YAML/page4.yaml');


    echo "<h2>Expériences</h2>\n";
    echo "<h3>Stage</h3>\n";
    foreach($data["stage"] AS $unStage){
        echo "<p>".ucfirst($unStage["duree"])."<br>- ".$unStage["detail"]."</p>\n";
    }

    echo "<h3>Animateur de visite</h3>\n";
    foreach($data["campus"] AS $unCamp){
        echo "<p>".ucfirst($unCamp["duree"])."<br>- ".$unCamp["detail"]."</p>\n";
    }

    echo "<h3>Animateur des Portes Ouverte</h3>\n";
    foreach($data["porte"] AS $unport){
        echo "<p>".ucfirst($unport["duree"])."<br>- ".$unport["detail"]."</p>\n";
    }

    echo "<h3>Hyper U</h3>\n";
    foreach($data["hyperu"] AS $untrav){
        echo "<p>".ucfirst($untrav["duree"])."<br>- ".$untrav["detail"]."</p>\n";
    }
 ?>   