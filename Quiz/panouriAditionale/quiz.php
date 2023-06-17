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
    <?php if($conectat == 1): ?>
    <div class="box">
        <div class="header">
            <span>Raspunsuri corecte: <span id="scor">0</span></span>
            <span>Timp: <span id="countdown">0</span>/20</span>
        </div>
        <hr>
        <div class="body">
            <div class="question active">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/panouriaditionale/semne/12.avif" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Inceputul zonei de actiune a indicatorului
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Confirmarea zonei de actiune a indicatorului
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1" valid = "valid">
                    <span>
                       Sfarsitul zonei de actiune a indicatorului                    
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Care este semnificatia urmatorului indicator?  <br>
                    <img src="../../Mediu/categorii/panouriaditionale/semne/15.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2"  valid="valid">
                    <span>
                        Parcare cu plata                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Trecere la nivel cu calea ferata                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Persoane cu handicap
                    </div>
            </div>

            <div class="question">
                <h3>Care este semnificatia urmatorului indicator?  <br>
                    <img src="../../Mediu/categorii/panouriaditionale/semne/6.jpg" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Specifica intervalul orar intre care se respecta regulile impuse de indicatorul rutier
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Specifica intervalul orar intre care NU se respecta regulile impuse de indicatorul rutier
                   </span>
                </div>
       
            </div>

            <div class="question">
                <h3>Ce arata urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/panouriaditionale/semne/25.jpg" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid">
                    <span>
                        Directia drumului cu prioritate
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Confirmarea zonei de actiune a indicatorului
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Sensul sau sensurile de circulatie pentru care este valabila semnificatia semnelor luminoase ale semaforului
                    </div>
            </div>

            <div class="question">
                <h3>Care este semnificatia urmatorului indicator?  <br>
                    <img src="../../Mediu/categorii/panouriaditionale/semne/28.jpg" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Persoane cu handicap
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Rampa pentru persoane cu handicap locomotor
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Parcare cu plata
                    </div>
            </div>

            <div class="question">
                <h3>Cine are acces pe sectorul de drum, la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/panouriaditionale/semne/21.jpg" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                       Doar autovehiculele destinate transportului de marfa
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Toate persoanele
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                        Persoanele care locuiesc in zona
                    </div>
            </div>

            <div class="question">
                <h3>La intalnirea carui panou aditional trebuie mentinuta o anumita viteza pentru a prinde verde la toate semafoarele?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a7" > 
                    <span>
                        Trecere la nivel cu calea ferata prevazuta cu instalatie de semnalizare luminoasa automata
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7" valid = "valid">
                    <span>
                        Semafoare sincronizate               
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Semafoare
                    </div>
            </div>

            <div class="question">
                <h3> Folosind care indicator poate fi mentionata distanta pana la locul la care se refera indicatorul de presemnalizare sau informare?
                </h3>
                <div class="answer">
                    <input type="radio" name="a8" valid = "valid">
                    <span>
                        Un indicator cu fundal albastru, pe care este scrisa cu alb distanta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8" >
                    <span>
                        Un indicator cu fundal albastru, pe care este scrisa cu negru distanta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                        Un indicator cu fundal verde, pe care este scrisa cu alb distanta
                    </div>
            </div>

            <div class="question">
                <h3>Distanta intre indicator si inceputul locului periculos poate fi semnalizata folosind un indicator:  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        De culoare alba, pe care este scrisa cu rosu distanta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" valid = "valid">
                    <span>
                        De culoare alba, pe care este scrisa cu negru distanta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" >
                    <span>
                        De culoare albastra, pe care este scrisa cu alb distanta
                    </div>
            </div>

            <div class="question">
                <h3>Indicatorul in forma dreptunghiulara, cu o sageata in sus, indica: <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a10" valid="valid">
                    <span>
                        Inceputul zonei de actiune a indicatorulul             
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Sfarsitul zonei de actiune a indicatorului
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Confirmarea zonei de actiune a indicatorului
                    </div>
            </div>

            <div class="question">
                <h3>Exista un singur panou aditional care specifica ca o parcare este cu plata intre anumite ore, inscrise pe panou, alaturi de pretul parcarii pe ora?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Nu
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11" valid = "valid">
                    <span>
                        Da
                   </span>
                </div>

            </div>

            <div class="question">
                <h3>Exista un panou aditional care anunta interzicerea folosirii unei treceri de pietoni intr-un anumit interval orar?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a12" valid = "valid">
                    <span>
                        Nu                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12" >
                    <span>
                        Da
                    </span>
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