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
                <h3>Ce ii este interzis conducatorului auto sa faca la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/inainte.jpeg  " alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1" valid = "valid">
                    <span>
                        Sa vireze la stanga sau la dreapta
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Sa circule pe directia inainte
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Sa depaseasca                    
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/Pistă-comună-pentru-pietoni-și-bicicliști.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Pietonii au prioritate fata de biciclisti          
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Accesul interzis pietonilor si biciclistilor                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2"  valid="valid">
                    <span>
                       Pista comuna pentru pietoni si biciclisti
                    </div>
            </div>

            <div class="question">
                <h3>Ce este obligat sa faca conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/Viteză-minimă-obligatorie.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Sa circule cu o viteza de minim 40km/h, dar mai mica decat viteza maxima admisa
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Sa circule cu o viteza de minim 40km/h, neexistand limita superioara
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Sa circule cu o viteza care sa nu depaseasca 40km/h
                    </div>
            </div>

            <div class="question">
                <h3>Ce ii este interzis conducatorului auto sa faca la intalnirea urmatorului indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/inante-sau-la-dreapta.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Sa circule inainte sau la dreapta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid">
                    <span>
                        Sa vireje la stanga
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4" >
                    <span>
                       Sa execute manevra de mers inapoi
                    </div>
            </div>

            <div class="question">
                <h3>Ce obligatii are conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/ocolire.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                      Indicatorul indica faptul ca in dreapta se afla un obstacol care trebuie ocolit prin stanga
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid"> 
                    <span>
                        Sa ocoleasca obstacolul aflat pe partea carosabila prin partea dreapta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Sa vireze la stanga
                    </div>
            </div>

            <div class="question">
                <h3>Cui trebuie sa acorde prioritate conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/intersectie-cu-sens-giratoriu.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid">
                    <span>
                        Vehiculelor care circula in interiorul intersectiei.
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Vehiculelor care vin din dreapta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Vehiculelor care vin din stanga
                    </div>
            </div>

            <div class="question">
                <h3>Unde poate fi intalnit urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/ocolire2.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a7" > 
                    <span>
                        Cand conducatorul auto este obligat sa efectueze manevra de intoarcere.
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Langa semafoare              
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7" valid = "valid">
                    <span>
                        In refugiile statiilor de tramvai
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/drum-obligatoriu-pentru-categ-de-vehicule.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8" valid = "valid" >
                    <span>
                        Drum obligatoriu pentru categoria de vehicule de pe indicator
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                        Drum interzis pentru categoria de vehicule de pe indicator
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                       Statie de autobuz
                    </div>
            </div>

            <div class="question">
                <h3>Ce este obligat sa faca conducatorul auto la intalnirea acestui indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/la-dreapta.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Sa nu vireze la dreapta, deoarece este interzsi
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Sa ocoloeasca obstacolul prezent pe partea carosabila prin dreapta
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" valid = "valid">
                    <span>
                       Sa vireze la dreapta
                    </div>
            </div>

            <div class="question">
                <h3>Ce semnifica urmatorul indicator? <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/Delimitare-piste-pentru-pietoni-și-biciclete.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                       Pista comuna pietonilor si biciclistilor              
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10" valid="valid">
                    <span>
                        Delimitare intre pista de biciclete si pista pentru pietoni
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10" >
                    <span>
                        Spatiu amenajat pentru inchirierea bicicletelor
                    </div>
            </div>

            <div class="question">
                <h3>Care este denumirea urmatorului indicator?  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/lanturi-pentru-zapada.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Drum alunecos
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Se blocheaza rotile
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11" valid = "valid">
                    <span>
                        Lanturi pentru iarna
                    </div>
            </div>

            <div class="question">
                <h3>Adevarat sau fals: La intalnirea urmatorului indicator, autovehiculele care transporta orice fel marfuri, trebuie sa circule pe directia inainte  <br>
                    <img src="../../Mediu/categorii/Obligare/semne/deobligare/Direcție-obligatorie-pentru-autovehiculele-care-transportă-mărfuri-periculoase.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a12" valid = "valid">
                    <span>
                        Fals              
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12" >
                    <span>
                        Adevarat
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