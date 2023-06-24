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
    <title>Indicatoare de avertizare</title>
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
        <h1 class="title">Indicatoare de avertizare</h1>
        
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
          
        <div class="slideshow">
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/curba-la-stanga.jpg" alt="curba-la-stanga" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Curba la stanga</p>
                           <p class="right__text">Se intalneste inainte cu cel mult 200 de metri de o curba la stanga. <br>
                            Sugestii privind comportamentul soferului: Ii este recomandat sa reduca viteza si sa circule cu prudenta,
                        chiar daca reducerea vitezei nu este obligatorie. <br>Daca vizibilitatea este redusa sub 50m, sunt interzise
                    toate manevrele (depasire, stationare, oprire, mersul inapoi, intoarcere). </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/curba-la-dreapta.png" alt="curba-la-dreapta" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Curba la dreapta</p>
                           <p class="right__text">Se intalneste inainte cu cel mult 200 de metri de o curba la dreapta. <br>
                            Sugestii privind comportamentul soferului: Ii este recomandat sa reduca viteza si sa circule cu prudenta,
                        chiar daca reducerea vitezei nu este obligatorie. <br>Daca vizibilitatea este redusa sub 50m, sunt interzise
                    toate manevrele (depasire, stationare, oprire, mersul inapoi, intoarcere). </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/curba-dubla.jpg" alt="curba-dubla" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Curba dubla sau o succesiune de mai multe curbe, prima la stanga</p>
                           <p class="right__text">Se intalneste la 100-200 de metri de inceputul primei curbe. Se instaleaza atunci cand 
                            urmeaza o succesiune de curbe, daca distanta dintre acestea este mai mica de 250 m. Acestea pot fi insotite si de panouri
                            pe care este specificata distanta pana la terminarea succesiunii de curbe, daca lungimea depaseste 1000 m.<br>
                            Sugestii privind comportamentul soferului: Nu este obligat sa reduca viteza, dar ii este recomandat sa circule cu viteza redusa. <br>Daca vizibilitatea este redusa sub 50m, sunt interzise
                    toate manevrele (depasire, stationare, oprire, mersul inapoi, intoarcere). </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/curba-dubla-dreapta.webp" alt="curba-dubla" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Curba dubla sau o succesiune de mai multe curbe, prima la dreapta</p>
                           <p class="right__text">Se intalneste la 100-200 de metri de inceputul primei curbe. Se instaleaza atunci cand 
                            urmeaza o succesiune de curbe, prima fiind la dreapta, daca distanta dintre acestea este mai mica de 250 m. Acestea pot fi insotite si de panouri
                            pe care este specificata distanta pana la terminarea succesiunii de curbe, daca lungimea depaseste 1000 m.<br>
                            Sugestii privind comportamentul soferului: Nu este obligat sa reduca viteza, dar ii este recomandat sa circule cu viteza redusa. <br>Daca vizibilitatea este redusa sub 50m, sunt interzise
                    toate manevrele (depasire, stationare, oprire, mersul inapoi, intoarcere). </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/curba-deosebit-de-periculoasa.png" alt="curba-deosebit-de-periculoasa" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Curba deosebit de periculoasa</p>
                           <p class="right__text">Indicatorul este amplasat in curbe deoseibt de periculoase, cu raze mai mici de 100 m, 
                            sensul sagetilor indicand directia virajului. Conducatorul auto este obligat sa reduca viteza pana la 30 km/h 
                        in localitati si pana la 50 km/h in afara localitatii. La intalnirea acestui indicator, toate manevrele(depasire, stationare, oprire, mersul inapoi, intoarcere)
                    sunt interzise. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/panour-succesive.png" alt="panour-succesive" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Panouri succesive pentru curbe deosebit de periculoase</p>
                           <p class="right__text">Indicatorul este amplasat in curbe deoseibt de periculoase, in zona exterioara
                            a acestora. Se instaleaza cel putin 3 astfel de panouri, succesiv, de la intrarea in curba pana la iesirea
                        din curba, sensul sagetii indicand directia virajului. Conducatorul auto este obligat sa reduca viteza pana la 30 km/h 
                        in localitati si pana la 50 km/h in afara localitatii. Toate manevrele(depasire, stationare, oprire, mersul inapoi, intoarcere)
                         sunt interzise la intalnirea acestui indicator.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/urcare-periculoasajpeg.jpeg" alt="urcare-periculoasa" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7: Urcare periculoasa</p>
                           <p class="right__text">Se instaleaza la 100-200 metri de inceputul sectorului de drum, daca panta depaseste 7%.
                          <br>  Sugestii privind comportamentul soferului: I se recomanda micsorarea vitezei, chiar daca acest lucru nu este 
                          oblicatoriu, prin lege. Este interzisa stationarea indiferent de vizibilitate, iar daca vizibilitatea este redusa sub 50 m,
                          toate manevrele sunt interzise. Daca drumul nu este destul de lat, se aplica regula prioritatii de rampa, cel care urca 
                          avand prioritate.
                           </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/coborare-periculoasa.png" alt="coborare-periculoasa" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">8: Coborare periculoasa</p>
                           <p class="right__text">Se instaleaza la 100-200 metri de inceputul sectorului de drum, daca panta depaseste 7%.
                          <br>  Sugestii privind comportamentul soferului: I se recomanda micsorarea vitezei, chiar daca acest lucru nu este 
                          oblicatoriu, prin lege. Este interzisa stationarea indiferent de vizibilitate, iar daca vizibilitatea este redusa sub 50 m,
                          toate manevrele sunt interzise. Daca drumul nu este destul de lat pentru a permite trecerea a doua vehicule unul pe langa celalalt,
                           se aplica regula prioritatii de rampa, cel care urca avand prioritate fata de cel care coboara.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/drum-ingustat-ambele-parti.png" alt="drum-ingustat-ambele-parti" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">9: Drum ingustat pe ambele parti</p>
                           <p class="right__text">Se instaleaza la 100-200 metri de locul in care sectorul de drum incepe sa se ingusteze
                           pe ambele parti cu cel putin jumatate de metru.
                          <br>  Sugestii privind comportamentul soferului: I se recomanda sa reduca preventiv viteza. Sunt interzise manevrele:
                          intoarcere, stationare, oprire, mers inapoi, iar depasirea este permisa. <br>
                           Relatia cu alte indicatoare: Daca pe drum nu au loc sa circule doua vehicule, prioritatea va fi reglementata prin
                           indicatoarele "Prioritate fata de circulatia din sens invers" sau "Prioritate pentru circulatia din sens invers",
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/drum-ingustat-stanga.png" alt="drum-ingustat-stanga" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">10: Drum ingustat pe partea stanga</p>
                           <p class="right__text">Se instaleaza la 100-200 metri de locul in care sectorul de drum incepe sa se ingusteze
                           pe partea stanga cu cel putin jumatate de metru.
                          <br>  Sugestii privind comportamentul soferului: I se recomanda sa reduca preventiv viteza. Sunt interzise manevrele:
                          intoarcere, stationare, oprire, mers inapoi, iar depasirea este permisa, dar datorita ingustarii s-ar putea sa fie posibila
                          doar depasirea motocicletelor fara atas, bicicletelor sau mopedelor.  <br>
                           Relatia cu alte indicatoare: Daca pe drum nu au loc sa circule doua vehicule, prioritatea va fi reglementata prin
                           indicatoarele "Prioritate fata de circulatia din sens invers" sau "Prioritate pentru circulatia din sens invers",
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/drum-ingustat-dreaptapng.png" alt="drum-ingustat-dreapta" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">11: Drum ingustat pe partea dreapta</p>
                           <p class="right__text">Se instaleaza la 100-200 metri de locul in care sectorul de drum incepe sa se ingusteze
                           pe partea dreapta cu cel putin jumatate de metru.
                          <br>  Sugestii privind comportamentul soferului: I se recomanda sa reduca preventiv viteza. Sunt interzise manevrele:
                          intoarcere, stationare, oprire, mers inapoi, iar depasirea este permisa, dar datorita ingustarii s-ar putea sa fie posibila
                          doar depasirea motocicletelor fara atas, bicicletelor sau mopedelor.  <br>
                           Relatia cu alte indicatoare: Daca pe drum nu au loc sa circule doua vehicule, prioritatea va fi reglementata prin
                           indicatoarele "Prioritate fata de circulatia din sens invers" sau "Prioritate pentru circulatia din sens invers",
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/acostament-periculos.png" alt="acostament-periculos" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">12: Acostament periculos</p>
                           <p class="right__text">Se intalneste de obicei in zona montana, daca acostamentul este denivelat fata de partea carosabila,
                                 existand pericol de rasturnare. Este interzisa manevra de intoarcere deoarece soliditatea drumului nu permite aceasta
                            manevra.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/drum-aglomerat.png" alt="drum-aglomerat" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">13: Drum aglomerat</p>
                           <p class="right__text">Se intalneste de obicei in zone unde traficul este intens. Atunci cand intalneste acest 
                            indicator, conducatorul auto este obligat sa pastreze o distanta de siguranta fata de vehiculul care se deplaseaza
                            in fata sa, pentru a evita un accident in lant. 
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/tunel.png" alt="tunel" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">14: Tunel</p>
                           <p class="right__text">Este amplasat cu 50-100 metri inainte de intrarea intr-un tunel. 
                            Recomandari pentru conducatorul auto: Sa reduca, preventiv, viteza. Toate manevrele sunt interzise, cu exceptia
                            depasirii motocicletelor fara atas, vehiculelor fara motor si ciclomotoarelor, cand vizibilitatea depaseste 20 m, iar 
                            latimea drumului depaseste 7 m. Cand circula prin tunel, conducatorul auto este obligat sa foloseasca luminile de intalnire.
                            Daca acesta ramane imobilizat in tunel, conducatorul auto trebuie sa opreasca motorul si sa semnalizeze prezenta vehiculului.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/pod-mobil.png" alt="pod-mobil" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">15: Pod mobil</p>
                           <p class="right__text">Este amplasat cu 100-200 metri inainte de podul mobil. 
                            Daca podul este ridicat, conducatorul auto este obligat sa opreasca.
                             Toate manevrele sunt interzise, cu exceptia
                            depasirii motocicletelor fara atas, vehiculelor fara motor si ciclomotoarelor, cand vizibilitatea depaseste 20 m, iar 
                            latimea drumului depaseste 7 m. 
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/iesire-chei.png" alt="iesire-chei" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">16: Iesire spre un chei sau un mal abrupt</p>
                           <p class="right__text">Este amplasat cu 100-200 metri inainte de un chei sau un mal abrupt.
                            Indicatorul avertizeaza conducatorul auto ca, pe directia inainte, drumul se termina deasupra unui
                            chei sau a unui mal abrupt.
                            Recomandari pentru conducatorul auto: reducerea vitezei.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/drum-denivelari.png" alt="drum-denivelari" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">17: Drum cu denivelari</p>
                           <p class="right__text">Este amplasat cu 50-200 metri inainte de portiunea de drum care prezinta denivelari.
                            Daca lungimea acestei portiuni depaseste 300 m, indicatorul va fi insotit de un panou aditional pe care 
                            va fi specificata distanta pe care se intine acest drum.
                            La intalnirea indicatorului, conducatorul auto este obligat sa reduca viteza pana la 30km/h in localitate si
                            50km/h in afara localitatii.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/denivelare-limitarea-vitezei.png" alt="denivelare-limitarea-vitezei" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">18: Denivelare pentru limitarea vitezei</p>
                           <p class="right__text">Este intalnit in apropierea gradinitelor, scolilor, trecerilor de pietoni, pe sectoare
                            de drum ingustat, etc. La intalnirea indicatorului, conducatorul auto este obligat sa reduca viteza pana la 30km/h in localitate si
                            50km/h in afara localitatii.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/drum-alunecos.png" alt="drum-alunecos" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">19: Drum alunecos</p>
                           <p class="right__text">Se amplaseaza la 100-200 de metri de locul alunecos. 
                            Recomandari pentru conducatorul auto: Sa reduca viteza, sa circule cu atentie sporita, sa evite pe cat 
                            posibil folosirea franelor, sa nu bruscheze volanul sau comenzile autovehiculului si sa pastreze o distanta de 
                            siguranta fata de autovehiculul din fata sa. Daca drumul este acoperit cu polei, zapada batatorita, mazga sau piatra
                            cubica umeda, conducatorul auto este obligat sa reduca viteza pana la 30km/h in localitate si 50km/h in afara localitatii.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/improscare-piatra.png" alt="improscare-piatra" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">20: Improscare cu piatra</p>
                           <p class="right__text">Se amplaseaza la 100-200 de metri inainte de sectorul de drum periculos.
                            Poate fi insotit si de catre indicatorul "Interzis autovehiculelor de a circula fara a mentine intre ele un interval de cel putin ... m",
                            deoarece exista riscul ca pietrisul de pe partea carosabila sa fie aruncat de rotile vehiculului catre ceilalti participanti la trafic
                            Recomandari pentru conducatorul auto: Sa reduca preventiv viteza si sa pastreze o distanta mai mare fata de autovehiculul care circula 
                            in fata sa.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/caderi-pietre.png" alt="caderi-pietre" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">21: Caderi de pietre</p>
                           <p class="right__text">Se amplaseaza la 100-200 de metri inainte de sectorul de drum periculos.
                            Daca lungimea acestei portiuni depaseste 300 m, indicatorul poate fi insotit de un panou aditional pe care 
                            va fi specificata distanta pe care se intine acest drum.
                            Acest indicator este deseori intalnit in zonele montane. Recomandari pentru conducatorul auto: 
                            Sa reduca viteza si sa circule cu atentie sporita.
                           </p>
                    </div>
                </div>
            </div>

            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/presemnalizare-trecere.png" alt="presemnalizare-trecere" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">22: Presemnalizare trecere de pietoni</p>
                           <p class="right__text">Se instaleaza la 50-200 m de o trecere de pietoni, pe drumurile intens circulate, pe sectoarele de 
                            drum unde vizibilitatea este redusa sau in afara localitatilor. Conducatorului auto ii este recomandat preventiv sa reduca viteza 
                            si sa circule cu atentie sporita. Acest indicator nu se instaleaza cand locul amplasarii sale coincide cu locul amplasarii
                             indicatorului "Copii".
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/copii.png" alt="copii" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">23: Copii</p>
                           <p class="right__text">Se amplaseaza in locurile des circulate de catre copii (scoli, gradinite, parcuri, locuri de joaca, etc).
                            Conducatorul auto este obligat sa reduca viteza sub 30 km/h in localitati, respectiv sub 50 km/h in afara localitatilor 
                            in intervalul orar 07:00-22:00 si sa circule cu atentie sporita
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/biciclisti.png" alt="biciclisti" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">24: Biciclisti</p>
                           <p class="right__text">Se amplaseaza cu 100-200 de metri inainte de locul unde drumul public se intersecteaza cu 
                            o pista de biciclisti.
                            Recomandari pentru conducatorul auto: sa reduca preventiv viteza si sa sporeasca atentia, fiind obligat sa acorde
                            prioritate de trecere biciclistilor atunci cand efectueaza un viraj spre stanga sau spre dreapta.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/animale.png" alt="animale" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">25: Animale</p>
                           <p class="right__text">
                            Se amplaseaza in localitate, cu 100-200 de metri inainte de sectorul de drum unde exista riscul ca animalele sa traverseze sau sa circule pe drumul public.
                            Conducatorul de vehicul este obligat sa circule cu o viteza care sa nu depaseasca 30km/h la trecerea pe langa animale aflate pe partea carosabila sau pe acostament.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/animale2.png" alt="animale2" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">26: Animale</p>
                           <p class="right__text">
                            Se amplaseaza in afara localitatii, cu 100-200 de metri inainte de sectorul de drum unde exista riscul ca animalele sa traverseze sau sa circule pe drumul public.
                            Conducatorul de vehicul este obligat sa circule cu o viteza care sa nu depaseasca 50km/h la trecerea pe langa animale aflate pe partea carosabila sau pe acostament.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/lucrari.png" alt="lucrari" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">27: Lucrari</p>
                           <p class="right__text">
                            Se instaleaza la 20-200 m de sectorul de drum pe care se executa lucrari. Fondul de culoare galbena semnifica caracterul temporar al lucrarii. 
                            Recomandari pentru conducatorul auto: sa reduca preventiv viteza. Indicatorul este plasat uneori alaturi de alte indicatoare cum ar fi 
                            "Drum ingustat", "Limitare de viteza", etc.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/semafoare.png" alt="semafoare" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">28: Semafoare</p>
                           <p class="right__text">
                            Se instaleaza la 30-200 m de locul in care se afla semaforul, daca se considera ca prezenta semaforului ar putea surprinde conducatorii
                            auto.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/aeroport.png" alt="aeroport" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">29: Aeroport</p>
                           <p class="right__text">
                            Se amplaseaza pe drumurile publice ce trec pe sub culoarele 
                            aeriene din apropierea aeroporturilor, pentru a atentiona conducatorul auto de zgomotul puternic sau de zborurile la joasa inaltime a avioanelor
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/vant-lateral.png" alt="vant-lateral" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">30: Vant lateral</p>
                           <p class="right__text">
                            Este amplasat in locurile unde exista frecvent curenti de aer puternici care pot afecta circulatia rutiera.
                            Conducatorii auto trebuie sa fie atenti la trecerea pe langa un autovehicul cu gabarit mare deoarece se poate forma fenomenul de absorbtie
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/circulatie-ambele-sensuri.png" alt="circulatie-ambele-sensuri" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">31: Circulatie in ambele sensuri</p>
                           <p class="right__text">
                            Este intalnit la iesirea de pe un drum public cu sens unic
                            Atentioneaza conducatorul auto ca pe sectorul de drum urmator se va circula in ambele sensuri.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/alte-pericole.png" alt="alte-pericole" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">32: Alte pericole</p>
                           <p class="right__text">
                            Este amplasat la 50-200 de metri inainte de locul periculos, in orice situatie periculoasa care nu este prevazuta de alt 
                            indicator rutier de avertizare. La intalnirea acestui indicator, conducatorului auto ii este recomandat preventiv sa reduca
                             viteza si sa circule cu atentie sporita.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/accident.png" alt="accident" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">33: Accident</p>
                           <p class="right__text">
                            Indicatorul modifica regimul normal de desfasurare a circulatiei si este amplasat inaintea locului unde s-a produs un accident
                            a carui investigatie este inca in desfasurare. 
                            Conducatorul auto este obligat sa reduca viteza la maxim 30 km/h in localitate, respectiv maxim 50 km/h in afara localitatii.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/intersectie-drumuri.png" alt="intersectie-drumuri" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">34: Intersectie de drumuri</p>
                           <p class="right__text">
                            Atentioneaza conducatorul auto ca urmeaza o intersectie nedirijata de drumuri din aceeasi categorie, adica o intersectie unde se aplica 
                            regula prioritatii de dreapta. Conducatorul auto este obligat sa reduca viteza pana la 30 km/h in localitate, 
                            respectiv pana la 50 km/h in afara localitatii.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/intersectie-fara-prioritate.png" alt="intersectie-fara-prioritate" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">35: Intersectie cu un drum fara prioritate</p>
                           <p class="right__text">
                            Se amplaseaza in afara localitatii, la 100-200 de metri de o intersectie cu un drum fara prioritate. Conducatorul auto NU are 
                            obligatia sa reduca viteza sau sa cedeze trecerea la intalnirea acestui indicator. Indicatorul confirma faptul ca intersectia este 
                            dirijata. Indicatoarele care dirijeaza aceasta intersectie sunt "Oprire" si/sau "Cedeaza trecerea".
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/intersectie-fara-prioritate2.png" alt="intersectie-fara-prioritate2" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">36: Intersectie cu un drum fara prioritate</p>
                           <p class="right__text">
                            Se amplaseaza in afara localitatii, la 100-200 de metri de o intersectie cu un drum fara prioritate. Conducatorul auto NU are 
                            obligatia sa reduca viteza sau sa cedeze trecerea la intalnirea acestui indicator. Indicatorul confirma faptul ca intersectia este 
                            dirijata. Indicatoarele care dirijeaza aceasta intersectie sunt "Oprire" si/sau "Cedeaza trecerea". Simbolul de pe indicator
                            sugereaza configuratia intersectiei, in acest caz, drumul fara prioritate aflandu-se pe partea dreapta.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/intersectie-fara-prioritate3.png" alt="intersectie-fara-prioritate3" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">37: Intersectie cu un drum fara prioritate</p>
                           <p class="right__text">
                            Se amplaseaza in afara localitatii, la 100-200 de metri de o intersectie cu un drum fara prioritate. Conducatorul auto NU are 
                            obligatia sa reduca viteza sau sa cedeze trecerea la intalnirea acestui indicator. Indicatorul confirma faptul ca intersectia este 
                            dirijata. Indicatoarele care dirijeaza aceasta intersectie sunt "Oprire" si/sau "Cedeaza trecerea". Simbolul de pe indicator
                            sugereaza configuratia intersectiei, in acest caz, drumul fara prioritate aflandu-se pe partea stanga.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/intersectie-fara-prioritate4.png" alt="intersectie-fara-prioritate4" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">38: Intersectie cu drumuri fara prioritate, decalate</p>
                           <p class="right__text">
                            Se amplaseaza in afara localitatii, la 100-200 de metri de o intersectie cu drumuri fara prioritate, decalate   . Conducatorul auto NU are 
                            obligatia sa reduca viteza sau sa cedeze trecerea la intalnirea acestui indicator. Indicatorul confirma faptul ca intersectia este 
                            dirijata. Indicatoarele care dirijeaza aceasta intersectie sunt "Oprire" si/sau "Cedeaza trecerea". Simbolul de pe indicator
                            sugereaza configuratia intersectiei, in acest caz, primul drum aflandu-se pe partea stanga, al doilea pe partea 
                            dreapta.
                           </p>
                    </div>
                </div>
            </div>

            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/intersectie-fara-prioritate5jpg.jpg" alt="intersectie-fara-prioritate5" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">39: Intersectie cu drumuri fara prioritate, decalate</p>
                           <p class="right__text">
                            Se amplaseaza in afara localitatii, la 100-200 de metri de o intersectie cu drumuri fara prioritate, decalate   . Conducatorul auto NU are 
                            obligatia sa reduca viteza sau sa cedeze trecerea la intalnirea acestui indicator. Indicatorul confirma faptul ca intersectia este 
                            dirijata. Indicatoarele care dirijeaza aceasta intersectie sunt "Oprire" si/sau "Cedeaza trecerea". Simbolul de pe indicator
                            sugereaza configuratia intersectiei, in acest caz, primul drum aflandu-se pe partea dreapta, al doilea pe partea 
                            stanga.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/presemnalizare-giratoriu.png" alt="presemnalizare-giratoriu" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">40: Presemnalizare intersectie cu sens giratoriu</p>
                           <p class="right__text">
                            Se amplaseaza cu 50-200 m inaintea intersectiilor cu sens giratoriu. Dupa intalnirea acestui indicator, 
                            conducatorul auto va intalni indicatorul de obligare "Intersectie cu sens giratoriu". 
                            La intalnirea acestui indicator, conducatorul auto este obligat sa reduca viteza.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/cale-ferata-bariere.png" alt="cale-ferata-bariere" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">41: Trecere la nivel cu cale ferata cu bariere sau semibariere</p>
                           <p class="right__text">
                            Se  amplaseaza la 50 m (in localitate)/ 150 m (in afara localitatilor) inainte de trecerea la nivel cu o cale ferata 
                            cu bariere sau semibariere. La intalnirea acestui indicator, conducatorul auto este obligat sa reduca viteza. La mai putin
                            de 50 de metri inainte si dupa calea ferata, sunt interzise toate manevrele (exceptie face depasirea care este interzisa doar 
                            inainte de calea ferata). In localitate, amplasarea indicatorului se va face pe acelasi stalp cu panoul suplimentar cu o dunga rosie oblica, 
                            iar in afara localitatii pe panoul suplimentar cu trei dungi rosii oblice.
                    
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/cale-ferata-fara-bariere.png" alt="cale-ferata-fara-bariere" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">42: Trecere la nivel cu cale ferata fara bariere</p>
                           <p class="right__text">
                            Se amplaseaza la 50 m (in localitate)/ 150 m (in afara localitatilor) inainte de trecerea la nivel cu o cale ferata 
                            fara bariere. La intalnirea acestui indicator, conducatorul auto este obligat sa opreasca pentru a se asigura, inainte de a 
                            traversa calea ferata. Oprirea se va face in dreptul marcajului de oprire sau in lipsa acestuia in dreptul indicatorului  
                            "Trecere la nivel cu cale ferata simpla/dubla/fara bariere", fara a depasi indicatorul.         
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/trecere-tramvai.png" alt="trecere-tramvai" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">43: Trecere la nivel cu linii de tramvai</p>
                           <p class="right__text">
                            Se amplaseaza cu 50-200 de metri inaintea inaintea intersectiilor in care tramvaiele urmeaza sa vireze la dreapta ori la stanga.
                            La intalnirea acestui indicator, conducatorul auto este obligat sa reduca viteza si sa acorde prioritate tramvaiului. Acest 
                            indicator se amplaseaza chiar daca linia de tramvai intersecteaza numai un sens sau numai o banda de circulatie.        
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/masini-agricole.png" alt="masini-agricole" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">44: Masini si utilaje agricole</p>
                           <p class="right__text">
                            Se intalneste de obicei in localitatile rurale si avertizeaza conducatorul auto cu privire la faptul ca in zona circula 
                            frecvent masini si utilaje agricole        
                           </p>
                    </div>
                </div>
            </div>


            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/presemnalizare-amenajare-rutiera.png" alt="presemnalizare-amenajare-rutiera" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">45: Presemnalizarea unei amenajari rutiere care permite intoarcerea vehiculului</p>
                           <p class="right__text">
                            Se intalneste pe drumurile publice care ofera posibilitatea conducatorului auto sa execute manevra de intoarcere. 
                            Acest indicator nu se refera la un sens giratoriu si conducatorul auto nu are prioritate fata de vehiculele care circula
                            din sens opus, pentru a executa intoarcerea, acesta trebuie sa acorde prioritate de trecere.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/baliza-stanga.png" alt="baliza-stanga" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">46: Baliza directionala care indica ocolirea obstacolului prin partea stanga</p>
                           <p class="right__text">
                            Este intalnite de obicei pe drumurile publice unde sunt realizate lucrari si atentioneaza conducatorul auto ca obstacolul se va 
                            ocoli prin partea stanga.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/baliza-dreapta.png" alt="baliza-dreapta" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">47: Baliza directionala care indica ocolirea obstacolului prin partea dreapta</p>
                           <p class="right__text">
                            Este intalnite de obicei pe drumurile publice unde sunt realizate lucrari si atentioneaza conducatorul auto ca obstacolul se va 
                            ocoli prin partea dreapta.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/baliza.png" alt="baliza" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">48: Baliza directionala</p>
                           <p class="right__text">
                            Este intalnite de obicei pe drumurile publice unde sunt realizate lucrari si atentioneaza conducatorul auto ca obstacolul se poate 
                            ocoli prin ambele parti
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/panouri-cale-ferata.png" alt="panouri-cale-ferata" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">49: Panouri suplimentare pentru trecerea la nivel cu cale ferata</p>
                           <p class="right__text">
                            Sunt montate inainte trecerii la nivel cu cale ferata. Primul panou (cel cu trei dungi) se monteaza la 150 m de 
                            calea ferata, al doilea (cel cu doua dungi) - la 100 m, iar ultimul (cel cu o singura dubga) - la 50 m de calea ferata.
                            La intalnirea panoului cu trei benzi, conducatorul auto este obligat sa reduca viteza. La intalnirea panoului cu o singura 
                            banda, conducatorul auto nu mai are voie sa execute nicio manevra. In localitate, din cauza conditiilor de trafic, nu se 
                            instaleaza decat cel de-al treilea panou.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/panouri-autostrazi.png" alt="panouri-autostrazi" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">50: Panouri suplimentare la nodurile rutiere de pe autostrazi</p>
                           <p class="right__text">
                            Se monteaza la 300 m (primul panou), 200 m (al doilea panou) si la 100 m (al treilea panou) de urmatoare bifurcatie de pe o autostrada.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/cale-ferata-fara-barierepng.png" alt="cale-ferata-fara-bariere" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">51: Trecere la nivel cu o cale ferata simpla, fara bariere</p>
                           <p class="right__text">
                            Amplasat la 6-10 m de trecerea la nivel cu o cale ferata simpla, fara bariere. La intalnirea acestui indicator conducatorul auto 
                            este obligat sa opreasca in locul cu vizibilitate maxima, fara a depasi indicatorul, pentru a se asigura ca nu circula vreun vehicul feroviar.  
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/cale-ferata-dubla-fara-bariere.png" alt="cale-ferata-dubla-fara-bariere" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">52: Trecere la nivel cu o cale ferata dubla, fara bariere</p>
                           <p class="right__text">
                            Amplasat la 6-10 m de trecerea la nivel cu o cale ferata dubla, fara bariere. La intalnirea acestui indicator conducatorul auto 
                            este obligat sa opreasca in locul cu vizibilitate maxima, fara a depasi indicatorul, pentru a se asigura ca nu circula vreun vehicul feroviar.  
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/cale-ferata-fara-bariere1.jpg" alt="cale-ferata-fara-bariere2" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">53: Trecere la nivel cu o cale ferata simpla, fara bariere</p>
                           <p class="right__text">
                            Amplasat la 6-10 m de trecerea la nivel cu o cale ferata simpla, fara bariere. La intalnirea acestui indicator conducatorul auto 
                            este obligat sa opreasca in locul cu vizibilitate maxima, fara a depasi indicatorul, pentru a se asigura ca nu circula vreun vehicul feroviar.  
                            Acest indicator poate fi prevazut cu instalatie de semnalizare luminoasa automata, in acest caz conducatorul auto poate traversa calea ferata
                            doar daca semnalul cu luminii rosii este stins, iar semnalul cu lumina alba intermitenta cu cadenta lenta este scazuta.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/cale-ferata-dubla-fara-bariere2.png" alt="cale-ferata-dubla-fara-bariere2" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">54: Trecere la nivel cu o cale ferata dubla, fara bariere</p>
                           <p class="right__text">
                            Amplasat la 6-10 m de trecerea la nivel cu o cale ferata dubla, fara bariere. La intalnirea acestui indicator conducatorul auto 
                            este obligat sa opreasca in locul cu vizibilitate maxima, fara a depasi indicatorul, pentru a se asigura ca nu circula vreun vehicul feroviar.  
                            Acest indicator poate fi prevazut cu instalatie de semnalizare luminoasa automata, in acest caz conducatorul auto poate traversa calea ferata
                            doar daca semnalul cu luminii rosii este stins, iar semnalul cu lumina alba intermitenta cu cadenta lenta este scazuta.
                            </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/zona-accident.gif" alt="zona-accident" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">55: Zona cu risc ridicat de accident</p>
                           <p class="right__text">
                            Semnalizeaza un sector de drum cu lungimea de maximum un km, pe care, intr-o perioada de 5 ani consecutivi, s-au inregistrat minimum 10 
                            accidente grave de circulatie, solidate cu cel putin 10 persoane decedate sau ranite grav. 
                            Recomandari pentru conducatorul auto: Reducerea vitezei, sporirea atentiei si evitarea efectuarii oricarei manevre riscante
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
                const puncte = 12;
                const categorie = 'Avertizare';
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