<?php
    require_once("../../yaml/yaml.php");
    $data=yaml_parse_file('../YAML/page6.yaml');


    echo "<h2>Contact</h2>\n";
    foreach($data["Contact"] AS $unCont){
        echo "<p> Mon Mail : ".ucfirst($unCont["mail"])."
        <br> Mon Github : <a href='https://github.com/Uradiguet'>".$unCont["github"]."</a>
        <br> Mon Instagram : <a href='https://www.instagram.com/ugo_rad/'>".$unCont["instagram"]."</a>
        <br> Mon Discord : ".$unCont["discord"]."
        <br> Mon Youtube : <a href='https://www.youtube.com/@ugosansh5949?si=Wz5TD9-wf6wrMNA'>".$unCont["youtube"]."</a>
        <br> Mon X (Twitter) : <a href='https://www.x.com/URadiguet?t=qdD_rJPJ42ffYXMM_NK2LA&s=09'>".$unCont["twitter"]."</a></p>\n";
    }

?>