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
                    <img src="../../Mediu/categorii/marcajediverse/semne/statie.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                     Locuri de parcare destinate taxiurilor

                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1"  valid = "valid">
                    <span>
                        Stație autovehicule de transport în comun                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Locuri de parcare in zig-zag                    
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajediverse/semne/marcaj-ghidare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Marcaj pentru spații înguste 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Marcaj de ghidare la traversarea unei intersecții 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid="valid">
                    <span>
                        Marcaj de ghidare în intersecție
                    </div>
            </div>

            <div class="question">
                <h3>Care dintre urmatoarele imagini reprezinta indicatoare pentru locuri de parcare?  <br>
                    <img src="../../Mediu/categorii/marcajediverse/semne/parcare.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/marcajediverse/semne/parcare2.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/marcajediverse/semne/interzis-stationare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3"  valid = "valid">
                    <span>
                        1 si 2
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Toate 3 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        1 si 3 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajediverse/semne/interzis-stationare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4"  >
                    <span>
                        Locuri de parcare in zig-zag
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid"> 
                    <span>
                        Interzicerea staționării
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Locuri de parcare paralele cu acostamentul 
                    </div>
            </div>



            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajediverse/semne/marcaj-o-banda.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Marcaj la îngustarea drumului cu o bandă de sens  
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Marcaj pe drum cu trei benzi pentru alocarea alternativă a două benzi pentru unul sau celălat sens de circulație
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Spații închise circulației                    
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajediverse/semne/marcaj-ghidare-traversare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Marcaj de ghidare în intersecție
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6"valid = "valid">
                    <span>
                        Marcaj de ghidare la traversarea unei intersecții 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Marcaj la apropierea unei intersecții 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajediverse/semne/marcaj-rezervata.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a7"  valid = "valid"> 
                    <span>
                        Marcajul benzii rezervate circulației autovehiculelor de transport persoane 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Stație autovehicule de transport în comun                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Interzicerea staționării
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajediverse/semne/marcaj-trei-benzi.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8"  >
                    <span>
                        Spații închise circulației
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                        Marcaj la îngustarea drumului cu o bandă de sens 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8" valid = "valid">
                    <span>
                        Marcaj pe drum cu trei benzi pentru alocarea alternativă a două benzi pentru unul sau celălat sens de circulație 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajediverse/semne/marcaj-inguste.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Marcaj de ghidare în intersecție                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" valid = "valid">
                    <span>
                        Marcaj pentru spații înguste                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Marcaj de ghidare la traversarea unei intersecții
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajediverse/semne/spatii-inchise.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10" valid = "valid">
                    <span>
                        Spații închise circulației                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Marcaj la îngustarea drumului cu o bandă de sens 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Marcaj pe drum cu trei benzi pentru alocarea alternativă a două benzi pentru unul sau celălat sens de circulație 
                    </div>
            </div>

            <div class="question">
                <h3>La acest quiz ai obtinut: <span id="totalScore">1</span> puncte</h3>
                <a href="../quiz.php">Apasa aici pentru a merge la lista cu quiz-uri</a>
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