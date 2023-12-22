<?php

    $data = yaml_parse_file('../YAML/page3.yaml');

    echo "<h2 id='Compétences'><i class='fa-solid fa-graduation-cap fa-2xl' style='color: #4c757a;'></i>Compétence</h2>\n
        <div class='Competences'>";

echo "<div class='list-comp'><h3>Langage de programmations</h3>\n";

foreach ($data["programmation"] as $unProg) {
    echo "<div class='item-comp'>" . ucfirst($unProg["nom"]) . " : 
        <div class='progress barre" . (ceil($unProg["valide"] / 10) * 10) . "' style='width:" . $unProg["valide"] . "%;'></div></div>
      </div>\n";

}

echo "<h3>Langues</h3>\n";

foreach ($data["langue"] as $unlang) {
    echo "<div class='item-comp'>" . ucfirst($unlang["nom"]) . " : 
        <div class='progress barre" . (ceil($unlang["valide"] / 10) * 10) . "' style='width:" . $unlang["valide"] . "%;'></div></div>
      </div>\n";


}

echo "</div></div>";
?>

