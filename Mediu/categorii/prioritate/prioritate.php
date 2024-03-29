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
    <title>Indicatoare de prioritate</title>
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
        <h1 class="title">Indicatoare de prioritate</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/cedeaza.png" alt="cedeaza" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Cedeaza Trecerea</p>
                           <p class="right__text">
                                Se amplaseaza pe drumul public fara prioritate, la intersectia acestuia cu un drum public prioritar.
                                La intalnirea acestui indicator, conducatorul auto este obligat sa reduca viteza si sa se asigure ca pe drumul 
                                prioritar nu circula autovehicule, si abia apoi poate sa patrunda in intersectie. Daca pe drumul prioritar circula
                                 alte autovehicule, conducatorul auto este obligat sa opreasca pentru a le acorda prioritate.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/stop.png" alt="stop" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Oprire</p>
                           <p class="right__text">
                                Se amplaseaza pe drumul public fara prioritate, la intersectia acestuia cu un drum public prioritar,
                                 unde pozitia de patrundere este lipsita de vizibilitate (cladiri, copaci, etc). La intalnirea acestui indicator,
                                 conducatorul auto trebuie sa opreasca in locul cu vizibilitate maxima, fara a depasi coltul intersectiei, si sa acorde 
                                 prioritate tuturor vehiculelor care circula pe drumul prioritar. In cazul in care indicatorul este insotit de un Marcaj 
                                 transversal pentru oprire, conducatorul va efectua oprirea inainte de marcaj.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/prioritate.png" alt="prioritate" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Drum cu prioritate</p>
                           <p class="right__text">
                            Se instaleaza la inceputul drumului cu prioritate sau inaintea intersectiilor cu un drum fara prioritate.
                            Drumurile care intersecteaza drumul cu prioritate vor avea instalate unul dintre indicatoarele "Oprire" sau "Cedeaza trecerea". 
                            Cand este amplasat inaintea unei intersectii, acest indicator poate fi insotit si de un panou aditional care va preciza 
                            directia drumului cu prioritate.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/sfarsit-prioritate.png" alt="sfarsit-prioritate" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Sfarsitul drumului cu prioritate</p>
                           <p class="right__text">
                            Este amplasat cu 50-200 de metri inainte de locul unde inceteaza semnificatia indicatorului "Drum cu prioritate" si are rolul de a informa
                            conducatorul auto, ca in urmatoarea intersectie in care va patrunde, toate drumurile vor fi de aceeasi categorie.
                           </p>
                    </div>
                </div>
            </div>

            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/prioritate-sens-opus.png" alt="prioritate-sens-opus" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Prioritate pentru circulatia din sens invers</p>
                           <p class="right__text">
                            Este intalnit pe sectoarele cu drum ingustat, unde nu au loc sa circule doua vehicule unul pe langa celalalt. 
                            La intalnirea acestui indicator, conducatorul autovehiculului pierde prioritatea fata de toate autovehiculele care circula din sens opus. 
                            Toate manevrele, cu exceptia celei de depasire, sunt interzise. Acest indicator poate fi insotit si de un panou aditional pe care sunt precizate 
                            categoriile de autovehicule carora li se adreseaza acest indicator.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/prioritate-fata-de-sens-opus.png" alt="prioritate-fata-de-sens-opus" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Prioritate fata de circulatia din sens invers</p>
                           <p class="right__text">
                            Este intalnit pe sectoarele cu drum ingustat, unde nu au loc sa circule doua vehicule unul pe langa celalalt. 
                            La intalnirea acestui indicator, conducatorul autovehiculului va avea prioritate fata de toate autovehiculele care circula din sens opus. 
                            Toate manevrele, cu exceptia celei de depasire, sunt interzise. Este precedat de unul dintre indicatoarele "Drum ingustat pe ambele sensuri"
                            "Drum ingustat pe partea dreapta" sau "Drum ingustat pe partea stanga".
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
            if(index == slideList.length && <?php echo $userSession->isConnected()?> == 1)
            {
                const puncte = 2;
                const categorie = 'Prioritate';
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