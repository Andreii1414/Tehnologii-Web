<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
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
        <div class="switch" onclick="window.location.href='../home/home.php'">
            <p class="switch__text">Catre Pagina Principala</p>         
        </div>
        <div class="sign_up_div">
            <p class="no_acc"><b>Ai deja cont?</b></p>
            <button class="sign_up_btn" onclick = "window.location.href='login.php'"><b>Log in</b></button>
        </div>

        <div class="centered-content">
            <form method="post" class="form_login" id="form_login" action="/api/register">
                <h2 class="form_text textStyle">Creaza un cont nou</h2>
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
                    <i class="fa fa-user icon"></i>
                    <input type="text" id="nume" name="nume" placeholder="Nume" 
                    class="form_input"
                    > <i class="fa fa-user icon"></i><br>
                </div>
                <div>
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" id="adresa" name="adresa" placeholder="Email"
                    class="form_input"><i class="fa fa-envelope icon"></i><br>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="password" id="parola" name="parola" placeholder="Parola"
                    class="form_input">  <i class="fa fa-eye icon" id="showPassword" onclick="passwordVisibility(1)"></i><br>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="password" id="resparola" name="resparola" placeholder="Rescrie parola"
                    class="form_input"> <i class="fa fa-eye icon" id="showPassword" onclick="passwordVisibility(2)"></i><br>
                </div>
                </label>
                    <input type="submit" name="submit" id="submit" value="Creaza cont" class="form_button">
            </form>
        </div>
    </div>
    <script>

                    
    function passwordVisibility(pas){
        if(pas == 1)
            var passwordInput = document.getElementById("parola");
        else var passwordInput = document.getElementById("resparola");
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
        var inputNume = document.getElementById('nume');
        var inputEmail = document.getElementById('adresa');
        var inputParola = document.getElementById('parola');
        var inputResparola = document.getElementById('resparola');

        inputNume.value = sessionStorage.getItem('nume');
        inputEmail.value = sessionStorage.getItem('adresa');
        inputParola.value = sessionStorage.getItem('parola');
        inputResparola.value = sessionStorage.getItem('resparola');

        inputNume.addEventListener('input', function(){
            sessionStorage.setItem('nume', inputNume.value);
        });
        inputEmail.addEventListener('input', function(){
            sessionStorage.setItem('adresa', inputEmail.value);
        });
        inputParola.addEventListener('input', function(){
            sessionStorage.setItem('parola', inputParola.value);
        });
        inputResparola.addEventListener('input', function(){
            sessionStorage.setItem('resparola', inputResparola.value);
        })

    })

    </script>
</body>
</html>