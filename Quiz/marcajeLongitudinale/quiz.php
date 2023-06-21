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
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_continuu_simplu.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1" valid = "valid">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1" >
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie discontinua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua.
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua, dublata cu una discontinua. Marcaj de delimitare a partii carosabile cu linie discontinua.                    
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_discontinuu.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua, dublata cu una discontinua. Marcaj de delimitare a partii carosabile cu linie discontinua.                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua.                     </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid="valid">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie discontinua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua. 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_circulatie_reversibila.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3"  >
                    <span>
                        Marcaj la apropierea unei intersecții
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Dispoziții luminoase pentru dirijarea circulația pe benzi reversibile
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3"valid = "valid">
                    <span>
                        Marcaj pentru benzi cu circulatia reversibila 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_decelerare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Marcaje pe o bandă de accelerare
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Marcaj la apropierea unei intersecții 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4"  valid = "valid">
                    <span>
                        Marcaj pe o bandă de decelerare 
                    </div>
            </div>

            <div class="question">
                <h3>Care dintre urmatoarele marcaje nu pot fi întâlnite pe autostradă? 
                </h3>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Marcaj la apropierea unei intersecții 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Marcaje pe o bandă de accelerare
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie discontinua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua
                    </div>
            </div>

            <div class="question">
                <h3>Care dintre următoarele marcaje pot fi întâlnite pe autostradă? 
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Marcaj la apropierea unei intersecții 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6"valid = "valid">
                    <span>
                        Marcaje pe o bandă de accelerare 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                        Marcaj pe o bandă de decelerare 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_presemnalizare_benzi_intersectie.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a7"  valid = "valid"> 
                    <span>
                        Marcaj la apropierea unei intersecții 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Marcaj pe o bandă de decelerare                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Marcaje pe o bandă de accelerare
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_continuu_dublu.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8"  >
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua, dublata cu una discontinua. Marcaj de delimitare a partii carosabile cu linie discontinua.

                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8"  valid = "valid">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua dubla. Marcaj de delimitare a benzilor de circulatie de acelasi sens cu linie discontinua. Marcaj de delimitare a partii carosabile cu linie discontinua
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua                    
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_continuu_discontinuu.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua dubla. Marcaj de delimitare a benzilor de circulatie de acelasi sens cu linie discontinua. Marcaj de delimitare a partii carosabile cu linie discontinua.
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua. 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9"  valid = "valid">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua, dublata cu una discontinua. Marcaj de delimitare a partii carosabile cu linie continua
                    </div>
            </div>

            <div class="question">
                <h3>Care dintre urmatoarele marcaje nu pot fi întâlnite pe autostradă? 

                </h3>
                <div class="answer">
                    <input type="radio" name="a10" valid = "valid">
                    <span>
                        Marcajul benzii de stocaj pentru virajul stânga                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Marcaj pe o bandă de decelerare
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Marcaje pe o bandă de accelerare
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_stocaj_viraj_stanga.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Marcaj la apropierea unei intersecții
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11" valid = "valid">
                    <span>
                        Marcajul benzii de stocaj pentru virajul stânga 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Marcajul benzii suplimentare pentru vehicule lente
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_zone_verzi.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a12" valid = "valid">
                    <span>
                        Marcaj pentru drumuri cu zonă verde de separare a sensurilor de circulație                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie discontinua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua. 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Marcaj pentru benzi cu circulatia reversibila                    
                    </div>
            </div>

            <div class="question">
                <h3>Care dintre urmatoarele pot fi întâlnite pe autostradă? 

                </h3>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                        Marcajul benzii de stocaj pentru virajul stânga
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13" valid = "valid">
                    <span>
                        Marcaj pentru benzi cu circulatia reversibila                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                        Marcaj de separare a sensurilor de circulatie format dintr-o linie continua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua.
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_banda_vehicule_lente.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a14" valid = "valid">
                    <span>
                        Marcajul benzii suplimentare pentru vehicule lente                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14" >
                    <span>
                        Marcajul benzii de stocaj pentru virajul stânga
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14">
                    <span>
                        Marcaj pe o bandă de decelerare                    
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/MarcajeLongitudinale/semne/marcaj_accelerare.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Marcaj la apropierea unei intersecții                   
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15" valid = "valid">
                    <span>
                        Marcaje pe o bandă de accelerare 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Marcajul benzii de stocaj pentru virajul stânga                  
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnificație au marcajele longitudinale continue de culoare galbenă?  <br>

                </h3>
                <div class="answer">
                    <input type="radio" name="a16" valid = "valid">
                    <span>
                        Indică o zonă de lucrări în desfășurare                  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a16">
                    <span>
                        Indică o zonă de depășire permisă în orice condiții 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a16">
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