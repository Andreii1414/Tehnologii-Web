<?php 
    include("../../../php/verifyConnection.php");

    if($conectat == 1){
        $link = "'../../../login/changePassOrLogout.php'";
        $profileImg = '"../../../images/profile_green.png"';
    }
    else {
        $link = "'../../../login/login.php'";
        $profileImg = '"../../../images/profile_red.png"';
    }

?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Semnale luminoase</title>
</head>
<body>
    <div class="logo">
        <img src="../../../images/logo.png" alt="RoT" class="logo__image">
    </div>

    <div class="navigation">
        <img src="../../../images/rank.png" onclick="window.location.href='../../../Clasament/clasament.php'" class="ranking navigation__link" alt="Clasament">
        <div class="center">
            <a class = "navigation__link" onclick="window.location.href='../../../home/home.php'">Pagina principala</a>
            <a class = "navigation__link" onclick="window.location.href='../../mediu.php'">Mediu de invatare</a>
            <a class = "navigation__link" onclick="window.location.href='../../../quiz/quiz.php'">Quiz</a>
            <a class = "navigation__link" onclick="window.location.href='../../../Mini-Game/mini-game.php'">Mini-Game</a>
            <a class = "navigation__link" onclick="window.location.href='../../../about/about.php'">About</a>
            <a class = "navigation__link" onclick="window.location.href='../../../help/help.php'">Help</a>
        </div>
        <img src=<?php echo $profileImg;?>
        class="profile navigation__link" alt="Profil"
        onclick="window.location.href=<?php echo $link;?>">    
    </div>

    <div class="content">
        <h1 class="title">Semnale luminoase</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor.png" alt="semafor" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Semafor</p>
                           <p class="right__text">
                            Semnalul de culoare rosie interzice trecerea. La semnalul rosu, vehiculul trebuie oprit fara a depasi semaforul,
                             marcarjul de oprire, trecerea de pietoni sau coltul intersectiei daca semaforul este suspendat. 
                             Atunci cand semnalul de culoare rosu functioneaza deodata cu cel galben, acesta anunta ca urmeaza semnalul verde.
                             Atunci cand semnalul de culoare galbena urmeaza dupa cel verde, deplasarea poate fi continuata doar in cazul in care este
                             imposibila oprirea in conditii de siguranta. Semnalul de culoare verde permite trecerea. Daca atunci cand se efectueaza virajul
                             la dreapta (sau uneori stanga), pietonii au si ei verde, se acorda prioritate pietonilor.
                             </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor-directie.png" alt="semafor-directie" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Semafor cu indicarea directiei de deplasare</p>
                           <p class="right__text">
                           Pe lampile de culoare rosie sau verde pot fi aplicate sageti de culoare neagra care indica directiile de deplasare 
                           corespunzatoare acestora. In acest caz, interdictia sau permisiunea de trecere impusa de semnalul luminos este limitata 
                           la directia (sau directiile) indicate prin aceste sageti.
                            </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor-timp.png" alt="semafor-timp" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Semafor combinat cu dispozitiv de cronometrare a timpului aferent culorii</p>
                           <p class="right__text">
                           In cazul semaforizarii corelate, in lungul unui traseu pot fi instalate dispozitive de cronometrare a timpului 
                           aferent culorii, precum si dispozitive luminoase care sa arate participantilor la trafic timpii stabiliti prin 
                           programul de semaforizare.
                            </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor-contrast.png" alt="semafor-constrast" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Semafor cu panou de contrast</p>
                           <p class="right__text">
                           Se instaleaza, de regula, pe partea dreapta a drumului in sensul de mers, iar acolo unde observarea 
                           lui poate fi impiedicata, se amplaseaza deasupra partii carosabile, central, in consola sau pe scuar in partea 
                           stanga.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor-biciclete.png" alt="semafor-biciclete" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Semafor pentru biciclete</p>
                           <p class="right__text">
                           Are doua lentile si se intalneste de obicei la intersectia unui drum public cu o pista de biciclete.
                           Lentila de sus (rosie) interzice patrunderea biciclistilor in intersectie, cea de jos (verde), permite patrunderea 
                           biciclistilor in intersectie.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor-pietoni.png" alt="semafor-pietoni" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Semafor pentru pietoni</p>
                           <p class="right__text">
                           Lentila de sus (rosie) interzice accesul pietonilor, cea de jos (verde), permite accesul pietonilor.
                           </p>
                    </div>
                </div>
            </div>
           
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor-pietoni-timp.png" alt="semafor-pietoni-timp" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7: Semafor pentru pietoni combinat cu dispozitiv de cronometrare a timpului aferent culorii</p>
                           <p class="right__text">
                          Este dotat cu dispozitiv de cronometrare aferent culorii.
                          Culoarea rosie interzice accesul pietonilor, pe cand culoare verde, permite accesul pietonilor.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor-avertizare.png" alt="semafor-avertizare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">8: Semafor de avertizare</p>
                           <p class="right__text">
                            Emit doar semnale de culoare galben intermitent si reprezinta un mijloc suplimentar de avertizare asupra
                            unui loc periculos. Conducatorii auto care intalnesc acest semafor sunt obligati sa reduca viteza.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor-tramvai.png" alt="semafor-tramvai" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">9: Semafor pentru tramvaie</p>
                           <p class="right__text">
                            Este format din 4 lampi, de culoare alba si se adreseaza numai tramvaielor. La aprinderea lampilor de sus, 
                            conducatorul tramvaiului trebuie sa opreasca. La aprinderea lampilor 3 si 4 (sus-dreapta si jos), tramvaiul poate
                            vira la dreapta. La aprinderea lampilor 1 si 4 (stanga sus si jos) tramvaiul poate vira la stanga. La aprinderea lampilor
                            2 si 4 (sus mijloc si jos) tramvaiul poate circula pe directia inainte.
                           </p>
                    </div>
                </div>
            </div>
        
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
    </div>
    
    <div class="footer">
        <div class="footer__nav">
            <a class = "nav_link" href="#">Confidentialitate</a>
            <a class = "nav_link" href="#">Info contact</a>
            <a class = "nav_link" href="#">Intrebari frecvente</a>
            <a class = "nav_link" href="#">Termeni si conditii</a>
        </div>

        <div class="img_nav">
            <img src="../../../images/facebook.png" alt="facebook" class="icon">
            <img src="../../../images/twitter.png" alt="twitter" class="icon">
            <img src="../../../images/instagram.png" alt="instagram" class="icon">
            <img src="../../../images/reddit.png" alt="reddit" class="icon">
        </div>

        <p class="rot">Romanian Traffic Signs Tutor</p>
        <p class="rot">@RoT</p>
    </div>


    <script src="../slider.js">
    </script>

<script>
    document.querySelector('.next').addEventListener('click', function(){
        if(index == slideList.length && <?php echo $conectat?> == 1)
        {
            const puncte = 5;
            const categorie = 'SemnaleLuminoase';
            const headers = new Headers();
            headers.append('Puncte', puncte);
            headers.append('Category', categorie);

            fetch('/api/mediu',
            {
                method: 'POST',
                headers: headers
            })

            .then(response => response.json())
            .then(data=>{
                console.log('Data:', data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    })
</script>

</body>
</html>