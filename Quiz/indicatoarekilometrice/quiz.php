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
                    <img src="../../Mediu/categorii/IndicatoareKilometrice/semne/drum_national.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Indicator hectometric
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Drum județean
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1" valid = "valid">
                    <span>
                        Drum național                     
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/IndicatoareKilometrice/semne/drum_judetean.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                      Drum național 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Drum comunal 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid = "valid">
                    <span>
                        Drum județean 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/IndicatoareKilometrice/semne/drum_comunal.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Drum comunal 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Drum național 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Drum județean
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/IndicatoareKilometrice/semne/indicator_hectometric.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Drum european 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4"  valid = "valid">
                    <span>
                        Indicator Hectometric
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Drum județean
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnificație are un indicator kilometric cu numărul "0"?  <br>

                </h3>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Indică că se află la începutul drumului sau la începutul unei autostrăzi
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" >
                    <span>
                        Indică că se află la o distanță de 0,1 km de un punct de referință
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Indică că se află la sfârșitul drumului sau la sfârșitul unei autostrăzi
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