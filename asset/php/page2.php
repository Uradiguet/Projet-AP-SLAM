<?php
    $data = yaml_parse_file('/../YAML/page2.yaml');
?>

    <div class ='A-propos'>
    <h2 id='A propos'><i class='fa-solid fa-user fa-2xl' style='color: #4c757a;'></i>A propos</h2>
    
<?php
    foreach($data["A-propos"] AS $unPropos){
        echo "<p>".ucfirst($unPropos["propos"])."<br>".$unPropos["accroche"]."<br>".$unPropos["presentation"]."</p>\n";
    }
?>
    </div>
