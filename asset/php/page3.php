<?php
    require_once __DIR__ . '/../../yaml/yaml.php';

    $yamlFilePath = __DIR__ . '/../YAML/page3.yaml';

    if (!file_exists($yamlFilePath)) {
        die("Error: The YAML file '$yamlFilePath' does not exist.");
    }
    
    $data = yaml_parse_file($yamlFilePath);

    echo "<div class='Competences'>
        <h2 id='Compétences'><i class='fa-solid fa-graduation-cap fa-2xl' style='color: #4c757a;'></i>Compétence</h2>\n";

    echo "<h3>Langage de programmations</h3>\n";

    foreach ($data["programmation"] as $unProg) {
        echo "<div class='item-comp'>" . ucfirst($unProg["nom"]) . " : 
                <div class='progress'>
                    <div class='item-competence' style='width:" . $unProg["valide"] . "%;'>" . (ceil($unProg["valide"] / 10) * 10) . " % </div>
                </div>
            </div>\n";
    }

    echo "<h3>Langues</h3>\n";

    foreach ($data["langue"] as $unlang) {
        echo "<div class='item-comp'>" . ucfirst($unlang["nom"]) . " : 
                <div class='progress'>
                    <div class='item-competence' style='width:" . $unlang["valide"] . "%;'>" . (ceil($unlang["valide"] / 10) * 10) . " % </div>
                </div>
            </div>\n";
    }

    echo "</div>";
?>
