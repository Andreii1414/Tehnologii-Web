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
    <title>Indicatoare rutiere temporare</title>
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
        <h1 class="title">Indicatoare rutiere temporare</h1>
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
                           <p class="right__title">1: Drum ingustat pe ambele parti</p>
                           <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila.
                            Se instaleaza la 100-200 metri de locul in care sectorul de drum incepe sa se ingusteze
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
                        <img src="semne/2.png" alt="2" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">2: Drum ingustat pe partea stanga</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Se instaleaza la 100-200 metri de locul in care sectorul de drum incepe sa se ingusteze
                        pe partea stanga cu cel putin jumatate de metru.
                       <br>  Recomandari pentru conducatorul auto: Este obligat sa reduca viteza. Sunt interzise manevrele:
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
                        <img src="semne/3.png" alt="3" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">3: Drum ingustat pe partea dreapta</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Se instaleaza la 100-200 metri de locul in care sectorul de drum incepe sa se ingusteze
                            pe partea dreapta cu cel putin jumatate de metru.
                           <br>  Recomandari pentru conducatorul auto: Este obligat sa reduca viteza. Sunt interzise manevrele:
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
                        <img src="semne/4.png" alt="4" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">4: Acostament periculos</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Se intalneste de obicei pe sectoarele de drum unde se executa lucrari, iar acostamentul 
                            din zona reprezinta un pericol.
                             Este interzisa manevra de intoarcere deoarece soliditatea drumului nu permite aceasta
                       manevra.
                      </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/5.png" alt="5" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">5: Drum cu denivelari</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Este amplasat cu 50-200 metri inainte de portiunea de drum care prezinta denivelari.
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
                        <img src="semne/6.png" alt="6" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">6: Drum alunecos</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Se amplaseaza la 100-200 de metri de locul alunecos. 
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
                        <img src="semne/7.png" alt="7" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">7: Improscare cu pietris</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Se amplaseaza la 100-200 de metri inainte de sectorul de drum periculos.
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
                        <img src="semne/lucrari.png" alt="8" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">8: Lucrari</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Se instaleaza la 20-200 m de sectorul de drum pe care se executa lucrari. Fondul de culoare galbena semnifica caracterul temporar al lucrarii. 
                            Recomandari pentru conducatorul auto: sa reduca preventiv viteza. Indicatorul este plasat uneori alaturi de alte indicatoare cum ar fi 
                            "Drum ingustat", "Limitare de viteza", etc..
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/9.png" alt="9" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">9: Semafoare</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Se instaleaza la 30-200 m de locul in care se afla semaforul, daca se considera ca prezenta semaforului ar putea surprinde conducatorii
                            auto.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/10.png" alt="10" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">10: Circulatie in ambele sensuri</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Este intalnit la iesirea de pe un drum public cu sens unic
                            Atentioneaza conducatorul auto ca pe sectorul de drum urmator se va circula in ambele sensuri.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/11.png" alt="11" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">11: Alte pericole</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Este amplasat la 50-200 de metri inainte de locul periculos, in orice situatie periculoasa care nu este prevazuta de alt 
                            indicator rutier de avertizare. La intalnirea acestui indicator, conducatorul auto trebuie sa circule cu viteza redusa si sa sporeasca atentia.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/12.png" alt="12" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">12: Prioritate pentru circulatia din sens invers</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Este intalnit pe sectoarele cu drum ingustat, unde nu au loc sa circule doua vehicule unul pe langa celalalt. 
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
                        <img src="semne/13.png" alt="13" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">13: Limitare de viteza</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Este montat pe sectoarele de drum unde viteza autovehiculelor trebuie limitata. 
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
                        <img src="semne/14.png" alt="14" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">14: Sfarsitul tuturor restrictiilor</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Se monteaza, de regula, in zona in care se termina o restrictie (cand nu exista un indicator specific
                            pentru acest lucru), ori atunci cand se termina zona de actiune a doua sau mai multe indicatoare 
                            de restrictie.
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
                        <p class="right__title">15: Sfarsitul interzicerii de a depasi</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Are rolul de a preciza sfarsitul unui sector de drum pe care era impusa restrictia de depasire.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/16.jpg" alt="16" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">16: Depasirea autovehiculelor, cu exceptia motocicletelor fara atas, interzisa </p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Se intalneste pe sectoarele de drum unde este interzisa depasirea autovehiculelor cu exceptia motocicletelor fara 
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
                        <img src="semne/17.png" alt="17" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">17: Deviere temporarara </p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila, indicand directia temporara 
                            spre localitatea inscrisa pe indicatorul rutier.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/18.png" alt="18" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">18: Deviere temporarara </p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila, indicand directia temporara 
                            spre localitatea inscrisa pe indicatorul rutier, pentru o anumita categorie de autovehicule (prezenta, de asemenea pe 
                            indicatorul rutier).
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/19.png" alt="19" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">19: Deviere temporarara </p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila, indicand directia de ocolire temporara.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/20.png" alt="20" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">20: Deviere temporarara </p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila, indicand directia de ocolire temporara.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/21.png" alt="21" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">21: Denivelare fata de banda anterioara </p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila, semnalizand ca 
                            urmeaza o denivelare fata de banda anterioara.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/22.png" alt="22" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">22: Ingustare temporara</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Indicatorul rutier se monteaza pe sectoarele de drum, inaintea terminarii unei 
                            benzi de circulatie. Vehiculele care circula pe banda care se termina (banda 2) si intentioneaza sa vireze pe prima banda, vor 
                            trebui sa acorde prioritate.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/23.png" alt="23" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">23: Ingustare temporara</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Indicatorul rutier se monteaza pe sectoarele de drum, inaintea terminarii unei 
                            benzi de circulatie. Vehiculele care circula pe banda care se termina (banda 1) si intentioneaza sa vireze pe a doua banda, vor 
                            trebui sa acorde prioritate.
                           </p>
                    </div>
                </div>
            </div>
           
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/24.png" alt="24" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">24: Abatere temporara</p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila, iar drumul prezinta 
                            o abatere temporara. Indicatorul nu permite patrunderea vehiculelor destinate transporturilor de marfuri, pe 
                            banda respectiva.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/25.png" alt="25" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">25: Abatere temporara</p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila, iar drumul prezinta 
                            o abatere temporara.
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
                        <p class="right__title">26: Abatere temporara</p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila, iar drumul prezinta 
                            o abatere temporara.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/27.png" alt="27" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">27: Terminarea abaterii temporare</p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila, la terminarea 
                            abaterii temporare.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/28.png" alt="28" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">28: Ingustare temporara</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Indicatorul rutier se monteaza pe sectoarele de drum, inaintea terminarii unei 
                            benzi de circulatie. Vehiculele care circula pe banda care se termina (banda 3) si intentioneaza sa vireze pe a doua banda, vor 
                            trebui sa acorde prioritate.
                           </p>
                    </div>
                </div>
            </div>

            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/29.png" alt="29" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">29: Ingustare temporara</p>
                        <p class="right__text">
                            Indicatoarele rutiere pe fond galben au caracter temporar si sunt intalnite pe sectoarele de drum unde se executa 
                            lucrari pe partea carosabila. Indicatorul rutier se monteaza pe sectoarele de drum, inaintea terminarii unei 
                            benzi de circulatie. Vehiculele care circula pe banda care se termina (banda 1) si intentioneaza sa vireze pe a doua banda, vor 
                            trebui sa acorde prioritate.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/30.png" alt="30" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">30: Presemnalizarea rutei ocolitoare</p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila. In acest caz indicatorul 
                            rutier presemnalizeaza o ruta ocolitoare aflata la 500 de metri de indicator.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/31.png" alt="31" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">31: Presemnalizarea rutei ocolitoare</p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila. In acest caz indicatorul 
                            rutier presemnalizeaza o ruta ocolitoare pentru vehiculele destinate transporturilor de marfuri.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/32.png" alt="32" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">32: Presemnalizarea rutei ocolitoare</p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila. In acest caz indicatorul 
                            rutier presemnalizeaza o ruta ocolitoare pentru vehiculele cu masa mai mare de 7 tone.
                           </p>
                    </div>
                </div>
            </div>
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/33.png" alt="33" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">33: Marcaje rutiere</p>
                        <p class="right__text">
                            Se instaleaza pe sectoarele de drum unde se executa lucrari pe partea carosabila.
                            Conducatorii auto sunt obligati sa ocoleasca indicatorul prin partea dreapta, sa nu depaseasca autovehicule si sa nu 
                            circule cu o viteza mai mare de 40km/h.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/34.png" alt="34" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">34: Semnalizarea unui utilaj care se deplaseaza lucrand</p>
                        <p class="right__text">
                            Semnalizeaza prezenta unui utilaj care se deplaseaza lucrand.
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
                        <p class="right__title">35: Succesiune de puncte de lucru</p>
                        <p class="right__text">
                            Semnalizeaza o succesiune de lucru pe o distanta de 7km. Conducatorii auto sunt obligati sa nu circule cu 
                            o viteza mai mare de 40km/h.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/36.png" alt="36" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">36: Presemnalizarea unui sector cu circulatie alternanta</p>
                        <p class="right__text">
                            Presemnalizeaza un sector cu circulatie alternanta, aflat la 400 de metri de locul unde este amplasat indicatorul 
                            rutier. Indicatorul avertizeaza ca drumul se ingusteaza, de asemenea, pe partea carosabila pot aparea persoane care 
                            lucreaza la sectorul de drum respectiv si drumul prezinta pericol de accidente.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/37.png" alt="37" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">37: Presemnalizarea unui sector cu circulatie alternanta</p>
                        <p class="right__text">
                            Presemnalizeaza un sector cu circulatie alternanta, aflat la 400 de metri de locul unde este amplasat indicatorul 
                            rutier. Indicatorul avertizeaza ca urmeaza o intersectie semaforizata, de asemenea, pe partea carosabila pot aparea persoane care 
                            lucreaza la sectorul de drum respectiv si drumul prezinta pericol de accidente.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/38.png" alt="38" class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">38: Lucrari de tratamente a suprafetei partii carosabile</p>
                        <p class="right__text">
                            Semnalizeaza un sector de drum pe care se executa lucrari de tratamente a suprafetei carosabile. 
                            Conducatorii auto trebuie sa respecte semnificatia indicatoarelor afisate pe panou.
                           </p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/39.png" alt="39 " class="image">
                    </div>
                    <div class="right">
                        <p class="right__title">39: Presemnalizare lucrari pe strazi</p>
                        <p class="right__text">
                            Presemnalizeaza un sector de drum (spre dreapta) unde se executa lucrari pe partea carosabila.
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
                const categorie = 'Temporare';
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