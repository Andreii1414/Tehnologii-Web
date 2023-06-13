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
    <title>Panouri aditionale</title>
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
        <h1 class="title">Panouri aditionale</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/1.png" alt="1" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Distanta pana la locul la care se refera indicatorul de presemnalizare sau informare</p>
                           <p class="right__text">
                            Indica distanta pana la locul la care se refera indicatorul de presemnalizare sau informare
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/2.png" alt="2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Distanta intre indicator si inceputul locului periculos</p>
                           <p class="right__text">
                            Indica distanta de la indicatorul impreuna cu care este instalat pe drumurile publice, pana la inceputul 
                            locului la care se refera indicatorul respectiv.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/3.jpg" alt="3" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Directia si distanta pana la locul la care se refera indicatorul</p>
                           <p class="right__text">
                            Indica directia si distanta pana la locul la care se refera indicatorul impreuna cu care este instalat.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/4.webp" alt="4" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Persoane cu handicap</p>
                           <p class="right__text">
                            Se întalneste de obicei, impreuna cu indicatorul rutier "Parcare" si informeaza participantul 
                            la trafic, in legatura cu locurile de parcare rezervate persoanelor cu handicap.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/6.jpg" alt="5" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Intervale de timp in care actioneaza indicatorul</p>
                           <p class="right__text">
                            Se instaleaza sub indicatoarele de informare si specifica un interval orar intre care se respecta 
                            regulile impuse de indicatorul rutier sub care este amplasat.
                            </p>
                    </div>
                </div>
            </div>
           
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/5.jpg" alt="5" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Intervale de timp in care actioneaza indicatorul</p>
                           <p class="right__text">
                            Se instaleaza sub indicatorul "Drum aglomerat" precum si sub indicatoarele de interzicere specificand 
                            intervalul orar intre care se respecta regulile impuse de indicatorul rutier sub care este amplasat.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/7.jpg" alt="7" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7: Trecere la nivel cu cale ferata industriala completand semnificatia indicatorului "Alte Pericole"</p>
                           <p class="right__text">
                            Se instaleaza impreuna cu indicatorul "Alte pericole" si indica o trecere la nivel cu o cale ferata industriala.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/8.jpg" alt="8" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">8: Lungimea sectorului periculos la care se refera indicatorul</p>
                           <p class="right__text">
                            Are rolul de a preciza lungimea sectorului periculos la care se refera indicatorul cu care este montat pe drumurile
                            publice.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/9.jpg" alt="9" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">9: Inceputul si lungimea zonei de actiune a indicatorului</p>
                           <p class="right__text">
                            Se monteaza impreuna cu indicatoarele "Oprire interzisa" sau "Stationare interzisa" si are rolul de a preciza 
                            de unde incepe si ce lungime are zona de actiune a indicatorului sub care este montat.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/10.jpg" alt="10" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">10: Inceputul zonei de actiune a indicatorului</p>
                           <p class="right__text">
                            Se monteaza impreuna cu un indicator si are rolul de a preciza 
                           inceputul zonei de actiune a acestuia.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/11.jpg" alt="11" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">11: Confirmarea zonei de actiune a indicatorului</p>
                           <p class="right__text">
                            Se monteaza impreuna cu un indicator si are rolul de a confirma
                            zona de actiune a acestuia.
                            </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/12.avif" alt="12" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">12: Sfarsitul zonei de actiune a indicatorului</p>
                           <p class="right__text">
                            Se monteaza impreuna cu un indicator si are rolul de a preciza 
                            sfarsitul zonei de actiune a acestuia.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/13.jpg" alt="13" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">13: Categoria de autovehicule la care face referire indicatorul</p>
                           <p class="right__text">
                            Precizeaza categoria de autovehicule la care face referire indicatorul sub care este amplasat.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/14.jpg" alt="14" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">14: Categoriile de autovehicule care trebuie sa respecte semnificatia indicatorului</p>
                           <p class="right__text">
                            Se amplaseaza impreuna cu indicatorul rutier "Prioritate pentru circulatia din sens invers". 
                            Precizeaza categoriile de autovehicule care trebuie sa acorde prioritate.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/15.png" alt="15" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">15: Parcare cu plata</p>
                           <p class="right__text">
                            Se amplaseaza impreuna cu indicatorul rutier "Parcare". 
                            Informeaza participantul la trafic cu privire la faptul ca acea parcare este cu plata.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/16.png" alt="16" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">16: Parcare cu plata</p>
                           <p class="right__text">
                            Se amplaseaza impreuna cu indicatorul rutier "Parcare". 
                            Informeaza participantul la trafic cu privire la faptul ca acea parcare este cu plata, intre orele inscrise pe panou.
                            Conducatorul auto este informat si de pretul pe care trebuie sa il plateasca pe ora.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/18.jpg" alt="18" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">18: Intervalele de timp cand este permisa stationarea vehiculelor care efectueaza aprovizionarea</p>
                           <p class="right__text">
                            Se amplaseaza impreuna cu indicatorul "Stationare interzisa" si indica Intervalele de timp cand este permisa stationarea 
                            vehiculelor care efectueaza aprovizionarea.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/19.jpg" alt="19" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">19: Drum inchis circulatiei publice</p>
                           <p class="right__text">
                            Se amplaseaza de obicei impreuna cu indicatorul "Circulatie interzisa in ambele sensuri"
                             si ii informeaza pe participantii la trafic ca drumul este inchis circulatiei publice.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/20.jpg" alt="20" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">20: Trecere pentru pietoni desfiintata</p>
                           <p class="right__text">
                            Informeaza participantii la trafic ca trecerea de pietoni a fost desfiintata.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/21.jpg" alt="21" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">21: Cu exceptia riveranilor</p>
                           <p class="right__text">
                            Se monteaza de obicei impreuna cu un indicator de interzicere sau restrictie, permitand accesul riveranilor 
                            pe sectorul de drum respectiv.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/22.jpg" alt="22" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">22: Cu exceptia autovehiculelor autorizate</p>
                           <p class="right__text">
                            Se monteaza impreuna cu un indicator de interzicere sau restrictie. Are rolul de a-i informa pe participantii
                            la trafic, ca accesul pe drumul respectiv este permis doar autovehiculelor autorizate.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/23.jpg" alt="23" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">23: Autovehiculul se ridica</p>
                           <p class="right__text">
                            Se monteaza de obicei impreuna cu un indicator de interzicere sau restrictie. Ii informeaza pe conducatorii auto 
                            ca nerespectarea semnificatiei indicatorului va duce la ridicarea vehiculului de institutiile abilitate.
                            </p>
                    </div>
                </div>
            </div>

            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/24.jpg" alt="24" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">24: Viteza recomandata pe un sector de drum cu semafoare sincronizate</p>
                           <p class="right__text">
                            Se intalneste la inceputul sectorului de drum cu semafoare sincronizate. Viteza inscrisa pe indicator va fi 
                            viteza pe care trebuie sa o mentina conducatorul auto, pentru a prinde culoarea verde la toate semafoarele montate 
                            pe sectorul de drum respectiv.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/25.jpg" alt="25" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">25: Directia drumului cu prioritate</p>
                           <p class="right__text">
                            Se instaleaza la intrarea intr-o intersectie, pe drumul fara prioritate, indicand prin linia neagra ingrosata 
                            directia drumului cu prioritate. Se instaleaza sub indicatoarele "Oprire" si "Cedeaza trecerea". 
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/26.png" alt="26" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">26: Sensul sau sensurile de circulatie pentru care este valabila semnificatia    
                            semnelor luminoase ale semaforului</p>
                           <p class="right__text">
                            Se monteaza sub semafoare si are rolul de a indica directia la care se refera culoarea semaforului.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/27.jpg" alt="27" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">27: Trecere la nivel cu calea ferata prevazuta cu instalatie de semnalizare luminoasa 
                            automata
                           </p>
                           <p class="right__text">
                            Se intalneste la trecerea la nivel cu calea ferata prevazuta cu instalatie de semnalizare luminoasa 
                            automata. Se instaleaza impreuna cu indicatoarele "Trecere la nivel cu cale ferata cu bariere sau semibariere"
                            sau "Trecere la nivel cu cale ferata fara bariere".
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/28.jpg" alt="28" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">28: Rampa pentru persoane cu handicap locomotor
                           </p>
                           <p class="right__text">
                            Informeaza ca, in apropierea panoului respectiv exista o rampa pentru persoane cu handicap locomotor.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/29.jpg" alt="29" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">29: Modalitati in care se executa parcarea
                           </p>
                           <p class="right__text">
                            Informeaza conducatorii auto de modul in care se va efectua parcarea pe raza indicatorului rutier "Parcare"
                            </p>
                    </div>
                </div>
            </div>

            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/30.jpg" alt="30" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">30: Ridicarea autovehiculelor parcate neregulamentar
                           </p>
                           <p class="right__text">
                            Informeaza conducatorii auto ca autovehiculele parcate neregulamentar vor fi ridicate de institutiile abilitate.
                            </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/31.jpg" alt="31" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">31: Folosirea luminilor de intalnire
                           </p>
                           <p class="right__text">
                            Informeaza conducatorii auto ca trebuie sa puna in functiune luminile de intalnire.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/32.jpg" alt="32" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">32: Polei, gheata, zapada
                           </p>
                           <p class="right__text">
                            Se instaleaza impreuna cu indicatorul rutier "Drum alunecos" si avertizeaza participantii la trafic ca in conditiile 
                            meteorologice de polei, gheata sau zapada drumul devine alunecos.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/33.jpg" alt="33" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">33: Dus
                           </p>
                           <p class="right__text">
                            Informeaza despre prezenta in zona respectiva a unor cabine de dus.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/34.jpg" alt="34" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">34: Ploaie, ceata, viscol
                           </p>
                           <p class="right__text">
                            Se instaleaza impreuna cu indicatorul rutier "Drum alunecos" si avertizeaza participantii la trafic ca in conditiile 
                            meteorologice de ploaie, ceata sau viscol drumul devine alunecos.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/35.png" alt="35" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">35: Vehicule care transporta substante explozibile sau usor inflamabile
                           </p>
                           <p class="right__text">
                            Se monteaza de obicei alaturi de un indicator de interzicere sau restrictie si ii instiinteaza pe conducatori ca le este interzis 
                            sa circule pe sectorul de drum respectiv transportand substante explozibile sau usor inflamabile.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/36.jpg" alt="36" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">36: Vehicule care transporta marfuri periculoase
                           </p>
                           <p class="right__text">
                            Se monteaza de obicei alaturi de un indicator de interzicere sau restrictie si ii instiinteaza pe conducatori ca le este interzis 
                            sa circule pe sectorul de drum respectiv transportand marfuri periculoase.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/37.jpg" alt="37" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">37: Vehicule care transporta substante de natura sa polueze apele
                           </p>
                           <p class="right__text">
                            Se monteaza de obicei alaturi de un indicator de interzicere sau restrictie si ii instiinteaza pe conducatori ca le este interzis 
                            sa circule pe sectorul de drum respectiv transportand substante de natura sa polueze apele.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/38.jpg" alt="38" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">38: Distanta pana la indicatorul "Oprire"
                           </p>
                           <p class="right__text">
                            Informeaza participantii la trafic in legatura cu distanta pana la indicatorul "Oprire".
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/39.jpg" alt="39" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">39: Numarul nodului rutier pe autostrada
                           </p>
                           <p class="right__text">
                            Informeaza participantii la trafic in legatura cu numarul nodului rutier de pe autostrada,
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
                const puncte = 8;
                const categorie = 'Aditionale';
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