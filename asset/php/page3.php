<?php
    require_once __DIR__ . '/../../yaml/yaml.php';

    $yamlFilePath = __DIR__ . '/../YAML/page3.yaml';

    if (!file_exists($yamlFilePath)) {
        die("Error: The YAML file '$yamlFilePath' does not exist.");
    }
    
    $data = yaml_parse_file($yamlFilePath);


    echo "<div class='Competences'>

    <h2 id='Compétences'><i class='fa-solid fa-graduation-cap fa-2xl' style='color: #4c757a;'></i>Compétence</h2>\n
    
    <ul class='list-competence'>";

    echo "<h3>Langage de programmations</h3>\n";
    foreach($data["programmation"] AS $unProg){
        echo "<li class='item-competence'>".ucfirst($unProg["nom"])." : ".$unProg["valide"]." % </li>\n";
    }
    echo "<h3>Langues</h3>\n";
    foreach($data["langue"] AS $unlang){
        echo "<li class='item-competence'>".ucfirst($unlang["nom"])." : ".$unlang["valide"]." % </li>\n";
    }
    echo "</ul></div>";
 ?>   