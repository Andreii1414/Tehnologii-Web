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
    <title>Indicatoare de interzicere sau restrictie</title>
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
        <h1 class="title">Indicatoare de interzicere sau restrictie</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/acces-interzis.png" alt="acces-interzis" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1: Acces interzis</p>
                           <p class="right__text">
                            Interzice accesul tuturor vehiculelor pe sectorul de drum la capatul caruia este instalat (nu au voie nici
                            biciclete, vehicule cu tractiune animala sau cele impinse sau trase cu mana, exceptie facand pietonii).
                            In general, se amplaseaza pe drumurile cu sens unic, pe sensul pe care nu este permisa circulatia.
                            Acest indicator poate fi insotit si de un panou aditional pe care sunt precizate categoriile de autovehicule 
                            care au voie sa intre pe sectorul de drum respectiv, carora nu li se adreseaza deci restrictia de fata.
                           </p>
                    </div>
                </div>
            </div>
            
             <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-ambele-sensuri.png" alt="interzis-ambele-sensuri" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Circulatie interzisa in ambele sensuri</p>
                           <p class="right__text">
                            Se amplaseaza la intrarea pe drumurile pe care circulatia este interzisa in ambele sensuri.
                            Se poate permite accesul riveranilor (persoanele care locuiesc in zona), printr-un panou aditional.
                           </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-exceptie.png" alt="interzis-exceptie" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Accesul interzis autovehiculelor cu exceptia motocicletelor fara atas</p>
                           <p class="right__text">
                            Interzice accesul tuturor categoriilor de vehicule (autocamioane, autobuze, tractoare, motociclete cu atas), exceptie 
                            facand motocicletele fara atas, mopodele si vehiculele fara motor.
                            </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-motociclete.png" alt="interzis-motociclete" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Accesul interzis motocicletelor</p>
                           <p class="right__text">
                            Se amplaseaza la intrarea pe drumurile publice pe care accesul motocicletelor este interzis. 
                           </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-bicicleta.png" alt="interzis-biciclete" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Accesul interzis bicicletelor</p>
                           <p class="right__text">Se amplaseaza la intrarea pe drumurile publice pe care accesul bicicletelor si trotinetelor electrice este interzis.  </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-mopede.png" alt="interzis-mopede" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Accesul interzis mopedelor (ciclometrelor) </p>
                           <p class="right__text">
                            Se amplaseaza la intrarea pe drumurile publice pe care accesul mopedelor este interzis. 
                           </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-marfuri.png" alt="interzis-marfuri" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7: Accesul interzis vehiculelor destinate transportului de mărfuri</p>
                           <p class="right__text">
                            Se instaleaza la inceputul drumului public unde accesul vehiculelor destinate transporturilor de marfuri este interzis.
                            Acest indicator poate fi insotit de un panou aditional care precizeaza masa maxima admisa. Vehiculele care nu depasesc aceasta
                            masa pot sa circule pe sectorul respectiv
                           </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-remorca.png" alt="interzis-remorca" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">8: Accesul interzis autovehiculelor cu remorca, cu exceptia celor cu semiremorca sau cu remorca cu o osie</p>
                           <p class="right__text">
                            Se instaleaza la intrarea pe drumurile publice pe care accesul autovehiculelor cu remorca este interzis. Fac exceptie de la regula 
                            autovehiculele cu semiremorca sau cu remorca cu o osie.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-autobuze.png" alt="interzis-autobuze" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">9: Accesul interzis autobuzelor</p>
                           <p class="right__text">
                            Se instaleaza la intrarea pe drumurile publice pe care accesul autobuzelor este interzis.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-pietoni.png" alt="interzis-pietoni" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">10: Accesul interzis pietonilor</p>
                           <p class="right__text">
                            Se instaleaza la capatul drumurilor publice pe care accesul pietonilor este interzis, fie datorita lipsei
                            trotuarelor, fie in preajma unor obiective cu caracter special (unitati militare), fie datorita existentei
                            unei alte posibilitati de trecere sau traversare a locului respectiv (pasaje subterane).
                            Daca indicatorul se afla numai pe una dintre partile drumului, atunci circulatia pietonilor este interzisa 
                            numai pe acea parte. Pentru a se interzice accesul pietonilor pe ambele sensuri, se vor instala doua indicatoare, 
                            cate unul pe fiecare parte.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-tractiune-animala.png" alt="interzis-tractiune-animala" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">11: Accesul interzis vehiculelor cu tractiune animala</p>
                           <p class="right__text">
                            Se monteaza la intrarea pe drumurile publice pe care accesul vehiculelor cu tractiune animala este interzis.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-vehicule-impinse.png" alt="interzis-vehicule-impinse" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">12: Accesul interzis vehiculelor impinse sau trase cu mana</p>
                           <p class="right__text">
                            Se monteaza la intrarea pe drumurile publice pe care accesul vehiculelor impinse sau trase cu 
                            mana este interzis.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-tractoare.png" alt="interzis-tractoare" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">13: Accesul interzis tractoarelor si masinilor autopropulsate pentru lucrari</p>
                           <p class="right__text">
                            Se monteaza la intrarea pe drumurile publice unde este interzis accesul tractoarelor si masinilor autopropulsate pentru 
                            lucrari.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-autovehicule.png" alt="interzis-autovehicule" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">14: Accesul interzis autovehiculelor</p>
                           <p class="right__text">
                            Se monteaza la intrarea pe drumurile publice pe care accesul autovehiculelor (vehicule cu motor) este interzis.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-vehicule-tractiune-animala.png" alt="interzis-vehicule-tractiune-animala" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">15: Accesul interzis autovehiculelor si vehiculelor cu tractiune animala</p>
                           <p class="right__text">
                            Se monteaza la intrarea pe drumurile publice pe care accesul tuturor autovehiculelor (vehicule cu motor) 
                            si vehiculelor cu tractiune animala este interzis.

                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-latime-250.png" alt="interzis-latime-250" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">16: Accesul interzis vehiculelor cu latimea mai mare de ... m</p>
                           <p class="right__text">
                            Este amplasat pe sectoarele de drum cu latime redusa, dar si in intersectiile care preced aceste sectoare. 
                            In cel de-al doilea caz, indicatorul este insotit de un panou aditional pe care este precizata distanta pana 
                            la locul periculos. Latimea inscrisa pe indicator este cu 0,8 m mai mica decat latimea libera de trecere asigurata 
                            pe sectorul de drum respectiv. In acest caz le este interzis sa circule pe sectorul de drum respectiv vehiculelor 
                            cu latimea mai mare de 2,5 metri.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-inaltime-350.png" alt="interzis-inaltime-350" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">17: Accesul interzis vehiculelor cu inaltimea mai mare de .. m</p>
                           <p class="right__text">
                            Indicatorul rutier interzice accesul vehiculelor, daca inaltimea acestora, inclusiv 
                            a incarcaturii, depaseste dimensiunea inscrisa pe indicator (ex: capetele podurilor, pasaje inferioare, etc.).
                            In acest caz le este interzis sa circule pe sectorul de drum respectiv vehiculelor 
                            cu inaltimea mai mare de 3.5 metri.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-masa.png" alt="interzis-masa" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">18: Accesul interzis vehiculelor cu masa mai mare de .. t</p>
                           <p class="right__text">
                            Este intalnit pe drumurile publice, unde este interzis accesul vehiculelor cu masa mai mare decat cea
                            inscriptionata pe panou. In acest caz le este interzis sa circule pe sectorul de drum respectiv, vehiculelor 
                            cu masa mai mare de 7 tone.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-masa-osie.png" alt="interzis-masa-osie" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">19: Accesul interzis vehiculelor cu masa mai mare de ... t pe osia simpla</p>
                           <p class="right__text">
                            Este intalnit pe drumurile publice, unde este interzis accesul vehiculelor cu masa proprie 
                            inclusiv a incarcaturii pe osia simpla mai mare decat cea inscriptionata pe panou. In acest caz
                            le este interzis sa circule pe sectorul de drum respectiv, vehiculelor 
                            cu masa mai mare de 6.5 tone pe osia simpla.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-masa-osie-dubla.png" alt="interzis-masa-osie-dubla" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">20: Accesul interzis vehiculelor cu masa pe osia dubla mai mare de ... t</p>
                           <p class="right__text"> Este intalnit pe drumurile publice, unde este interzis accesul vehiculelor cu masa proprie 
                            inclusiv a incarcaturii pe osia dubla mai mare decat cea inscriptionata pe panou. In acest caz
                            le este interzis sa circule pe sectorul de drum respectiv, vehiculelor 
                            cu masa mai mare de 6.5 tone pe osia dubla.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-masa-osie-tripla.png" alt="interzis-masa-osie-tripla" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">21: Accesul interzis vehiculelor cu masa pe osia tripla mai mare de ... t</p>
                           <p class="right__text">Este intalnit pe drumurile publice, unde este interzis accesul vehiculelor cu masa proprie 
                            inclusiv a incarcaturii pe osia tripla mai mare decat cea inscriptionata pe panou. In acest caz
                            le este interzis sa circule pe sectorul de drum respectiv, vehiculelor 
                            cu masa mai mare de 22 tone pe osia tripla.
                           </p>
                    </div>
                </div>
            </div>

            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-ansambluri.png" alt="interzis-ansambluri" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">22: Accesul interzis autovehiculelor sau ansamblurilor de vehicule cu lungimea mai mare de ... m</p>
                           <p class="right__text">
                            Este intalnit pe drumurile publice, unde este interzis accesul vehiculelor cu lungimea (inclusiv a remorcii)
                             mai mare decat cea inscriptionata pe panou. In acest caz
                            le este interzis sa circule pe sectorul de drum respectiv, autovehiculelor sau ansamblurilor de vehicule 
                            cu lungimea mai mare de 10 metri.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-distanta.png" alt="interzis-distanta" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">23: Interzis autovehiculelor de a circula fara a mentine intre ele un interval de cel putin ... m</p>
                           <p class="right__text">
                            Se instaleaza pe sectorul de drum unde trebuie pastrata o distanta minima intre autovehicule. Poate fi 
                            insotit de un panou aditional pe care este inscrisa lungimea sectorului de drum pe care se impune restrictia. 
                            Raza de actiune a indicatorului se termina la intalnirea indicatorului "Sfarsitul tuturor restrictiilor".
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-viraj-stanga.png" alt="interzis-viraj-stanga" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">24: Interzis a vira la stanga</p>
                           <p class="right__text">
                            Este instalat inaintea intersectiei in care este interzis virajul la stanga, deoarece pe drumul respectiv 
                            circulatia se desfasoara intr-un singur sens sau intrucat executarea virajului ar pune in pericol ceilalti
                            participanti la trafic. Zona de actiune a indicatorului se termina dupa prima intersectie.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-viraj-dreapta.png" alt="interzis-viraj-dreapta" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">25: Interzis a vira la dreapta</p>
                           <p class="right__text">
                            Este instalat inaintea intersectiei in care este interzis virajul la dreapta, deoarece pe drumul respectiv 
                            circulatia se desfasoara intr-un singur sens sau intrucat executarea virajului ar pune in pericol ceilalti
                            participanti la trafic. Zona de actiune a indicatorului se termina dupa prima intersectie.
                           </p>
                    </div>
                </div>
            </div>


            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-intoarcere.png" alt="interzis-intoarcere" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">26: Intoarcerea interzisa</p>
                           <p class="right__text">
                            Interzice manevra de intoarcere pe sectorul de drum pe care este instalat, datorita periculozitatii 
                            efectuarii manevrei in acea zona si asigurarii fluentei traficului. Totodata, acesta interzice si manevra 
                            de mers inapoi.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-depasire.png" alt="interzis-depasire" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">27: Depasirea autovehiculelor, cu exceptia motocicletelor fara atas, interzisa</p>
                           <p class="right__text">
                            Se intalneste pe sectoarele de drum unde este interzisa depasirea autovehiculelor cu exceptia motocicletelor fara 
                            atas. Conducatorul auto nu are voie sa depaseasca niciun vehicul cu motor cand intalneste acest indicator (cu exceptia
                            motocicletelor cu atas), avand voie sa depaseasca vehiculele simple (biciclete, vehicule impinse sau trase cu mana, etc).
                            Raza de actiune a indicatorului se termina la intalnirea indicatorului "Sfarsitul interzicerii de a depasi" sau "Sfarsitul
                             tuturor restrictiilor", daca pe acel sector de drum a mai fost stabilita vreo restrictie. In zona sa de actiune este interzisa 
                             si oprirea (deci si stationarea, intoarcerea si mersul inapoi).
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-depasire-transport.png" alt="interzis-depasire-transport" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">28: Depasirea interzisa autovehiculelor destinate transportului de marfuri</p>
                           <p class="right__text">
                            Are rolul de a preciza inceputul sectorului de drum pe care depasirea este interzisa autovehiculelor destinate 
                            transportului de marfuri. Raza de actiune a indicatorului se termina la intalnirea indicatorului "Sfarsitul interzicerii
                             de a depasi" sau "Sfarsitul tuturor restrictiilor" daca pe acel sector de drum a mai fost stabilita vreo alta restrictie. 
                             Conducatorii autobuzelor, autoturismelor, motocicletelor au voie sa depaseasca. In zona sa de actiune este interzisa si oprirea 
                             (deci si stationarea, intoarcerea si mersul inapoi).
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/limitare-viteza.png" alt="limitare-viteza" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">29: Limitare de viteza</p>
                           <p class="right__text">
                            Este montat pe sectoarele de drum unde viteza autovehiculelor trebuie limitata. 
                            Zona de actiune incepe din dreptul indicatorului si se termina la intalnirea indicatorului
                             "Sfarsitul limitarii de viteza" sau "Sfarsitul tuturor restrictiilor".  Daca indicatorul este 
                             insotit si de un panou cu numele localitatii, atunci limita de viteza este valabila pentru intreaga localitate.
                             In cazul de fata, conducatorul auto trebuie sa circule cu o viteza de maxim 40km/h.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/limitare-viteza-categorii.png" alt="limitare-viteza-categorii" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">30: Limitare de viteza diferentiata pe categorii de autovehicule</p>
                           <p class="right__text">
                            Este montat pe sectoarele de drum unde viteza autovehiculelor trebuie limitata in functie de categoria
                            din care face parte. In acest caz, indicatorul interzice autovehiculelor de transport de marfa sa depaseasca
                            viteza de 30km/h, iar celorlalte autovehicule, le interzice sa circule cu mai mult de 50km/h.
                            Zona de actiune incepe din dreptul indicatorului si se termina la intalnirea indicatorului "Sfarsitul tuturor restrictiilor". 
                            Daca acest indicator este insotit si de indicatorul de localitate, atunci limita de viteza este valabila pentru intreaga localitate. 
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/vama.png" alt="vama" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">31: Vama</p>
                           <p class="right__text">
                            Este amplasat inaintea unui punct vamal. La intalnirea acestui indicator, conducatorul auto este obligat sa opreasca
                            la punctul vamal.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/taxa.png" alt="taxa" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">32: Taxa de trecere</p>
                           <p class="right__text">
                            Atentioneaza conducatorul auto cu privire la faptul ca, prin urmatoarea zona trecerea este permisa numai dupa 
                            platirea unei taxe.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/politie.png" alt="politie" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">33: Control politie</p>
                           <p class="right__text">
                            Este intalnit inaintea unei zone in care este prezenta politia.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/sfarsit-restrictii.png" alt="sfarsit-restrictii" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">34: Sfarsitul tuturor restrictiilor</p>
                           <p class="right__text">
                            Se monteaza, de regula, in zona in care se termina o restrictie (cand nu exista un indicator specific
                            pentru acest lucru), ori atunci cand se termina zona de actiune a doua sau mai multe indicatoare 
                            de restrictie.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/sfarsit-limitare.png" alt="sfarsit-limitare" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">35: Sfarsitul limitarii de viteza</p>
                           <p class="right__text">
                            Are rolul de a preciza sfarsitul unui sector de drum pe care era impusa o limita de viteza.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/sfarsit-interzicere-depasire.png" alt="sfarsit-interzicere-depasire" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">36: Sfarsitul interzicerii de a depasi</p>
                           <p class="right__text">
                            Are rolul de a preciza sfarsitul unui sector de drum pe care era impusa restrictia de depasire.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/stationare-interzisa.png" alt="stationare-interzisa" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">37: Stationare interzisa</p>
                           <p class="right__text">
                            La intalnirea acestui indicator stationarea vehiculelor este interzisa. Zona de actiune a indicatorului 
                            inceteaza la cel mai apropiat colt de intersectie pe sensul de mers. Acest indicator poate fi insotit si de alte 
                            panouri aditionale care marcheaza inceputul, continuarea sau sfarsitul zonei de actiune ("Inceputul zonei de actiune 
                            a indicatorului", "Confirmarea zonei de actiune a indicatorului", "Sfarsitul zonei de actiune a indicatorului") sau poate 
                            avea inscriptionate pe panou niste sageti cu aceeasi semnificatie.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/oprire-interzisa.png" alt="oprire-interzisa" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">38: Oprire interzisa</p>
                           <p class="right__text">
                            Interzice conducatorului auto sa opreasca. Poate fi insotit si de un panou aditional care marcheaza 
                            inceputul, continuare sau sfarsitul zonei de actiune a acestuia, sau poate avea inscriptionate pe panou 
                            sageti cu aceeasi seminificatie. Atunci cand nu este insotit de un panou aditional, zona de actiune a indicatorului 
                            inceteaza la prima intersectie.
                           </p>
                    </div>
                </div>
            </div>

            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/stationare-alternata.png" alt="stationare-alternata" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">39: Stationare alternata</p>
                           <p class="right__text">
                            Indicatorul alaturat se monteaza pe sectorul de drum in locurile in care stationarea vehiculelor este interzisa in zilele impare.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/stationare-alternata2.png" alt="stationare-alternata" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">40: Stationare alternata</p>
                           <p class="right__text">
                            Indicatorul alaturat se monteaza pe sectorul de drum in locurile in care stationarea vehiculelor este interzisa in zilele pare.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/stationare-limitata.png" alt="stationare-limitata" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">41: Zona de stationare cu durata limitata</p>
                           <p class="right__text">
                            Conducatorul auto va intalni acest indicator in locurile cu durata de stationare limitata. 
                            Poate fi insotit si de un panou aditional pe care sunt specificate intervalele de timp in care actioneaza 
                            indicatorul sau daca este perceputa vreo taxa. Zona de actiune a indicatorului este valabila pana la intalnirea 
                            indicatorului "Sfarsitul zonei de stationare cu durata limitata".0                    
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/sfarsit-stationare-limitata.png" alt="sfarsit-stationare-limitata" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">42: Sfarsitul zonei cu stationare limitata</p>
                           <p class="right__text">
                            Marcheaza sfarsitul zonei de stationare cu durata limitata.        
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/limitare-30.png" alt="limitare-30" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">43: Zona cu limitare de viteza la 30 km/h</p>
                           <p class="right__text">
                            Este montat in zona in care viteza de circulatie trebuie limitata la 30km/h.
                            Conducatorii de vehicule vor circula cu viteza maxima de 30km/h.
                            Sfarsitul zonei de actiune a acestui indicator este anuntat de indicatorul "Sfarsitul zonei cu 
                            viteza limitata la 30km/h".      
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/sfarsit-30.png" alt="sfarsit-30" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">44: Sfarsitul zonei de viteza limitata la 30 km/h</p>
                           <p class="right__text">
                            Este amplasat la sfarsitul zonei in care viteza de circulatie era limitata la 30km/h.       
                           </p>
                    </div>
                </div>
            </div>


            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-exploziv.png" alt="interzis-exploziv" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">45: Accesul interzis autovehiculelor care transporta substante explozive sau usor inflamabile</p>
                           <p class="right__text">
                            Interzice accesul vehiculelor care transporta substante explozive sau usor inflamabile. Se intalneste de obicei in zonele
                            intens populate sau in zonele unde unor astfel de substante ar constitui un pericol.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-marfuri-periculoase.png" alt="interzis-marfuri-periculoase" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">46: Accesul interzis vehiculelor care transporta marfuri periculoase</p>
                           <p class="right__text">
                            Se intalneste de obicei in zonele
                            intens populate sau in zonele unde unor astfel de marfuri ar constitui un pericol.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/interzis-poluare.png" alt="interzis-poluare" class="image">
                    </div>  
                    <div class="right">
                           <p class="right__title">47: Accesul interzis autovehiculelor care transporta substante de natura s polueze apele</p>
                           <p class="right__text">
                            Interzice accesul vehiculelor care transporta substante de natura sa polueze apele. Se intalneste de obicei in zonele
                            intens populate sau in zonele unde unor astfel de substante ar constitui un pericol.
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
                const puncte = 12;
                const categorie = 'Interzicere'
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