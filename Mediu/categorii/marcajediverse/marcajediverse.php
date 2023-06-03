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
    <title>Marcaje diverse</title>
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
            <a class = "navigation__link" onclick="window.location.href='../../../about/about.php'">About</a>
            <a class = "navigation__link" onclick="window.location.href='../../../help/help.php'">Help</a>
        </div>
        <img src=<?php echo $profileImg;?>
        class="profile navigation__link" alt="Profil"
        onclick="window.location.href=<?php echo $link;?>">    
    </div>

    <div class="content">
        <h1 class="title">Marcaje diverse</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-ghidare-traversare.png" alt="marcaj-ghidare-traversare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Marcaj de ghidare la traversarea unei intersectii</p>
                           <p class="right__text">
                                Au rol de a materializa traiectoria pe care autovehiculele trebuie sa o urmeze in traversarea unei 
                                intersectii ori pentru efectuarea virajului la stanga, fiind obligatoriu a se realiza in cazul in care 
                                axul central ori liniile de separare a benzii de circulatie nu sunt coliniare.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-ghidare.png" alt="marcaj-ghidare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Marcaj de ghidare în intersectie</p>
                           <p class="right__text">
                                Au rol de a materializa traiectoria pe care autovehiculele trebuie sa o urmeze in traversarea unei 
                                intersectii ori pentru efectuarea virajului la stanga, fiind obligatoriu a se realiza in cazul in care 
                                axul central ori liniile de separare a benzii de circulatie nu sunt coliniare.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-inguste.png" alt="marcaj-inguste" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Marcaj pentru spatii inguste</p>
                           <p class="right__text">
                             Marcaj pentru spatii inguste
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-o-banda.png" alt="marcaj-o-banda" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Marcaj la ingustarea drumului cu o banda pe sens</p>
                           <p class="right__text">
                             Marcheaza ingustarea drumului la o banda pe sens.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-trei-benzi.png" alt="marcaj-trei-benzi" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Marcaj pe drum cu trei benzi pentru alocarea alternativa a doua benzi pentru unul sau celalalt sens de circulatie</p>
                           <p class="right__text">
                            Marcaj pe drum cu trei benzi pentru alocarea alternativa a doua benzi pentru unul sau celalalt sens de circulatie
                           </p>
                    </div>
                </div>
            </div>   
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/spatii-inchise.png" alt="spatii-inchise" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Spatii inchise circulatiei</p>
                           <p class="right__text">
                            Marcajul aplicat in afara benzilor, format din linii paralele, 
                            inconjurate sau nu cu o linie de contur, delimiteaza spatiul interzis circulatiei.
                           </p>
                    </div>
                </div>
            </div> 

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-stationare.png" alt="interzis-stationare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7: Interzicerea stationarii</p>
                           <p class="right__text">
                            Interzice stationarea vehiculelor pe partea drumului pe care este aplicat. Marcajul prin linie 
                            continua galbena aplicat pe bordura trotuarului sau pe banda de consolidare a acostamentului, 
                            dubland marcajul de delimitare a partii carosabile spre exteriorul platformei drumului interzice 
                            stationarea vehiculelor pe acea parte a drumului. Cand o asemenea linie insoteste un indicator de 
                            interzicere a stationarii, aceasta precizeaza lungimea sectorului de drum pe care este valabila interzicerea.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-rezervata.png" alt="marcaj-rezervata" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">8: Marcajul benzii rezervate circulatiei autovehiculelor de transport persoane</p>
                           <p class="right__text">
                            Delimiteaza banda exclusiv rezervata circulatiei autovehiculelor de transport de persoane.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/statie.png" alt="statie" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">9: Statie autovehicule de transport în comun</p>
                           <p class="right__text">
                            Linia in zigzag completata cu inscrisul "BUS" sau "TAXI" poate fi folosita 
                            pentru semnalizarea statiilor de autobuze si troleibuze, respectiv taximetre.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/parcare.png" alt="parcare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">10: Locuri de parcare</p>
                           <p class="right__text">
                            Delimiteaza locurile de parcare. Parcarea se face paralel cu liniile marcajului.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/parcare2.png" alt="parcare2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">11: Locuri de parcare</p>
                           <p class="right__text">
                            Delimiteaza locurile de parcare. Parcarea se face paralel cu liniile marcajului.
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
                const puncte = 4;
                const categorie = 'MarcajeDiverse';
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