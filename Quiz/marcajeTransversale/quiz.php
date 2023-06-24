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
                    <img src="../../Mediu/categorii/MarcajeTransversale/semne/marcaj_cedeaza_trecerea.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Marcaj de oprire                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1" valid = "valid">
                    <span>
                        Marcaj de cedarea trecerii                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Marcaj de drum cu prioritate                    
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Care dintre următoarele indicatoare obligă șoferul să oprească sau să cedeze trecerea la întâlnirea indicatorului? 
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Marcaj de drum cu prioritate                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid="valid">
                    <span>
                        Marcaj de oprire                       
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid="valid">
                    <span>
                        Marcaj de cedarea trecerii                    
                     </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeTransversale/semne/benzi_rezonatoare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3"  >
                    <span>
                        Viteza maximă admisa este de 50 de km/h
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Depășirea interzisă
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3"valid = "valid">
                    <span>
                        Benzi rezonatoare din marcaj rutier  
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeTransversale/semne/marcaj_oprire.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid">
                    <span>
                          Marcaj de oprire 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Marcaj de traversare pentru biciclete 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Marcaj de drum cu prioritate
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeTransversale/semne/marcaj_traversare_pietoni.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5" >
                    <span>
                        Marcaj de traversare pentru biciclete
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Marcaje de traversare pentru pietoni  
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Marcaj de traversare pentru pietoni și biciclete
                    </div>
            </div>
            
            <div class="question">
                <h3>Ce semnificație are marcajul transversal de tip "linie stop"?  <br>

                </h3>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                        Obligă conducătorii auto să oprească înaintea marcajului
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Indică o trecere de pietoni în apropiere  
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Indică o zonă de oprire interzisă
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