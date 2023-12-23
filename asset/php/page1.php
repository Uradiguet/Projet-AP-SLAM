<?php
    $data = yaml_parse_file('/../YAML/page1.yaml');
?>
    <header>
    <ul class='nav-list'>
<?php
    foreach($data["Nav"] AS $nav){
        echo "<li class='nav-item'><a class='nav-link' href= #".$nav["nom"]." data-text=".$nav["nom"].">".ucfirst($nav["nom"])."</a></li>";
    }
?>
    </ul> </header>

    <h1><?=$data["titre"]?></h1>

    <div class='Accueil'>

    <h2 id='Accueil'><i class='fa-solid fa-house fa-2xl'style='color: #4c757a;'></i>Accueil</h2>
<?php
    foreach($data["Accueil"] AS $unAccueil){
        echo "<p>".ucfirst($unAccueil["nom"])."<br> Age : ".$unAccueil["age"]."<br>".$unAccueil["accroche"]."</p>\n";
    }
?>
    <div class='slider'>
        <div class='slider-viewport'>
            <div id='img1'>
                <div id='img2'>
                    <div class='slider-content'>
                        <img src='./asset/img/pp.jpg' width='200px'>
                        <img src='./asset/img/pp2.jpg' width='200px'>
                        <img src='./asset/img/pp3.jpg' width='200px'>
                        <img src='./asset/img/pp4.jpg' width='200px'>
                        <img src='./asset/img/pp5.jpg' width='200px'>
                        <img src='./asset/img/pp6.jpg' width='200px'>
                        <img src='./asset/img/pp7.jpg' width='200px'>
                        <img src='./asset/img/pp8.jpg' width='200px'>
                    </div>
                </div>
            </div>
        </div>
        <div class='slider-nav'>
                <a href='#img1'></a>
                <a href='#img2'></a>
            </div>
        </div>
    </div>

 