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
                <h3>Atunci cand semnalul semaforului este de culoare galbena si urmeaza dupa cel de culoare verde, conducatorul auto poate patrunde in intersectie?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Nu, niciodata
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Da, deoarece nu este inca rosu
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1" valid = "valid">
                    <span>
                        Da, doar in cazul in care oprirea nu se poate realiza in conditii de siguranta                    
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Daca atunci cand se efectueaza virajul la dreapta (sau stanga) pe culoarea verde a semaforului si pietonii au de asemenea verde, ce trebuie sa faca conducatorul auto?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                       Sa isi continue deplasarea                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid="valid">
                    <span>
                        Sa acorde prioritate pietonilor                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                       Sa foloseasca mijloacele de avertizare sonora
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnificatie are lumina de culoare rosie a semaforului, atat pentru conducatorii de vehicule, cat si pentru pietoni?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Permite vehiculelor sa vireze la dreapta, cu respectarea prioritatii
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Ii obliga pe conducatori sa opreasca, iar pe pietoni sa traverseze cu prudenta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Ii obliga atat pe conducatori, cat si pe pietoni sa se opreasca;
                    </div>
            </div>

            <div class="question">
                <h3>Semnalul galben intermitent al semaforului:  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid">
                    <span>
                        Obliga conducatorii vehiculelor sa reduca viteza si sa circule respectand regulile de circulatie aplicabile in acea intersectie
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Anunta aparitia semnalului rosu
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                       Interzice intrarea in intersectie
                    </div>
            </div>

            <div class="question">
                <h3>Daca conducatorul auto este incadrat pentru a merge inainte iar semaforul indica verde si o sageata neagra spre stanga, cum trebuie sa procedeze conducatorul auto:  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Poate patrunde in intersectie deoarece semaforul este verde
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5"  valid = "valid">
                    <span>
                        Nu poate patrunde in intersectie, deoarece semnalul nu i se adreseaza
                    </div>
            </div>

            <div class="question">
                <h3>Cate lentile are semaforul pentru biciclete?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                       1
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6"valid = "valid">
                    <span>
                        2
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        3
                    </div>
            </div>

            <div class="question">
                <h3>Din cate lampi este format semaforul pentru tramvaie?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a7" valid = "valid"> 
                    <span>
                        4
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        3                 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        6
                    </div>
            </div>

            <div class="question">
                <h3>Numerotam lampile de la 1 la 4 de la stanga la dreapta: La aprinderea caror lampi tramvaiul poate vira la stanga?  <br>
                    <img src="../../Mediu/categorii/semnaleluminoase/semne/semafor-tramvai.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8"  >
                    <span>
                        2 si 4
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8" >
                    <span>
                       1 si 2
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8" valid = "valid">
                    <span>
                       1 si 4
                    </div>
            </div>

            <div class="question">
                <h3>Numerotam lampile de la 1 la 4 de la stanga la dreapta: La aprinderea caror lampi tramvaiul poate merge inainte?  <br>
                    <img src="../../Mediu/categorii/semnaleluminoase/semne/semafor-tramvai.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9" valid = "valid">
                    <span>
                        2 si 4
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        1 si 2 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" >
                    <span>
                       2 si 3
                    </div>
            </div>

            <div class="question">
                <h3>Ce sunt obligati sa faca conducatorii auto la intalnirea urmatorului semafor? <br>
                    <img src="../../Mediu/categorii/semnaleluminoase/semne/semafor-avertizare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                       Nimic, semaforul se adreseaza pietonilor                
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10" valid="valid">
                    <span>
                        Sa reduca viteza
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Nu au nicio obligatie, dar le este recomandata sporirea atentiei
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