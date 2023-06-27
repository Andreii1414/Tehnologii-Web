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
            <form action="/api/forgot" method="POST" class="form_login">
                <h2 class="form_text textStyle">Reseteaza parola</h2>
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
                    <input type="email" id="adresa" name="adresa" placeholder="Email" class="form_input">
                     <i class="fa fa-envelope icon"></i><br>
                </div>
                    <input type="submit" name="submit" id="submit" value="Forgot" class="form_button">

            </form>
        </div>
    </div>
    <script>
    
    document.addEventListener('DOMContentLoaded', function(){
        var inputEmail = document.getElementById('adresa');

        inputEmail.value = sessionStorage.getItem('adresa');

        inputEmail.addEventListener('input', function(){
            sessionStorage.setItem('adresa', inputEmail.value);
        });

    })

    </script>

</body>
</html>