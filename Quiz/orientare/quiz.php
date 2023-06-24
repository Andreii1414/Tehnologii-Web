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
                    <h3>Ce semnifica urmatorul indicator?  <br>
                        <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Drum-național.png  " alt="img"
                        class="imagine">
                    </h3>
                    <div class="answer">
                        <input type="radio" name="a1">
                        <span>
                            Drum judetean
                        </span>
                    </div>
                    <div class="answer">
                        <input type="radio" name="a1">
                        <span>
                           Drum comunal
                        </span>
                    </div>
                    <div class="answer">
                        <input type="radio" name="a1" valid = "valid">
                        <span>
                            Drum national                   
                        </span>
                    </div>
                </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Intrare-în-localitate.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2" >
                    <span>
                        Iesire din localitate                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2"  valid="valid">
                    <span>
                        Intrare in localitate                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Urmeaza localitatea:...
                    </div>
            </div>

            <div class="question">
                <h3>La cati metri de intersectia de drumuri este amplasat urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Presemnalizarea-direcțiilor-la-o-intersecție-de-drumuri-din-afara-localității.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3"  >
                    <span>
                        50-100m
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3"  valid = "valid">
                    <span>
                        100-200m
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        500m
                    </div>
            </div>

            <div class="question">
                <h3>Ce este obligat sa faca un vehicul care depaseste 7 tone la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Presemnalizarea-traseului-de-urmat-în-cazul-unei-restricții-de-circulație.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Sa mearga pe drumul direct (cel pe care este prezent indicatorul care are inscriptionat 7,0t), deoarece indicatorul doar ii recomanda o ruta ocolitoare
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4"  valid = "valid"> 
                    <span>
                        Sa urmeze ruta ocolitoare (prin dreapta)
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Sa mearga pe drumul direct (cel pe care este prezent indicatorul care are inscriptionat 7,0t), deoarece indicatorul ii recomanda sa mearga pe acest drum
                    </div>
            </div>

            <div class="question">
                <h3>Unde poate fi intalnit urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Presemnalizare-pe-autostradă-pentru-spațiu-de-servicii.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                       Pe toate categoriile de drumuri
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Doar pe drumurile comunale
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Pe autostrada
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Bandă-de-circulație-rezervată-autovehiculelor-de-transport-public-de-persoane.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                        Banda rezervata circulatiei de transport public de persoane
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Linie pentru tramvai
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Permiterea autobuzelor sa efectueze intoarcerea
                    </div>
            </div>

            <div class="question">
                <h3>Cum trebuie sa procedeze conducatorul auto la intalnirea acestui indicator, daca vrea sa efectueze virajul la dreapta?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Presemnalizarea-traseului-de-urmat-în-vederea-efectuării-virajului-la-stânga.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a7" valid = "valid"> 
                    <span>
                        Urmeaza trasesul indicat de sageata cu negru
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Merge pe directia inainte si se incadreaza pentru a efectua virajul la stanga               
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Drum-fără-ieșire.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8"  valid = "valid">
                    <span>
                        Drum fara iesire
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8" >
                    <span>
                       Interzis mersul inainte
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                       Obligatoriu virajul la dreapta
                    </div>
            </div>

            <div class="question">
                <h3>Unde se va incadra conducatorul auto, daca in intersectie, va dori sa efectueze virajul la dreapta?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Selectarea-circulației-pe-direcții-de-mers-în-apropierea-intersecției.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Pe banda numarul 2 (cea mai din stanga)
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Pe oricare dintre benzi
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" valid="valid">
                    <span>
                       Pe banda numarul 1 (cea mai din dreapta)
                    </div>
            </div>

            <div class="question">
                <h3>Care afirmatie este corecta in legatura cu urmatorul indicator? <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Bandă-destinată-circulației-vehiculelor-lente.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                       Pe banda cea mai din stanga, circula vehicule cu o viteza de cel putin 30km/h              
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10"  valid="valid">
                    <span>
                        Pe banda cea mai din stanga, circula vehicule cu o viteza de cel mult 30km/h   
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        In 30m, banda cea mai din stanga se va termina
                    </div>
            </div>

            <div class="question">
                <h3>Care afirmatie este corecta in legatura cu urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Viteză-minimă-obligatorie-pentru-o-bandă-de-circulație.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Viteza maxima de circulatie pentru banda din stanga este de 50km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11" valid = "valid">
                    <span>
                        Viteza minima obligatorie pentru banda din stanga este de 50km/h
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Peste 50m, banda din stanga se va termina
                    </div>
            </div>

            <div class="question">
                <h3>Care este viteza maxima cu care se poate deplasa un autovehicul daca circula pe prima banda de circulatie, in contextul urmatorului indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Limitare-de-viteză-pentru-diferite-benzi-de-circulație.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        80km/h                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        100km/h
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12" valid="valid">
                    <span>
                        50km/h               
                    </div>
            </div>

            <div class="question">
                <h3>Indicatorul urmator are rolul de a informa: <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Direcția-de-urmat-pentru-autovehiculele-destinate-transportului-de-mărfuri.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                        Toate autovehiculele
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13" valid = "valid">
                    <span>
                        Autovehiculelor destinate transportului de marfuri        
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                       Autovehiculele cu o lungime mai mare de 10m
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Drum-judetean.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a14" valid = "valid">
                    <span>
                       Drum judetean                
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14" >
                    <span>
                        Drum comunal
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14">
                    <span>
                        Drum national               
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/DeOrientare/semne/deOrientare/Drum-deschis-traficului-internațional.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Drum judetean              
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15"  valid = "valid">
                    <span>
                        Drum deschis traficului international
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Drum comunal                 
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