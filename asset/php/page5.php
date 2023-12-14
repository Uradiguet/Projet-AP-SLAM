<?php
    /*require_once __DIR__ . '/../../yaml/yaml.php';

    $yamlFilePath = __DIR__ . '/../YAML/page5.yaml';

    if (!file_exists($yamlFilePath)) {
        die("Error: The YAML file '$yamlFilePath' does not exist.");
    }*/
    
    $data = yaml_parse_file($yamlFilePath);

    echo "<div class='Formation'>
    <h2 id='Formation'><i class='fa-solid fa-school fa-2xl' style='color: #4c757a;' ></i>Formation</h2>\n
    <ul class='list-formation'";

    echo "<h3>Collège</h3>\n";
    foreach($data["college"] AS $unColl){
        echo "<li class='item-formation'><a href='https://www.education.gouv.fr/annuaire/14550/blainville-sur-orne/college/0141940h/college-langevin-wallon.html'>".ucfirst($unColl["duree"])." ".$unColl["detail"]."\n";
        echo "<p>".ucfirst($unColl["diplome"]).". Obtenue en : ".$unColl["date"]."</p></a></li>\n";
    }

    echo "<h3>Lycée</h3>\n";
    foreach($data["lycee"] AS $unlyc){
        echo "<li class='item-formation'><a href='https://dumont-laplace.lycee.ac-normandie.fr/'>".ucfirst($unlyc["duree"])." ".$unlyc["detail"]."\n";
        echo "<p>".ucfirst($unlyc["diplome"]).". Obtenue en : ".$unlyc["date"]."</p></a></li>\n";
    }

    echo "<h3>Fac</h3>\n";
    foreach($data["fac"] AS $unfac){
        echo "<li class='item-formation'><a href='https://uniform.unicaen.fr/catalogue/formation/licences/5615-licence-informatique?s=SCIENCES'>".ucfirst($unfac["duree"])." ".$unfac["detail"]."</a></li>\n";
    }

    echo "<h3>BTS</h3>\n";
    foreach($data["bts"] AS $unbts){
        echo "<li class='item-formation'><a href='https://www.caensup.fr/formation/Services-Informatiques-aux-Organisations-BTS/Formation-initiale-scolaire/8/1'>".ucfirst($unbts["duree"])." ".$unbts["detail"]."</a></li>\n";
    }

    echo "</ul>
    </div>";
?>