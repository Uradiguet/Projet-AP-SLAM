<?php
    require_once("../../yaml/yaml.php");
    $data=yaml_parse_file('../YAML/page3.yaml');


    echo "<h2>Compétence</h2>\n";
    echo "<h3>Langage de programmations</h3>\n";
    foreach($data["programmation"] AS $unProg){
        echo "<p>".ucfirst($unProg["nom"])." : ".$unProg["valide"]." % </p>\n";
    }
    echo "<h3>Langues</h3>\n";
    foreach($data["langue"] AS $unlang){
        echo "<p>".ucfirst($unlang["nom"])." : ".$unlang["valide"]." % </p>\n";
    }

 ?>   