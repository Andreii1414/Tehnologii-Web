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
                <h3>Ce trebuie sa faca conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/prioritate/semne/prioritate-fata-de-sens-opus.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Sa acorde prioritate vehiculelor care circula din sens opus
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1" valid = "valid">
                    <span>
                        Sa circule in continuare, deoarece are prioritate fata de vehiculele din sens opus
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1" >
                    <span>
                       Sa evite depasirea, deoarece este interzisa                  
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/prioritate/semne/prioritate.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2"  valid="valid">
                    <span>
                       Drum cu prioritate                 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Sfarsitul drumului cu prioritate.                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Cedeaza trecerea   
                    </div>
            </div>

            <div class="question">
                <h3>Unde trebuie sa opreasca conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/prioritate/semne/stop.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        In locul cu vizibilitate maxima, fara a depasi coltul intersectiei
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Nu este obligat sa opreasca, ci trebuie doar sa acorde prioritate celorlalti participanti la trafic
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        In mijlocul intersectiei in care este instalat, pentru a avea vizibilitate
                    </div>
            </div>

            <div class="question">
                <h3>Care manevra este permisa la intalnirea urmatorului indicator?  <br>
                    <img src="../../Mediu/categorii/prioritate/semne/prioritate-sens-opus.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Mersul inapoi
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Intoarcerea
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4"  valid = "valid">
                    <span>
                       Depasirea
                    </div>
            </div>

            <div class="question">
                <h3>Alege varianta corecta referitoare la acest indicator:  <br>
                    <img src="../../Mediu/categorii/prioritate/semne/cedeaza.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                       La intalnirea acestuia, conducatorul auto trebuie sa circule cu o viteza de cel mult 30km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5"  valid = "valid">
                    <span>
                        La intalnirea acestuia, conducatorul auto trebuie sa reduca viteza si sa acorde prioritate vehiculelor care circula pe drumul prioritar.
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                       La intalnirea acestuia, conducatorul auto trebuie sa opreasca in locul cu vizibilitate maxima si sa acorde prioritate.
                    </div>
            </div>

            <div class="question">
                <h3>Acest indicator informeaza conducatorul auto cu privire la faptul ca in urmatoarea intersectie in care va patrunde:  <br>
                    <img src="../../Mediu/categorii/prioritate/semne/sfarsit-prioritate.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                       Va trebui sa acorde prioritate tuturor vehiculelor
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Drumul pe care circula este un drum cu prioritate
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" valid="valid">
                    <span>
                        Toate drumurile vor fi din aceeasi categorie
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