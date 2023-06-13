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
    <title>Marcaje laterale</title>
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
        <h1 class="title">Marcaje laterale</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marca-ziduri.png" alt="marcaj-ziduri" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Marcaje pe ziduri de sprijin si pe infrastructurile pasajelor inferioare</p>
                           <p class="right__text">
                            Sunt aplicate pe ziduri de sprijin si pe infrastructurile pasajelor inferioare.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-ziduri2.png" alt="marcaj-ziduri2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Marcaje pe ziduri de sprijin si pe infrastructurile pasajelor inferioare</p>
                           <p class="right__text">
                            Sunt aplicate pe ziduri de sprijin si pe infrastructurile pasajelor inferioare.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-inaltime.png" alt="marcaj-ziduri2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Marcaje la pasaje care nu au asigurat gabaritul de inaltime</p>
                           <p class="right__text">
                            Sunt aplicate la pasaje care nu au asigurat gabaritul de inaltime.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-parapet.png" alt="marcaj-parapet" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Marcaje pe parapete</p>
                           <p class="right__text">
                            Sunt aplicate pe parapete.
                           </p>
                    </div>
                </div>
            </div>

             <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-coronamente.png" alt="marcaj-coronamente" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Marcaje pe coronamentele podetelor</p>
                           <p class="right__text">
                            Sunt aplicate pe coronamentele podetelor.
                           </p>
                    </div>
                </div>
            </div>
             
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj-refugii.png" alt="marcaj-refugii" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Marcaje la refugii pe partea carosabila</p>
                           <p class="right__text">
                            Marcaje la refugii pe partea carosabila.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaje-borduri.png" alt="marcaje-borduri" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7: Marcaje pe borduri</p>
                           <p class="right__text">
                            Marcaje aplicate pe borduri.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaje-depasire.png" alt="marcaje-depasire" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">8: Marcaj de interzicere a depasirii in unele curbe deosebit de periculoase</p>
                           <p class="right__text">
                            Interzic depasirea in unele curbe deosebit de periculoase.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaje-reducere.png" alt="marcaje-reducere" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">9: Marcaj de reducere a vitezei inaintea unor curbe deosebit de periculoase</p>
                           <p class="right__text">
                            Obliga conducatorul auto sa reduca viteza inaintea unor curbe deosebit de periculoase.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/sageti-revenire.png" alt="sageti-revenire" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">10: Sageti de revenire pe banda aferenta sensului de mers</p>
                           <p class="right__text">
                            Sageata de repliere care este oblica fata de axul drumului, aplicata pe o banda sau intercalata
                             intr-un marcaj longitudinal format din linii discontinue. Obliga conducatorul auto care nu 
                             se afla pe banda sensului indicata de sageata sa conduca vehiculul pe acea banda.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/sageti-schimbare.png" alt="sageti-schimbare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">11: Săgeți de schimbare a benzii de circulatie</p>
                           <p class="right__text">
                            Obliga la urmarea directiei sau directiilor indicate de sagetile aplicate pe banda.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaje-inscrp.png" alt="marcaje-inscriptionate" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">12: Marcaje inscriptionate pe partea carosabila</p>
                           <p class="right__text">
                            Marcaje precum: sageti, inscriptii, linii paralele sau oblice, pot fi folosite pentru a repeta semnificatia 
                            indicatoarelor sau pentru a da participantilor la trafic indicatii care nu le pot fi furnizate, in mod adecvat, 
                            prin indicatoare.
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
                const categorie = 'MarcajeLaterale';
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