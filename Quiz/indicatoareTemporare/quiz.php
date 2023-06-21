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
                <h3>Care dintre următoarele indicatoare reprezintă deviere temporară?<br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/17.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/18.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/19.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Niciunul
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1"  valid = "valid">
                    <span>
                        Toate cele 3 indicatoare                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Doar al treilea indicator                    
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Care dintre următoarele indicatoare reprezintă abatere temporară?   <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/26.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/28.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/29.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Toate cele trei indicatoare
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid = "valid">
                    <span>
                        Doar primul indicator
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Niciunul
                </div>
                <div class="answer">
                   <input type="radio" name="a2">
                   <span>
                      Doar al doilea indicator 
                </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/27.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Presemnalizarea rutei ocolitoare
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3" >
                    <span>
                        Îngustare temporară  
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3" valid = "valid">
                    <span>
                        Terminarea abaterii temporare
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/1.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid">
                    <span>
                        Drum îngustat în ambele sensuri 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4"> 
                    <span>
                        Drum îngustat pe partea dreaptă
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Drum îngustat pe partea stângă  
                    </div>
            </div>



            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/5.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a5" >
                    <span>
                        Drum lunecos 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5">
                    <span>
                        Acostament periculos
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a5" valid = "valid">
                    <span>
                        Drum cu denivelări                    
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/12.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Circulație în ambele sensuri
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6" valid = "valid"> 
                    <span>
                        Prioritate pentru circulația din sens invers 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a6">
                    <span>
                        Prioritate pentru circulația față de sensul invers  
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/35.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a7"> 
                    <span>
                        Presemnalizarea unui sector cu circulație alternantă 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7">
                    <span>
                        Lucrări de tratamente a suprafeței părții carosabile                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a7"  valid = "valid">
                    <span>
                        Succesiune de puncte de lucru 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/32.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a8" valid = "valid">
                    <span>
                        Presemnalizarea rutei ocolitoare 

                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8">
                    <span>
                        Abatere temporară 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a8" >
                    <span>
                        Presemnalizarea unui sector cu circulație alternantă                      
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/24.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a9" >
                    <span>
                        Îngustare pentru vehiculele destinate transportului de marfuri                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9">
                    <span>
                        Abatere temporară pentru vehiculele cu gabarit depășit                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a9" valid = "valid">
                    <span>
                        Abatere temporară
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/7.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a10">
                    <span>
                        Lucrări                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10" valid = "valid">
                    <span>
                        Împroșcare cu pietriș 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a10" >
                    <span>
                        Acostament periculos 
                    </div>
            </div>

            <div class="question">
                <h3>Care dintre următoarele indicatoare reprezintă îngustare temporară?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/26.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/22.png" alt="img"
                    class="imagine">
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/23.png" alt="img"
                    class="imagine">    
                </h3>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Doar primul                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11">
                    <span>
                        Toate cele 3
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a11"  valid = "valid">
                    <span>
                        2 si 3 
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/15.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Sfârșitul tuturor restricțiilor                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12">
                    <span>
                        Sfârșitul interdicției de staționare
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a12" valid = "valid">
                    <span>
                        Sfârșitul interdicției de a depăși  
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/39.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a13" valid = "valid">
                    <span>
                        Presemnalizare lucrări pe străzi                     
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                        Lucrări de tratamente a suprafeței părții carosabile
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a13">
                    <span>
                        Presemnalizarea unui sector cu circulație alternantă  
                    </div>
            </div>

            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/14.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a14">
                    <span>
                        Sfârșitul interdicției de staționare                    
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14">
                    <span>
                        Sfârșitul interdicției de a depăși 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a14"  valid = "valid">
                    <span>
                        Sfârșitul tuturor restricțiilor 
                    </div>
            </div>

            
            <div class="question">
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/indicatoaretemporare/semne/37.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Succesiune de puncte de lucru  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15"   valid = "valid">
                    <span>
                        Presemnalizarea unui sector cu circulație alternantă 
                   </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a15">
                    <span>
                        Semnalizarea unui utilaj care se deplaseaza lucrand 
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