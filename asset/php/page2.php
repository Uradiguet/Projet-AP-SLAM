<?php
    require_once("../../yaml/yaml.php");
    $data=yaml_parse_file('../YAML/page2.yaml');


    echo "<h2>A propos</h2>\n";
    foreach($data["A-propos"] AS $unPropos){
        echo "<p>".ucfirst($unPropos["propos"])."<br>".$unPropos["accroche"]."<br>".$unPropos["presentation"]."</p>\n";
    }

 ?>   