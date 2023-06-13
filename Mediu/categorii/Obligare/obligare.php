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
    <title>Indicatoare de obligare</title>
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
        onclick="window.location.href=<?php echo $link;?>">    </div>

    <div class="content">
        <h1 class="title">Indicatoare de obligare</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">
    
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deobligare/inainte.jpeg" alt="inainte" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Inainte</p>
                           <p class="right__text">Indicatorul se monteaza cu cel mult 50 m inainte de o intersectie, <br>
                            obligand conducatorul auto sa circule pe directia indicata de sageata (nu poate vira stanga sau dreapta, nu poate intoarce).
                            <br> Daca actioneaza asupra unei singure benzi, atunci se va instala deasupra benzii respective.<br>
                            Acest indicator actioneaza doar in intersectia inaintea careia este instalat. </p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deobligare/la-dreapta.png" alt="la-dreapta" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: La dreapta </p>
                           <p class="right__text">Se instaleaza pe partea opusa intrarii intr-o intersectie sau suspendat in mijlocul intersectiei,<br>
                            obligand conducatorul auto sa vireze in directia indicata de sageata, dar fara a ocoli indicatorul (pana la indicator).<br>
                            Indicatorul actioneaza numai in intersectia inaintea careia este instalat.<br>
                            Efectuandu-se un viraj, este obligatorie reducerea vitezei la maxim 30 km/h in localitate, respectiv max. 50 km/h in afara localitatii. </p>
                    </div>
                </div>
            </div>
            <!-- -->
              <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deobligare/la-dreapta2.png" alt="la-dreapta2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: La dreapta </p>
                           <p class="right__text">Se amplaseaza inaintea intrarii intr-o intersectie,<br>
                            obligand conducatorul auto sa vireze pe directia indicata de sageata, dupa ocolirea indicatorului.<br>
                            Zona de actiune a acestui indicator o constituie intersectia inaintea careia este instalat.<br>
                            Efectuandu-se un viraj, este obligatorie reducerea vitezei la maxim 30 km/h in localitate, respectiv max. 50 km/h in afara localitatii.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deobligare/inante-sau-la-dreapta.png" alt="inainte-sau-la-dreapta" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Inainte sau la dreapta </p>
                           <p class="right__text">Conducatorul auto va intalni acest indicator inaintea intrarii intr-o intersectie,<br>
                            obligand conducatorul auto sa circule pe una din directiile indicate de sageti.<br>
                            Actioneaza doar in intersectia inaintea caruia este instalat.</p>
                </div>
            </div>
        </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deobligare/ocolire.png" alt="ocolire" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Ocolire </p>
                           <p class="right__text">Indicatorul din imaginea alaturata se amplaseaza inaintea unui obstacol aflat pe partea carosabila,<br>
                             pe care conducatorul auto trebuie sa il ocoleasca in sensul indicat de sageata.<br>
                            Refugiile statiilor de tramvai sunt semnalizate cu astfel de indicatoare.</p>
                </div>
            </div>
        </div>    
        <!-- -->
        <div class="slide">
            <div class="rectangle">
                <div class="left">
                    <img src="semne/deobligare/ocolire2.png" alt="ocolire2" class="image">
                </div>
                <div class="right">
                       <p class="right__title">6: Ocolire </p>
                       <p class="right__text">Indicatorul din imaginea alaturata se amplaseaza inaintea unui obstacol aflat pe partea carosabila,<br>
                        pe care conducatorul auto poate sa il ocoleasca pe ambele parti.<br>
                        Refugiile statiilor de tramvai sunt semnalizate cu astfel de indicatoare.</p>
            </div>
        </div>
    </div>    
    <!-- -->
    <div class="slide">
        <div class="rectangle">
            <div class="left">
                <img src="semne/deobligare/intersectie-cu-sens-giratoriu.png" alt="intersectie-cu-sens-giratoriu" class="image">
            </div>
            <div class="right">
                   <p class="right__title">7: Intersectie cu sens giratoriu </p>
                   <p class="right__text">Se amplaseaza inaintea unei intersectii cu sens giratoriu sau pe zona circulara din mijlocul intersectiei.<br>
                    Se circula in sensul indicat de sageti, ocolind insula, afara de situatia cand viram stanga.<br>
                    Oprirea si stationarea sunt interzise, depasirea este permisa, intoarcerea este permisa numai prin ocolirea insulei.<br>
                    La intalnirea acestui indicator, conducatorul auto este obligat sa acorde prioritate vehiculelor care circula in interiorul intersectiei.</p>
        </div>
    </div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/pista-pentru-biciclete.png" alt="pista-pentru-biciclete" class="image">
        </div>
        <div class="right">
               <p class="right__title">8: Pista pentru biciclete </p>
               <p class="right__text">Are rolul de a preciza inceputul unei piste de biciclete pe care este permisa numai circulatia bicicletelor.<br>
                 Indicatoarul se monteaza si la intersectia pistei cu un drum public.</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/drum-obligatoriu-pentru-categ-de-vehicule.png" alt="Drum-obligatoriu-pentru-categoria-de-vehicule" class="image">
        </div>
        <div class="right">
               <p class="right__title">9: Drum obligatoriu pentru categoria de vehicule</p>
               <p class="right__text">Drum obligatoriu pentru categoria de vehicule</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/drum-pentru-pietoni.png" alt="drum-pentru-pietoni" class="image">
        </div>
        <div class="right">
               <p class="right__title">10: Drum pentru pietoni</p>
               <p class="right__text">Permite circulatia numai a pietonilor<br> pe drumul inaintea caruia este instalat.</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/Delimitare-piste-pentru-pietoni-și-biciclete.png" alt="Delimitare-piste-pentru-pietoni-și-biciclete" class="image">
        </div>
        <div class="right">
               <p class="right__title">11: Delimitare piste pentru pietoni și biciclete</p>
               <p class="right__text">Poate fi intalnit la inceputul unui sector de drum pe care este permisa circulatia numai a pietonilor si a bicicletelor,<br>
                acestia fiind obligati sa circule numai pe pista specifica pentru categoria din care fac parte.</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/Pistă-comună-pentru-pietoni-și-bicicliști.png" alt="Pistă-comună-pentru-pietoni-și-bicicliști" class="image">
        </div>
        <div class="right">
               <p class="right__title">12: Pistă comună pentru pietoni și bicicliști</p>
               <p class="right__text">Pistă comună pentru pietoni și bicicliști.</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/Viteză-minimă-obligatorie.png" alt="Viteză-minimă-obligatorie" class="image">
        </div>
        <div class="right">
               <p class="right__title">13: Viteza minima obligatorie</p>
               <p class="right__text">Se monteaza in zona in care se impune o viteza de circulatie minima.<br>
                 La intalnirea acestui indicator, conducatorul auto este obligat sa circule cu o viteza superioara celei inscriptionate pe indicator,<br>
                dar mai mica decat cea maxima legala admisa pe sectorul de drum respectiv.</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/Sfârșitul-vitezei-minime-obligatorii.png" alt="Sfârșitul-vitezei-minime-obligatorii" class="image">
        </div>
        <div class="right">
               <p class="right__title">14: Sfarsitul vitezei minime obligatorii</p>
               <p class="right__text">Se instaleaza in zona in care se termina sectorul de drum cu viteza minima obligatorie.</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/lanturi-pentru-zapada.png" alt="lanturi-pentru-zapada" class="image">
        </div>
        <div class="right">
               <p class="right__title">15: Lanțuri pentru zăpadă</p>
               <p class="right__text">Se amplaseaza in zonele in care, pe timp de iarna,<br>
                conducatorii autovehiculelor cu masa totala maxima autorizata mai mare de 3,5 t.<br>
                au obligatia de a monta lanturi antiderapante daca partea carosabila este acoperita cu zapada, gheata sau polei.</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/Direcție-obligatorie-pentru-autovehiculele-care-transportă-mărfuri-periculoase.png" alt="Direcție-obligatorie-pentru-autovehiculele-care-transportă-mărfuri-periculoase" class="image">
        </div>
        <div class="right">
               <p class="right__title">16: Direcție obligatorie pentru autovehiculele care transportă mărfuri periculoase</p>
               <p class="right__text">La intalnirea acestui indicator, vehiculele care<br>
                 transporta marfuri periculoase sunt obligate sa circule pe directia indicata de sageata: inainte</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/Direcție-obligatorie-pentru-autovehiculele-care-transportă-mărfuri-periculoase2.png" alt="Direcție-obligatorie-pentru-autovehiculele-care-transportă-mărfuri-periculoase" class="image">
        </div>
        <div class="right">
               <p class="right__title">17: Direcție obligatorie pentru autovehiculele care transportă mărfuri periculoase</p>
               <p class="right__text">La intalnirea acestui indicator, vehiculele<br>
                 care transporta marfuri periculoase sunt obligate sa circule pe directia indicata de sageata: la dreapta</p>
    </div>
</div>
</div>    
<!-- -->
<div class="slide">
    <div class="rectangle">
        <div class="left">
            <img src="semne/deobligare/Direcție-obligatorie-pentru-autovehiculele-care-transportă-mărfuri-periculoase.png" alt="Direcție-obligatorie-pentru-autovehiculele-care-transportă-mărfuri-periculoase" class="image">
        </div>
        <div class="right">
               <p class="right__title">18: Direcție obligatorie pentru autovehiculele care transportă mărfuri periculoase</p>
               <p class="right__text">La intalnirea acestui indicator, vehiculele care<br>
                 transporta marfuri periculoase sunt obligate sa circule pe directia indicata de sageata: la stanga</p>
    </div>
</div>
</div>    
<!-- -->
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
                const categorie = 'Obligare';
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