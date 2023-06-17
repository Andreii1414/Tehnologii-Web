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
                <h3>Alege varianta corecta dintre urmatoarele privind urmatorul indicator:  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/interzis-pietoni.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Interzice pietonilor sa foloseasca aceas partea a trotuarului doar intre orele 07:00 - 22:00
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Permite pietonilor sa circule pe partea carosabila
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1"  valid = "valid">
                    <span>
                       Se poate instala in apropierea unei unitati militare                  
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce trebuie sa faca conducatorul auto la intalnirea urmatorului indicator?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/interzis-distanta.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                       Sa circule la o distanta de MAXIM 70 de m fata de vehiculul din fata lui                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Sa se apropie de vehiculul din fata lui si sa il depaseasca cat mai repede                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2"  valid="valid">
                    <span>
                        Sa circule la o distanta de MINIM 70 de m fata de vehiculul din fata lui    
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/interzis-vehicule-impinse.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3" >
                    <span>
                        Accesul interzis vehiculelor cu tractiune animala
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Accesul interzis vehiculelor impinse sau trase cu mana
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Accesul interzis tractoarelor
                    </div>
            </div>

            <div class="question">
                <h3>Ce interzice urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/interzis-intoarcere.png" alt="img"
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
                        Intoarcerea in urmatorul sens giratoriu
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4"  valid = "valid">
                    <span>
                       Intoarcere
                    </div>
            </div>

            <div class="question">
                <h3>Ce obligatii are conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/limitare-viteza.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                       Sa circule cu o viteza de cel putin 40km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5"  valid = "valid">
                    <span>
                        Sa circule cu o viteza de cel mult 40km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Nu are nicio obligatie, indicatorul este insotit de un panou aditional si specifica distanta pana la un anumit punct
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/sfarsit-restrictii.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                       Sfarsitul tuturor restrictiilor
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Doar sfarsitul restrictiei de a depasi
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Doar sfarsitul limitarii de viteza
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnificatie are urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/stationare-interzisa.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a7" valid = "valid"> 
                    <span>
                        Stationare interzisa
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Oprire interzisa                
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Stationare alternanta
                    </div>
            </div>

            <div class="question">
                <h3>Ce trebuie sa faca conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/limitare-30.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8"  >
                    <span>
                        Sa circule cu o viteza de cel putin 30km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8"  valid = "valid">
                    <span>
                       Sa circule cu o viteza de cel mult 30km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                       Sa circule cu o viteza cu maxim 30km/h peste cea admisa pe acel sector de drum
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/interzis-marfuri-periculoase.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Accesul interzis vehiculelor care transporta orice fel de marfuri
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Accesul interzis vehiculelor care transporta transporta substante explozive sau usor inflamabile
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" valid = "valid">
                    <span>
                        Accesul interzis vehiculelor care transporta marfuri periculoase
                    </div>
            </div>

            <div class="question">
                <h3>Caror vehicule interzice accesul urmatorul indicator? <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/acces-interzis.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10" valid="valid">
                    <span>
                      Tuturor vehiculelor               
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Doar vehiculelor cu tractiune animala
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Doar bicicletelor
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/interzis-ambele-sensuri.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Accesul interzis autovehiculelor cu exceptia motocicletelor fara atas
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11" valid = "valid">
                    <span>
                        Circulatie interzisa in ambele sensuri
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Accesul interzis autovehiculelor cu remorca, cu exceptia celor cu semiremorca sau cu remorca cu o osie
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/interzis-mopede.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Accesul interzis bicicletelor                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Accesul interzis motocicletelor
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12" valid = "valid">
                    <span>
                        Accesul interzis mopedelor               
                    </div>
            </div>

            <div class="question">
                <h3>Caror autovehicule interzice accesul urmatorul indicator? <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/interzis-ansambluri.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                        Doar autovehiculelor care transporta marfuri si au lungimea mai mare de 10 m
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13" valid = "valid">
                    <span>
                        Autovehiculelor sau ansamblurilor de vehicule cu lungimea mai mare de 10 m       
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                       Autobuzelor
                    </div>
            </div>

            <div class="question">
                <h3>Ce manevra este interzisa la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/interzis-viraj-stanga.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a14" valid = "valid">
                    <span>
                       Virajul la stanga                 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14" >
                    <span>
                       Intoarcerea
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14">
                    <span>
                        Mersul inapoi             
                    </div>
            </div>

            <div class="question">
                <h3>Alege varianta corecta referitoare la urmatorul indicator:  <br>
                    <img src="../../Mediu/categorii/interzicererestrictie/semne/oprire-interzisa.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a15" valid = "valid">
                    <span>
                        Interzice oprirea pe toata raza lui de actiune              
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Interzice stationarea pe toata raza lui de actiune
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Indica sfarsitul restrictiei de stationare                
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