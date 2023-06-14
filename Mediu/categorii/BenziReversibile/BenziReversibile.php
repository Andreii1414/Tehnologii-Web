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
    <title>Dispozitive luminoase pentru dirijarea circulației pe benzi reversibile</title>
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
        <h1 class="title">Dispozitive luminoase pentru dirijarea circulației pe benzi reversibile</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/benzi_reversibile_luminoase.png" alt="benzi_reversibile_luminoase" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Dispoziții luminoase pentru dirijarea circulația pe benzi reversibile</p>
                           <p class="right__text">Cand deasupra benzilor sunt instalate cu dispozitive cu semnale rosii si verzi, acestea sunt destinate semnalizarii benzilor cu circulatie reversibila. semnalul rosu avand forma a doua bare incrucisate interzice accesul pe banda deasupra careia se gaseste. Semnalul verde cu sageata in jos permite intrarea si circulatia pe banda respectiva. Semnalul galben cu sageata in diagonala anunta schimbarea culorii. acest semnal anunta ca banda deasupra careia se afla va fi inchisa circulatiei si esti obligat sa te deplasezi pe banda sau benzile indicate de sageti. </p>
                    </div>
                </div>
            </div>     
        
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
        window.onload = function(){
            if(<?php echo $conectat?> == 1)
            {
                const puncte = 1;
                const categorie = 'BenziReversibile';
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
        }
    </script>

</body>
</html>