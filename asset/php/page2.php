<?php

    $yamlFilePath = __DIR__ . '/../YAML/page2.yaml';

    if (!file_exists($yamlFilePath)) {
        die("Error: The YAML file '$yamlFilePath' does not exist.");
    }

    $data = yaml_parse_file($yamlFilePath);
?>

    <div class ='A-propos'>
    <h2 id='A propos'><i class='fa-solid fa-user fa-2xl' style='color: #4c757a;'></i>A propos</h2>
    
<?php
    foreach($data["A-propos"] AS $unPropos){
        echo "<p>".ucfirst($unPropos["propos"])."<br>".$unPropos["accroche"]."<br>".$unPropos["presentation"]."</p>\n";
    }
?>
    </div>
