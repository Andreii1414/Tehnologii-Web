<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Forgot password</title>
</head>
<body>
    <div class="split left-div">
        <div class="centered-content"> 
            <b><span class="textStyle left-div__change"></span></b>
            <p class="textStyle left-div__toLearn"><b>pentru a invata semnele rutiere<br> in cel mai simplu mod</b></p>

            <img src="roadsigns.png" alt="ROT" class="left-div__image">
        </div>
            <p class="textStyle left-div__rot"><b>Romanian Traffic Signs Tutor</b></p>
    </div>
    <div class="split right-div">
        <div class="switch" onclick="window.location.href='../home/home.php'" rel="nofollow"> 
            <p class="switch__text"> Catre Pagina Principala</p>          
        </div>
        <div class="sign_up_div">
            <p class="no_acc"><b>Nu ai inca un cont?</b></p>
            <button class="sign_up_btn" onclick = "window.location.href='signup.php'" rel="nofollow"><b>Sign up</b></button>
        </div>

        <div class="centered-content">
            <form action="/api/forgot/code" method="POST" class="form_login">
                <h2 class="form_text textStyle">Schimba parola</h2>
                <p>Folosind codul primit pe email</p>
                <div id="erori">
                    <?php

                    if(isset($_GET['errors']))
                    {
                        $erori = urldecode($_GET['errors']);
                        $errors = json_decode($erori, true);
                        foreach($errors as $error)
                            echo '<p><i class="fa fa-exclamation-triangle"></i>'. $error .'</p>';
                    }
                    ?>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="text" id="code" name="code" placeholder="Codul primit pe email" class="form_input">
                    <i class="fa fa-key icon"></i> <br>

                    <i class="fa fa-key icon"></i>
                    <input type="password" id="newPass" name="newPass" placeholder="Parola noua" class="form_input">
                    <i class="fa fa-key icon" onclick="passwordVisibility(1)"></i> <br>

                    <i class="fa fa-key icon"></i>
                    <input type="password" id="resPass" name="resPass" placeholder="Rescrie parola" class="form_input">
                    <i class="fa fa-key icon"  onclick="passwordVisibility(2)"></i>
                </div>
                    <input type="submit" name="submit" id="submit" value="Change password" class="form_button">

            </form>
        </div>
    </div>
    <script>
    function passwordVisibility(pas){
        if(pas == 1)
            var passwordInput = document.getElementById("newPass");
        else var passwordInput = document.getElementById("resPass");
        var toggle = document.getElementById("showPassword");

        if(passwordInput.type == "password")
        {
            passwordInput.type = "text";
        }
        else {
            passwordInput.type = "password";
        }
     }
    
    document.addEventListener('DOMContentLoaded', function(){

        var inputNew = document.getElementById('newPass');
        var inputRes = document.getElementById('resPass');


        inputNew.value = sessionStorage.getItem('newPass');
        inputRes.value = sessionStorage.getItem('resPass');

        inputNew.addEventListener('input', function(){
            sessionStorage.setItem('newPass', inputNew.value);
        });
        inputRes.addEventListener('input', function(){
            sessionStorage.setItem('resPass', inputRes.value);
        });

    })

    </script>

</body>
</html>