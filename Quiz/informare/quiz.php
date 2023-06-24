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
                <h3>Ce manevra este interzisa la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Sens-unic.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Mersul inapoi
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Depasirea
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1"  valid = "valid">
                    <span>
                        Intoarcerea
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Care este viteza minima cu care trebuie sa circule conducatorii auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Autostrada.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2" >
                    <span>
                        70km/h         
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        30km/h                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid="valid">
                    <span>
                       50km/h
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator? <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Pasaj-subteran-pentru-pietoni.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Pasaj subteran pentru pietoni
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3" >
                    <span>
                        Pasarela pentru pietoni
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Coborare catre o statie de metrou
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Loc-pentru-popas.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Teren pentru camping
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid">
                    <span>
                        Loc pentru popas
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                      Loc de joaca pentru copii
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Zonă-de-pescuit.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                       Zona de pescuit
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Zona in apropierea careia se afla un restaurant cu specificul aratat pe indicator
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Zona in care pescuitul este interzis
                    </div>
            </div>

            <div class="question">
                <h3>La intalnirea acestui indicator:  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/viteza-recomandata.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                       Viteza minima este de 60km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" >
                    <span>
                        Viteza maxima este de 60km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                        Viteza recomandata este de 60km/h
                    </div>
            </div>

            <div class="question">
                <h3>Adevarat sau fals: Pe autostrada, este interzisa imobilizarea voluntara pe banda de urgenta  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a7" valid="valid"> 
                    <span>
                        Adevarat
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Fals                
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Urmatorul indicator se instaleaza:  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Stație-de-autobuz.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8"  >
                    <span>
                        Pe un sector de drum unde circula autobuze
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8" >
                    <span>
                       Pe un sector de drum unde este interzisa circulatia autobuzelor
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8" valid = "valid">
                    <span>
                       In statiile de autobuz
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Teren-pentru-camping-(tabără-turistică).png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Teren pentru caravane si camping
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9"  valid = "valid">
                    <span>
                        Teren pentru camping
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" >
                    <span>
                       Cabana pentru turisti
                    </div>
            </div>

            <div class="question">
                <h3>Care este semnificatia urmatorului indicator? <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/service-auto.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10" valid="valid">
                    <span>
                       Service Auto              
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Vulcanizare
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Lucrari pe partea carosabila
                    </div>
            </div>

            <div class="question">
                <h3>Adevarat sau fals: La intalnirea acestui indicator, este interzis accesul tuturor autovehiculelor  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/zona-pietonala.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Adevarat
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11" valid = "valid">
                    <span>
                        Fals
                   </span>
                </div>
            </div>

            <div class="question">
                <h3>Care este viteza maxima admisa pentru autovehicule la intrarea in zona mentionata de acest indicator?  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/zona-pietonala.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a12" valid = "valid">
                    <span>
                        5km/h                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12" >
                    <span>
                       10km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        20km/h              
                    </div>
            </div>

            <div class="question">
                <h3>Ce este obligat sa faca conducatorul auto la intalnirea acestui indicator? <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Tunel.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                       Sa circule cu o viteza de cel mult 30km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13" valid = "valid">
                    <span>
                        Sa aprinda luminile de intalnire         
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13" >
                    <span>
                        Sa isi anunte prezenta folosind mijloacele de avertizare sonora 
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Îmbarcare-pe-vagoane-platformă-de-cale-ferată.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a14">
                    <span>
                       Imbarcare pe un ferry-boat              
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14" valid = "valid">
                    <span>
                        Imbarcare pe vagoane platforma de cale ferata
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14">
                    <span>
                        Port                
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/DeInformare/semne/deinformare/Acces-internet.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Supermarket            
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Loc de joaca pentru copii
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15" valid = "valid">
                    <span>
                        Access internet                 
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