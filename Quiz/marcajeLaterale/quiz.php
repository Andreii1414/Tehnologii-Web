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
                <h3>Care imagini reprezintă marcaje pe ziduri de sprijin și pe infrastructurile pasajelor inferioare?<br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marca-ziduri.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaj-ziduri2.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Niciuna
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Doar a doua imagine                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1"  valid = "valid">
                    <span>
                        Ambele imagini                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                       Doar prima imagine                    
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Care imagini reprezintă marcaje pe ziduri de sprijin și pe infrastructurile pasajelor inferioare?   <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaj-inaltime.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaj-ziduri2.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Doar prima imagine 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Ambele imagini 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Niciuna
                </div>
                <div class="answer">
                   <input type="radio" name="a2" valid = "valid">
                   <span>
                      Doar a doua imagine  
                </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaj-coronamente.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Marcaje pe borduri
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3"  valid = "valid">
                    <span>
                        Marcaje pe coronamentele podețelor  
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Marcaje pe parapete
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaje-borduri.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4"  >
                    <span>
                        Marcaje pe parapete
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4"> 
                    <span>
                        Marcaje pe coronamentele podețelor
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid">
                    <span>
                        Marcaje pe borduri  
                    </div>
            </div>



            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/sageti-schimbare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5" >
                    <span>
                        Marcaje inscripționate pe partea carosabilă  
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Săgeți de schimbare a benzii de circulație 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Săgeți de revenire pe banda aferentă sensului de mers                   
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaje-depasire.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Curba deosebit de periculoasă
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Marcaj de reducere a vitezei înaintea unor curbe deosebit de periculoase
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                        Marcaje de interzicere a depășirii în unele curbe deosebit de periculoase  
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/sageti-revenire.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a7"> 
                    <span>
                        Săgeți de schimbare a benzii de circulație
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7"  valid = "valid">
                    <span>
                        Săgeți de revenire pe banda aferentă sensului de mers                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Marcaje inscripționate pe partea carosabilă
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaj-inaltime.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8"  >
                    <span>
                        Marcaje pe infrastructurile pasajelor inferioare

                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                        Marcaje pe ziduri de sprijin și pe infrastructurile pasajelor inferioare 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8" valid = "valid">
                    <span>
                        Marcaje la pasaje care nu au asigurat gabaritul de înălțime                     
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaj-parapet.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9" valid = "valid">
                    <span>
                        Marcaje pe parapete                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Marcaje pe borduri                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Marcaje pe coronamentele podețelor
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaje-reducere.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Marcaje de interzicere a depășirii în unele curbe deosebit de periculoase                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Curba deosebit de periculoasă 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10"  valid = "valid">
                    <span>
                        Marcaj de reducere a vitezei înaintea unor curbe deosebit de periculoase 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/marcajelaterale/semne/marcaje-inscrp.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a11" valid = "valid">
                    <span>
                        Marcaje inscripționate pe partea carosabilă                      
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Săgeți de schimbare a benzii de circulație 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11" >
                    <span>
                        Săgeți de revenire pe banda aferentă sensului de mers 
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