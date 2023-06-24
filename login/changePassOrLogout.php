<?php
include("../php/verifyConnection.php");
$userSession = UserSession::getInstance();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Contul tau</title>
</head>

<body>
    <div class="split left-div">
        <div class="centered-content">
            <i class="fa fa-user-circle user-icon"></i>
            <p><b>Detaliile contului tau</b></p>
            <hr>
            <p id="numeCont"></p>
            <p id="emailCont"></p>
            <p id="puncteCont"></p>
            <p id="dataCont"></p>
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

                    if (isset($_GET['errors'])) {
                        $erori = urldecode($_GET['errors']);
                        $errors = json_decode($erori, true);
                        foreach ($errors as $error)
                            echo '<p><i class="fa fa-exclamation-triangle"></i>' . $error . '</p>';
                    }

                    ?>
                </div>
                <div>
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" id="adresa" name="adresa" placeholder="Email" class="form_input"><i
                        class="fa fa-envelope icon"></i><br>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="password" id="oldPass" name="oldPass" placeholder="Parola actuala" class="form_input">
                    <i class="fa fa-eye icon" id="showPassword" onclick="passwordVisibility(1)"></i><br>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="password" id="newPass" name="newPass" placeholder="Parola noua" class="form_input"> <i
                        class="fa fa-eye icon" id="showPassword" onclick="passwordVisibility(2)"></i><br>
                </div>
                <div>
                    <i class="fa fa-key icon"></i>
                    <input type="password" id="resPass" name="resPass" placeholder="Rescrie parola noua"
                        class="form_input"> <i class="fa fa-eye icon" id="showPassword"
                        onclick="passwordVisibility(3)"></i><br>
                </div>
                </label>
                <input type="submit" name="submit" id="submit" value="Schimba parola" class="form_button"><br>

            </form>

        </div>
    </div>
    <script>
        function passwordVisibility(pas) {
            if (pas == 1)
                var passwordInput = document.getElementById("oldPass");
            else if(pas == 2) var passwordInput = document.getElementById("newPass");
            else var passwordInput = document.getElementById("resPass");
            var toggle = document.getElementById("showPassword");

            if (passwordInput.type == "password") {
                passwordInput.type = "text";
            }
            else {
                passwordInput.type = "password";
            }
        }

        //stocarea datelor (email ,parola, etc) in sesiunea curenta
        document.addEventListener('DOMContentLoaded', function () {
            var inputEmail = document.getElementById('adresa');
            var inputParola = document.getElementById('oldPass');
            var inputResparola = document.getElementById('resPass');
            var inputNewPass = document.getElementById('newPass');

            inputEmail.value = sessionStorage.getItem('adresa');
            inputParola.value = sessionStorage.getItem('oldPass');
            inputResparola.value = sessionStorage.getItem('resPass');
            inputNewPass.value = sessionStorage.getItem('newPass');

            inputEmail.addEventListener('input', function () {
                sessionStorage.setItem('adresa', inputEmail.value);
            });
            inputParola.addEventListener('input', function () {
                sessionStorage.setItem('oldPass', inputParola.value);
            });
            inputResparola.addEventListener('input', function () {
                sessionStorage.setItem('resPass', inputResparola.value);
            })
            inputNewPass.addEventListener('input', function () {
                sessionStorage.setItem('newPass', inputNewPass.value);
            })

            //apasarea butonului pentru logout
            var logoutButton = document.getElementById('logoutBtn');
            logoutButton.addEventListener('click', function () {
                if (<?php echo $userSession->isConnected() ?> == 1) //request pentru logout
                    fetch('/api/logout',
                        {
                            method: 'GET'
                        })
                        .then(function (response) {
                            if (response.ok) {
                                window.location.href = 'login.php';
                            }
                            else {
                                throw new Error('Logout failed');
                            }
                        })
                        .catch(function (error) {
                            console.log('Logout failed: ', error);
                        })
            })
        })

        window.onload = function () {
            const numeCont = document.getElementById('numeCont');
            const emailCont = document.getElementById('emailCont');
            const puncteCont = document.getElementById('puncteCont');
            const dataCont = document.getElementById('dataCont');

            if (<?php echo $userSession->isConnected() ?> == 1) {
                //request pentru a afisa datele contului (email, puncte, etc);
                fetch("/api/cont")
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        numeCont.innerHTML = "Nume: " + data.nume;
                        emailCont.innerHTML = "Email: " + data.email;
                        puncteCont.innerHTML = "Puncte: " + data.punctaj;
                        dataCont.innerHTML = "Data crearii contului: " + data.created_at;
                    })
                    .catch(error => {
                        console.error('Error: ', error);
                    })
            }
            else {
                numeCont.innerHTML = "Nume: Nu esti conectat"
                emailCont.innerHTML = "Email: Nu esti conectat";
                puncteCont.innerHTML = "Puncte: Nu esti conectat";
                dataCont.innerHTML = "Data crearii contului: Nu esti conectat";
            }
        }

    </script>
</body>

</html>