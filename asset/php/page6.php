<?php
    $yamlFilePath = __DIR__ . '/../YAML/page6.yaml';

    if (!file_exists($yamlFilePath)) {
        die("Error: The YAML file '$yamlFilePath' does not exist.");
    }

    $data = yaml_parse_file($yamlFilePath);
   
?>

    <div class='Contact'>
    <footer>
    <h2 id='Contact'>Contact</h2>

<?php
    foreach($data["Contact"] AS $unCont){
        echo "<ul class = 'list-contact'>
        <li class = 'item-contact'><i class='fa-solid fa-envelope'style='color: #4c757a;'></i> Mon Mail : ".ucfirst($unCont["mail"])."</li>
        <li class = 'item-contact'><i class='fa-brands fa-github'style='color: #4c757a;'></i> Mon Github : <a href='https://github.com/Uradiguet'>".$unCont["github"]."</a></li>
        <li class = 'item-contact'><i class='fa-brands fa-instagram'style='color: #4c757a;'></i> Mon Instagram : <a href='https://www.instagram.com/ugo_rad/'>".$unCont["instagram"]."</a></li>
        <li class = 'item-contact'><i class='fa-brands fa-discord'style='color: #4c757a;'></i> Mon Discord : ".$unCont["discord"]."</li>
        <li class = 'item-contact'><i class='fa-brands fa-youtube'style='color: #4c757a;'></i> Mon Youtube : <a href='https://www.youtube.com/@ugosansh5949?si=Wz5TD9-wf6wrMNA'>".$unCont["youtube"]."</a></li>
        <li class = 'item-contact'><i class='fa-brands fa-twitter'style='color: #4c757a;'></i> Mon X (Twitter) : <a href='https://www.x.com/URadiguet?t=qdD_rJPJ42ffYXMM_NK2LA&s=09'>".$unCont["twitter"]."</a></li></ul>";
    }
?>

    <h2>Me contactez</h2>

    <div class='formwrapper'>
    <form action='./contact.php' method='post' onsubmit='return validateForm()'>

    
    <div class='nom'>
        <p>Nom</p>
        <input type='text' name='Nom' placeholder='Votre Nom'>
    </div>

    
    <div class='sujet'>
        <p>Objet</p>
        <input type='text' name='subject' placeholder='Objet'>
    </div>

    
    <div class='message'>
        <p>Message</p>
        <textarea name='body' rows='10' cols='40'></textarea>
    </div>

    
    <div class='g-recaptcha' data-sitekey='6LeK6DkpAAAAAL1VLNtCir0-V331rtUcOLayu7IU'></div>

    
    <script>
        function validateForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                alert('Please check the reCAPTCHA box.');
                return false;
            }
            return true;
        }
    </script>

    
    <button type='submit' value='Submit' name='ok' id='submit_mail'>Envoyer</button>
    </form>
    </div>
    </footer></div>
