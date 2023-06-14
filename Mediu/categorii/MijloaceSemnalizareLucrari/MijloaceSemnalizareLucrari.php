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
    <title>Mijloace auxiliare de semnalizare a lucrărilor</title>
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
        <h1 class="title">Mijloace auxiliare de semnalizare a lucrărilor
        </h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/ghirlanda_polietilena.png" alt="ghirlanda_polietilena" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Ghirlandă polietilenă sau lanț</p>
                           <p class="right__text">Ghirlandă polietilenă sau lanț. </p>
                    </div>
                </div>
            </div>     
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafor_mobil.png" alt="semafor_mobil" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Semafor mobil</p>
                           <p class="right__text">Semafor mobil. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/baliza_directionala_ocolire_stanga.png" alt="baliza_directionala_ocolire_stanga" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Baliză direcțională care indică ocolirea obstacolului prin stânga</p>
                           <p class="right__text">Baliză direcțională care indică ocolirea obstacolului prin stânga. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/baliza_directionala_ocolire_dreapta.png" alt="baliza_directionala_ocolire_dreapta" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Baliză direcțională care indică ocolirea obstacolului prin dreapta</p>
                           <p class="right__text">Baliză direcțională care indică ocolirea obstacolului prin dreapta. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/balize_jalon.png" alt="balize_jalon" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Baliză tip jalon</p>
                           <p class="right__text">Baliză tip jalon. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/baliza_bidirectionala.png" alt="baliza_bidirectionala" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Baliză bidirecțională</p>
                           <p class="right__text">Baliză bidirecțională. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/con_dirijare.png" alt="con_dirijare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7: Con de dirijare</p>
                           <p class="right__text">Con de dirijare. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/baliza_cu_lampi.png" alt="baliza_cu_lampi" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">8: Balize cuplate cu lămpi de lumină galbenă intermitentă</p>
                           <p class="right__text">Balize cuplate cu lămpi de lumină galbenă intermitentă. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/lampa_lumina_galbena.png" alt="lampa_lumina_galbena" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">9: Lampă cu lumină galbenă intermitentă</p>
                           <p class="right__text">Lampă cu lumină galbenă intermitentă. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/bariera.png" alt="bariera" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">10: Barieră normală</p>
                           <p class="right__text">Barieră normală. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/bariera_bidirectionala.png" alt="bariera_bidirectionala" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">11: Barieră bidirecțională</p>
                           <p class="right__text">Barieră bidirecțională. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/fanion_semnalizare.png" alt="fanion_semnalizare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">12: Fanion de semnalizare</p>
                           <p class="right__text">Fanion de semnalizare. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/caricioare_postsemnalizare.png" alt="caricioare_postsemnalizare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">13: Căricioare postsemnalizare</p>
                           <p class="right__text">Căricioare postsemnalizare. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/palete_semnalizare.png" alt="palete_semnalizare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">14: Palete de semnalizare</p>
                           <p class="right__text">Palete de semnalizare. </p>
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
                const categorie = 'Auxiliare';
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