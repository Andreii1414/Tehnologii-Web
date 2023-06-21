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
                    <img src="../../Mediu/categorii/IndicatoareCaleFerata/semne/fara_bariere_cu_semnale.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1"  valid = "valid">
                    <span>
                        Trecere la nivel cu o cale ferată simplă, fără bariere, prevăzută cu semnale luminoase de avertizare a apropierii trenului
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Trecere la nivel cu o cale ferată simplă cu semibarieră, prevăzută cu semnale luminoase de avertizare a apropierii trenului
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Trecere la nivel cu o cale ferată dublă, fără bariere, prevăzută cu semnale luminoase de avertizare a apropierii trenului
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/IndicatoareCaleFerata/semne/dubla_fara_bariere_cu_semnale.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Trecere la nivel cu o cale ferată simplă cu semibarieră, prevăzută cu semnale luminoase de avertizare a apropierii trenului
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Trecere la nivel cu o cale ferată simplă, fără bariere, prevăzută cu semnale luminoase de avertizare a apropierii trenului
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid = "valid">
                    <span>
                        Trecere la nivel cu o cale ferată dublă, fără bariere, prevăzută cu semnale luminoase de avertizare a apropierii trenului                     </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/IndicatoareCaleFerata/semne/semibariera_cu_semnale.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Trecere la nivel cu o cale ferată dublă, fără bariere, prevăzută cu semnale luminoase de avertizare a apropierii trenului
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Trecere la nivel cu o cale ferată simplă, fără bariere, prevăzută cu semnale luminoase de avertizare a apropierii trenului
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Trecere la nivel cu o cale ferată simplă cu semibarieră, prevăzută cu semnale luminoase de avertizare a apropierii trenului                      </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce trebuie să faci când semnalul luminos de avertizare la o trecere la nivel cu calea ferată începe să clipească?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Opriți complet și așteptați până trece trenul
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Puteți trece cu atenție
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid">
                    <span>
                        Puteți accelera și să treceți rapid                     
                     </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce semnal luminos indică trecerea permisă la o trecere cu calea ferată?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Lumini roșii
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Lumini verzi
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" >
                    <span>
                        Lumini galbene                     
                     </span>
                </div>
            </div>

            <div class="question">
                <h3>
                    Ce trebuie să faci atunci când bariera la o trecere cu calea ferată este conorata?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Ocolești bariera și treci cu atenție
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                        Opriți înaintea barierei și așteptați ridicarea acesteia
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" >
                    <span>
                        Continuați să mergeți înainte                    
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