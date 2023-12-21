<?php
    require_once __DIR__ . '/../../yaml/yaml.php';
    $yamlFilePath = __DIR__ . '/../YAML/page6.yaml';

    if (!file_exists($yamlFilePath)) {
        die("Error: The YAML file '$yamlFilePath' does not exist.");
    }
    
    $data = yaml_parse_file($yamlFilePath);
   


    echo "<div class='Contact'>
    <footer>
    <h2 id='Contact'>Contact</h2>\n";
    foreach($data["Contact"] AS $unCont){
        echo "<ul class = 'list-contact'>
        <li class = 'item-contact'><i class='fa-solid fa-envelope'style='color: #4c757a;'></i> Mon Mail : ".ucfirst($unCont["mail"])."</li>
        <li class = 'item-contact'><i class='fa-brands fa-github'style='color: #4c757a;'></i> Mon Github : <a href='https://github.com/Uradiguet'>".$unCont["github"]."</a></li>
        <li class = 'item-contact'><i class='fa-brands fa-instagram'style='color: #4c757a;'></i> Mon Instagram : <a href='https://www.instagram.com/ugo_rad/'>".$unCont["instagram"]."</a></li>
        <li class = 'item-contact'><i class='fa-brands fa-discord'style='color: #4c757a;'></i> Mon Discord : ".$unCont["discord"]."</li>
        <li class = 'item-contact'><i class='fa-brands fa-youtube'style='color: #4c757a;'></i> Mon Youtube : <a href='https://www.youtube.com/@ugosansh5949?si=Wz5TD9-wf6wrMNA'>".$unCont["youtube"]."</a></li>
        <li class = 'item-contact'><i class='fa-brands fa-twitter'style='color: #4c757a;'></i> Mon X (Twitter) : <a href='https://www.x.com/URadiguet?t=qdD_rJPJ42ffYXMM_NK2LA&s=09'>".$unCont["twitter"]."</a></li></ul>";
    }
    echo "</footer></div>"
?>