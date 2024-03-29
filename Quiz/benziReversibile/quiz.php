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
                <h3>Ce reprezinta indicatorul din imagine?  <br>
                    <img src="../../Mediu/categorii/BenziReversibile/semne/benzi_reversibile_luminoase.png" alt="img"
                    class="imagine">
                </h3>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Dispoziții pentru circularea corecta pe benzi.
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1"  valid = "valid">
                    <span>
                        Dispoziții luminoase pentru dirijarea circulația pe benzi reversibile.  
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a1">
                    <span>
                        Dispoziții pentru benzi deschise / inchise circulatiei pe autostradă.                     
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce indica semnalul galben cu sageata in diagonala prezent pe dispozitiile luminoase pentru dirijarea circulatiei pe benzi
                    reversibile?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Permite intrarea si circularea pe banda respectiva
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2">
                    <span>
                        Avertizeaza conducatorul auto ca trebuie sa circule cu viteza redusa 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a2" valid = "valid">
                    <span>
                        Banda este inchisa circulatiei si esti obligat sa te deplasezi pe banda/benzile indicate                     
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce indica semnalul galben cu sageata in diagonala prezent pe dispozitiile luminoase pentru dirijarea circulatiei pe benzi
                    reversibile?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a3"  valid = "valid">
                    <span>
                        Puteți circula pe banda reversibilă, respectând regulile normale de circulație
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Traficul este interzis pe banda reversibilă, indiferent de starea semnalului luminos 
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a3">
                    <span>
                        Puteți utiliza banda reversibilă numai în situații de urgență                     
                    </span>
                </div>
            </div>

            <div class="question">
                <h3>Ce indică un semnal luminos intermitent pe banda reversibilă?  <br>
                </h3>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Traficul este interzis pe banda respectivă
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4" valid = "valid">
                    <span>
                        Traficul este permis pe banda respectivă, dar cu precauție
                    </span>
                </div>
                <div class="answer">
                    <input type="radio" name="a4">
                    <span>
                        Traficul este încetinit pe banda respectivă                     
                    </span>
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