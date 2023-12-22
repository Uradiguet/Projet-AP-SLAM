<?php

    $yamlFilePath = __DIR__ . '/../YAML/page3.yaml';

    if (!file_exists($yamlFilePath)) {
        die("Error: The YAML file '$yamlFilePath' does not exist.");
    }

    $data = yaml_parse_file($yamlFilePath);
?>
    <h2 id='Compétences'><i class='fa-solid fa-graduation-cap fa-2xl' style='color: #4c757a;'></i>Compétence</h2>
        <div class='Competences'>

            <div class='list-comp'><h3 class = 'titre-comp'>Langage de programmations</h3>

            <?php
            foreach ($data["programmation"] as $unProg) {
                echo "<div class='item-comp'>" . ucfirst($unProg["nom"]) . " : 
                    <div class='progress barre" . (ceil($unProg["valide"] / 10) * 10) . "' style='width:" . $unProg["valide"] . "%;'></div></div>
                \n";

            }
            ?>
            <h3 class = 'titre-comp'>Langues</h3>

            <?php
                foreach ($data["langue"] as $unlang) {
                    echo "<div class='item-comp'>" . ucfirst($unlang["nom"]) . " : 
                        <div class='progress barre" . (ceil($unlang["valide"] / 10) * 10) . "' style='width:" . $unlang["valide"] . "%;'></div></div>\n";
            }
            ?>
            </div>
        </div>
    </div>


