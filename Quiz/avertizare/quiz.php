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
                <h3>Ce este obligat conducatorul auto sa faca la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/curba-deosebit-de-periculoasa.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Nu are nicio obligatie
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1"  valid = "valid">
                    <span>
                        Este obligat sa reduca viteza
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Nu poate efectua depasiri, dar poate efectua celelalte manevre (intoarcere, oprire, etc)                    
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Indicatorul din imagine, se instaleaza pe sectorul de drum unde panta depaseste:  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/coborare-periculoasa.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2"  valid="valid">
                    <span>
                        7%                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        10%                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                       3%
                    </div>
            </div>

            <div class="question">
                <h3>Din ce motiv este interzisa intoarcerea la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/acostament-periculos.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3"  >
                    <span>
                        Drumul este ingust
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Soliditatea drumului nu permite efectuarea manevrei
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Intoarcerea este permisa
                    </div>
            </div>

            <div class="question">
                <h3>Ce ii este recomandat conducatorului auto sa faca la intalnirea urmatorului indicator?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/drum-alunecos.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Sa emita semnale sonore cand intalneste un vehicul din sens opus
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Sa mareasca viteza pentru a parasi cat mai repede acest sector de drum
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4"  valid = "valid">
                    <span>
                       Sa nu bruscheze volanul
                    </div>
            </div>

            <div class="question">
                <h3>Ce obligatii are conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/copii.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                       Sa reduca viteza sub 30km/h in localitate si sub 50km/h in afara ei, intre orele 07:00-22:00.
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Nu are nicio obligatie, dar ii este recomandat sa sporeasca atentia
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Nu are nicio obligatie, deoarece indicatorul se adreseaza pietonilor
                    </div>
            </div>

            <div class="question">
                <h3>La intalnirea acestui indicator, in ce conditii sunt interzise toate manevrele?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/curba-la-stanga.jpg" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                       Intotdeauna
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6"valid = "valid">
                    <span>
                        Doar daca vizibilitatea este sub 50m
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Sunt permise toate manevrele deoarece curba nu este una periculoasa
                    </div>
            </div>

            <div class="question">
                <h3>Care este numarul minim de astfel de panouri care se instaleaza inaintea unei curbe deosebit de periculoase?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/panour-succesive.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a7" > 
                    <span>
                        1
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        6                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7" valid = "valid">
                    <span>
                        3
                    </div>
            </div>

            <div class="question">
                <h3>Care manevra este permisa in contextul acestui indicator?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/drum-ingustat-ambele-parti.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8"  >
                    <span>
                        Intoarcere
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8"  valid = "valid">
                    <span>
                       Depasirea
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                       Mersul inapoi
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/drum-aglomerat.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9" valid = "valid">
                    <span>
                        Traficul din zona este intens
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        O zona unde vehiculele pot fi parcate 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" >
                    <span>
                       Depasirea este interzisa
                    </div>
            </div>

            <div class="question">
                <h3>La ce distanta, inaintea unui tunel este amplasat acest indicator? <br>
                    <img src="../../Mediu/categorii/avertizare/semne/tunel.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                       200-300m                
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        100-200m
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10" valid="valid">
                    <span>
                        50-100m
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/iesire-chei.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a11" valid = "valid">
                    <span>
                        Iesire spre un chei sau mal abrupt
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Un pod mobil
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Un acostament periculos
                    </div>
            </div>

            <div class="question">
                <h3>Care sunt riscurile prezente la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/improscare-piatra.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Nu exista riscuri, indicatorul semnalizeaza o lucrare in desfasurare                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12"  valid = "valid">
                    <span>
                       Pietrisul de pe partea carosabila poate fi aruncat de rotile vehiculului catre ceilalti participanti la trafic
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Caderi de pietre                
                    </div>
            </div>

            <div class="question">
                <h3>Unde se intalneste, cel mai des, acest indicator? <br>
                    <img src="../../Mediu/categorii/avertizare/semne/caderi-pietre.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                        Pe orice sector de drum unde exista risc de improscare cu pietris
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                        In zonele cu multa vegetatie          
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13"  valid = "valid">
                    <span>
                       In zonele montane
                    </div>
            </div>

            <div class="question">
                <h3>Care sunt recomandarile pentru conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/biciclisti.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a14" valid = "valid">
                    <span>
                       Sa reduca preventiv viteza si sa sporeasca atentia                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14" >
                    <span>
                        Nu exista recomandari, indicatorul se adreseaza biciclistilor
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14">
                    <span>
                        Sa opreasca si sa acorde prioritate ori de cate ori intalneste un biciclist                 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/avertizare/semne/circulatie-ambele-sensuri.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Sfarsitul drumului cu sens unic               
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Circulatie interzisa in ambele sensuri 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15" valid = "valid">
                    <span>
                        Circulatie in ambele sensuri                 
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