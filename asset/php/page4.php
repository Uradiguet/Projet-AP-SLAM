<?php
    $data = yaml_parse_file('/../YAML/page4.yaml');
?>
    <div class='Experience'>
    
        <h2 id='Expériences'><i class='fa-solid fa-briefcase fa-2xl' style='color: #4c757a;'></i>Expériences</h2>
        <ul class='list-exp'>

            <li class='item-exp'><h3>Stage</h3>
            <?php
                foreach($data["stage"] AS $unStage){
                    echo "".ucfirst($unStage["duree"])."<br>- ".$unStage["detail"]."</li>\n";
                }

                echo "<li class='item-exp'><h3>Animateur de visite</h3>\n";
                foreach($data["campus"] AS $unCamp){
                    echo "".ucfirst($unCamp["duree"])."<br>- ".$unCamp["detail"]."</li>\n";
                }

                echo "<li class='item-exp'><h3>Animateur des Portes Ouverte</h3>\n";
                foreach($data["porte"] AS $unport){
                    echo "".ucfirst($unport["duree"])."<br>- ".$unport["detail"]."</li>\n";
                }

                echo "<li class='item-exp'><h3>Hyper U</h3>\n";
                foreach($data["hyperu"] AS $untrav){
                    echo "".ucfirst($untrav["duree"])."<br>- ".$untrav["detail"]."</li>\n";
                }
            ?>
            <div class = "cv"><a href = './asset/CV.pdf'><img src = 'asset/img/cv.png' width = '100'></a></div>
        </ul>
    </div>
 