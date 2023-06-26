<?php 
    include("../../php/verifyConnection.php");
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz</title>
</head>
<body>
<?php $userSession = UserSession::getInstance(); if($userSession->isConnected() == 1): ?>
    <div class="box">
        <div class="header">
            <span>Raspunsuri corecte: <span id="scor">0</span></span>
            <span>Timp: <span id="countdown">0</span>/20</span>
        </div>
        <hr>
        <div class="body">
            <div class="question active">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/palete_semnalizare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Semafor mobil
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1"  valid = "valid">
                    <span>
                        Palet de semnalizare 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Fanion de semnalizare                      
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/fanion_semnalizare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2" valid="valid">
                    <span>
                        Fanion de semnalizare 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Barieră normală
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" >
                    <span>
                        Fanioane pentru accesul interzis si prioritate.
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/baliza_bidirectionala.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Baliză bidirecțională 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Baliză tip jalon
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Barieră bidirecțională
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/bariera_bidirectionala.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Baliză bidirecțională
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Barieră normală
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4"  valid = "valid">
                    <span>
                        Barieră bidirecțională 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/semafor_mobil.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Balize cuplate cu lămpi de lumină galbenă intermitentă
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Semafor mobil 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" >
                    <span>
                        Lampă cu lumină galbenă intermitentă

                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/ghirlanda_polietilena.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                        Ghirlandă polietilenă sau lanț 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Barieră bidirecțională
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" >
                    <span>
                        Barieră normală
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/con_dirijare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Barieră bidirecțională
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Barieră normală 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7"  valid = "valid">
                    <span>
                        Con de dirijare 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/lampa_lumina_galbena.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8"  valid = "valid">
                    <span>
                        Lampă cu lumină galbenă intermitentă 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                        Balize cuplate cu lămpi de lumină galbenă intermitentă
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                        Semafor mobil
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/baliza_directionala_ocolire_dreapta.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Baliză direcțională care indică ocolirea obstacolului prin stânga
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" valid = "valid">
                    <span>
                        Baliză direcțională care indică ocolirea obstacolului prin dreapta 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Baliză tip jalon
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/balize_jalon.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Baliză bidirecțională
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Con de dirijare
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10" valid = "valid">
                    <span>
                        Baliză tip jalon
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/bariera.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Barieră bidirecțională 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Ghirlandă polietilenă sau lanț
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11" valid = "valid">
                    <span>
                        Barieră normală 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/baliza_directionala_ocolire_stanga.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Baliză direcțională care indică ocolirea obstacolului prin dreapta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12"  valid = "valid">
                    <span>
                        Baliză direcțională care indică ocolirea obstacolului prin stânga 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Baliză bidirecțională
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/baliza_bidirectionala.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a13" valid = "valid">
                    <span>
                        Baliză bidirecțională 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13" >
                    <span>
                        Baliză direcțională care indică ocolirea obstacolului prin stânga 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                        Baliză direcțională care indică ocolirea obstacolului prin dreapta
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MijloaceSemnalizareLucrari/semne/baliza_cu_lampi.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a14">
                    <span>
                        Fanioane de semnalizare
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14" >
                    <span>
                        Lampă cu lumină galbenă intermitentă 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14"  valid = "valid">
                    <span>
                        Balize cuplate cu lămpi de lumină galbenă intermitentă 
                    </div>
            </div>

            <div class="question">
                <h3>La acest quiz ai obtinut: <span id="totalScore">1</span> puncte</h3>
                <a href="../quiz.php" rel="nofollow">Apasa aici pentru a merge la lista cu quiz-uri</a>
            </div>

        </div>
        
        <div class="footer">
            <span class="b1" id="skip">Skip</span>
        </div>

    </div>
    <?php else: ?>
         <p style="font-size: 5vw; color: red;">Nu esti conectat</p>
    <?php endif;?>

   <script src="script.js"></script>
</body>
</html>