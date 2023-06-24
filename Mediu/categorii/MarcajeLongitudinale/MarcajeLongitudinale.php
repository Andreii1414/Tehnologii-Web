<?php 
    include("../../../php/verifyConnection.php");
    $userSession = UserSession::getInstance();

    if($userSession->isConnected()){
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
    <title>Marcaje longitudinale</title>
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
        onclick="window.location.href=<?php echo $link;?>">    </div>

    <div class="content">
        <h1 class="title">Marcaje longitudinale
        </h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_discontinuu.png" alt="marcaj_discontinuu" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Marcaje longitudinale</p>
                           <p class="right__text">Marcaj de separare a sensurilor de circulatie format dintr-o linie discontinua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua. </p>
                    </div>
                </div>
            </div>     
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_continuu_simplu.png" alt="marcaj_continuu_simplu" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Marcaje longitudinale</p>
                           <p class="right__text">Marcaj de separare a sensurilor de circulatie format dintr-o linie continua simpla. Marcaj de delimitare a partii carosabile cu linie discontinua. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_continuu_dublu.png" alt="marcaj_continuu_dublu" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Marcaje longitudinale</p>
                           <p class="right__text">Marcaj de separare a sensurilor de circulatie format dintr-o linie continua dubla. Marcaj de delimitare a benzilor de circulatie de acelasi sens cu linie discontinua. Marcaj de delimitare a partii carosabile cu linie discontinua. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_continuu_discontinuu.png" alt="marcaj_continuu_discontinuu" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Marcaje longitudinale</p>
                           <p class="right__text">Marcaj de separare a sensurilor de circulatie format dintr-o linie continua, dublata cu una discontinua. Marcaj de delimitare a partii carosabile cu linie continua. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_circulatie_reversibila.png" alt="marcaj_circulatie_reversibila" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Marcaje longitudinale</p>
                           <p class="right__text">Marcaj pentru benzi cu circulatia reversibila. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_zone_verzi.png" alt="marcaj_zone_verzi" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Marcaj pentru drumuri cu zonă verde de separare a sensurilor de circulație</p>
                           <p class="right__text">Marcaj pentru drumuri cu zonă verde de separare a sensurilor de circulație. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_presemnalizare_benzi_intersectie.png" alt="marcaj_presemnalizare_benzi_intersectie" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7: Marcaj la apropierea unei intersecții</p>
                           <p class="right__text">Marcaj la apropierea unei intersecții. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_decelerare.png" alt="marcaj_decelerare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">8: Marcaj pe o bandă de decelerare</p>
                           <p class="right__text">Banda de decelerare se foloseste pentru executarea virajului la dreapta de pe un drum prioritar sau de pe o autostrada. La executarea virajului la dreapta, conducatorii de vehicule fiind obligati sa circule cu o viteza care sa nu depaseasca 30km/h in localitati sau 50 km/h in afara acestora, ar stanjeni circulatia celorlalte vehicule. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_accelerare.png" alt="marcaj_accelerare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">9: Marcaje pe o bandă de accelerare</p>
                           <p class="right__text">Banda de accelerare se materializeaza pentru crearea posibilitatii patrunderii pe artere intens circulate, prevazute cu mai multe benzi de circulatie, prin viraj la dreapta. aceasta banda creeaza posibilitatea conducatorilor de vehicule sa poata efectua schimbarea benzii de circulatie, fara a stanjeni in deplasare vehiculele care circula pe banda respectiva. inainte de a intra pe banda prioritara, situata langa acostament, conducatorii de vehicule trebuie sa semnalizeze si sa se asigure ca intrarea se face fara pericol pentru vehiculele care circula pe acea banda, tinand cont de pozitia si viteza de deplasare a acestora. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_banda_vehicule_lente.png" alt="marcaj_banda_vehicule_lente" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">10: Marcajul benzii suplimentare pentru vehicule lente</p>
                           <p class="right__text">Avertizarea conducatorilor de vehicule despre apropierea de o banda destinata vehiculelor lente se realizeaza prin indicatorul cu aceeasi semnificatie, uneori fiind precedat de o tablita aditionala care indica si distanta pana la banda. Banda suplimentara pentru vehicule lente se materializeaza prin marcaj longitudinal, in general in situatia drumurilor in rampa, pentru fluidizarea circulatiei, atunci cand pe sectorul de drum respectiv circula si vehicule lente. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_stocaj_viraj_stanga.png" alt="marcaj_stocaj_viraj_stanga" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">11: Marcajul benzii de stocaj pentru virajul stânga</p>
                           <p class="right__text">Banda de stocare se materializeaza in zona de preselectie pentru executarea virajului la stanga, in scopul creerii posibilitatii vehiculelor care vireaza la stanga sa opreasca si sa acorde prioritate vehiculelor care circula din sens opus. </p>
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
            if(index == slideList.length && <?php echo $userSession->isConnected()?> == 1)
            {
                const puncte = 4;
                const categorie = 'MarcajeLongitudinale';
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