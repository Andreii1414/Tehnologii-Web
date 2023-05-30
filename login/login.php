<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
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
        <div class="switch" onclick="window.location.href='../home/home.html'"> 
            <p class="switch__text"> Catre Pagina Principala</p>          
        </div>
        <div class="sign_up_div">
            <p class="no_acc"><b>Nu ai inca un cont?</b></p>
            <button class="sign_up_btn" onclick = "window.location.href='signup.html'"><b>Sign up</b></button>
        </div>

        <div class="centered-content">
            <form action="/api/login" method="post" class="form_login">
                <h2 class="form_text textStyle">Logheaza-te in contul tau</h2>
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
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" id="adresa" name="adresa" placeholder="Email" class="form_input"><br>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="password" id="parola" name="parola" placeholder="Parola" class="form_input"><br>
                </div>
                <label for="connected" class="form_checkbox">
                    <input type="checkbox" name="connected" id="connected" value="Ramai conectat" class="textStyle form_cb_input">Ramai conectat
                </label><br>
                    <input type="submit" name="submit" id="submit" value="Log in" class="form_button">

            </form>
        </div>
    </div>
    <script>

    document.addEventListener('DOMContentLoaded', function(){
        var inputEmail = document.getElementById('adresa');
        var inputParola = document.getElementById('parola');

        inputEmail.value = sessionStorage.getItem('adresa');
        inputParola.value = sessionStorage.getItem('parola');

        inputEmail.addEventListener('input', function(){
            sessionStorage.setItem('adresa', inputEmail.value);
        });
        inputParola.addEventListener('input', function(){
            sessionStorage.setItem('parola', inputParola.value);
        });

    })

    </script>

</body>
</html>