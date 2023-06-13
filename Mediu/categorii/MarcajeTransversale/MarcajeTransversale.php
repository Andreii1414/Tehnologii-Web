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
    <title>Marcaje transversale</title>
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
        <h1 class="title">Marcaje transversale</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_oprire.png" alt="marcaj_oprire" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Marcaj de oprire</p>
                           <p class="right__text">Inaintea marcajului ce insoteste indicatorul "Oprire" se poate aplica pe partea carosabila inscriptia "STOP". Se opreste fara a depasi linia transversala. </p>
                    </div>
                </div>
            </div>     
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_cedeaza_trecerea.png" alt="marcaj_cedeaza_trecerea" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Marcaj de cedarea trecerii</p>
                           <p class="right__text">Inaintea unei asemenea linii se poate aplica pe partea carosabila un marcaj sub forma de triunghi, avand o latura paralela cu linia discontinua, iar varful indreptat spre vehiculul care se apropie. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/benzi_rezonatoare.png" alt="benzi_rezonatoare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Benzi rezonatoare din marcaj rutier</p>
                           <p class="right__text">Pe autostrazi, pe drumurile expres si pe drumuri nationale deschise traficului international (E), la extremitatile partii carosabile, se aplica marcaje rezonatoare (la calcarea acestor benzi rotile fac zgomot), pentru avertizarea conducatorilor de autovehicule la iesirea de pe partea carosabila. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/marcaj_traversare_pietoni.png" alt="marcaj_traversare_pietoni" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Marcaje de traversare pentru pietoni</p>
                           <p class="right__text">Marcajul transversal constand din linii paralele cu axul drumului indica locul pe unde pietonii trebuie sa traverseze drumul. Aceste linii au latimea mai mare decat a oricaror altor marcaje. </p>
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
            const puncte = 1;
            const categorie = 'MarcajeTransversale';
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