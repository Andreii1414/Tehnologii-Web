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
            <p class="no_acc"><b>Vrei sa te deloghezi?</b></p>
            <button class="sign_up_btn" id="logoutBtn"><b>Logout</b></button>
        </div>

        <div class="centered-content">
            <form method="post" class="form_login" id="form_login" action="/api/changePass">
                <h2 class="form_text textStyle">Schimba parola</h2>
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
                    <input type="email" id="adresa" name="adresa" placeholder="Email" 
                    class="form_input"
                    ><br>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="password" id="oldPass" name="oldPass" placeholder="Parola actuala"
                    class="form_input"><br>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="password" id="newPass" name="newPass" placeholder="Parola noua"
                    class="form_input"><br>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="password" id="resPass" name="resPass" placeholder="Rescrie parola noua"
                    class="form_input"><br>
                </div>
                </label>
                    <input type="submit" name="submit" id="submit" value="Schimba parola" class="form_button"><br>

            </form>
            
        </div>
    </div>
    <script>

document.addEventListener('DOMContentLoaded', function(){
    var inputEmail = document.getElementById('adresa');
    var inputParola = document.getElementById('oldPass');
    var inputResparola = document.getElementById('resPass');
    var inputNewPass = document.getElementById('newPass');

    inputEmail.value = sessionStorage.getItem('adresa');
    inputParola.value = sessionStorage.getItem('oldPass');
    inputResparola.value = sessionStorage.getItem('resPass');
    inputNewPass.value =sessionStorage.getItem('newPass');

    inputEmail.addEventListener('input', function(){
        sessionStorage.setItem('adresa', inputEmail.value);
    });
    inputParola.addEventListener('input', function(){
        sessionStorage.setItem('oldPass', inputParola.value);
    });
    inputResparola.addEventListener('input', function(){
        sessionStorage.setItem('resPass', inputResparola.value);
    })
    inputNewPass.addEventListener('input', function(){
        sessionStorage.setItem('newPass', inputNewPass.value);
    })

    var logoutButton = document.getElementById('logoutBtn');
    logoutButton.addEventListener('click', function(){
        fetch('/api/logout',
        {
            method: 'GET'
        })
        .then(function(response){
            if(response.ok)
            {
                window.location.href='login.php';
            }
            else{
                throw new Error('Logout failed');   
            }
        })
        .catch(function(error){
            console.log('Logout failed: ', error);
        })
    })
})

</script>
</body>
</html>