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
    <title>Indicatoare de orientare</title>
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
        <h1 class="title">Indicatoare de orientare</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">
            
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizarea-direcțiilor-la-o-intersecție-de-drumuri-din-afara-localității.png " alt="Presemnalizarea-direcțiilor-la-o-intersecție-de-drumuri-din-afara-localității direcțiilor la o intersecție de drumuri din afara localității" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1:Presemnalizarea direcțiilor la o intersecție de drumuri din afara localității</p>
                           <p class="right__text">Este instalat la 100-200 m de o intersectie de drumuri.<br>
                            In general, se instaleaza la intersectii de drumuri judetene, nationale sau la intersectii de drumuri nationale cu drumuri judetene. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizarea-direcțiilor-la-o-intersecție-denivelată-de-drumuri.png" alt="Presemnalizarea-direcțiilor-la-o-intersecție-denivelată-de-drumuri" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Presemnalizarea direcțiilor la o intersecție denivelată de drumuri</p>
                           <p class="right__text"> In localitate se amplaseaza la 50-100 m de intersectia denivelata de drumuri,<br>
                            iar in afara localitatii la 100-200 m. In general, se instaleaza la intersectii de drumuri judetene, nationale<br>
                            sau la intersectii de drumuri nationale cu drumuri judetene.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizarea-direcțiilor-indicate.png" alt="Presemnalizarea-direcțiilor-indicate" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3:Presemnalizarea direcțiilor indicate</p>
                           <p class="right__text">Poate fi intalnit in afara localitatilor, la 100-200 m de o intersectie.<br>
                            Are rolul de a informa conducatorul auto despre diferitele trasee pe care le poate urma. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizarea-traseului-de-ocolire-a-localității.png" alt="Presemnalizarea-traseului-de-ocolire-a-localității" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4:Presemnalizarea traseului de ocolire a localității</p>
                           <p class="right__text">Conducatorul auto va intalni acest indicator la 100-200 m de intersectia <br>
                            cu drumul de ocolire a localitatii (indicatorul marcand tocmai ruta ce permite evitarea localitatii).<br>
                             Pe indicator mai pot fi scrise si alte trasee, spre alte localitati importante. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizare-direcțiilor-într-o-intersecție-cu-sens-giratoriu.png" alt="Presemnalizare-direcțiilor-într-o-intersecție-cu-sens-giratoriu" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5:Presemnalizare direcțiilor într-o intersecție cu sens giratoriu</p>
                           <p class="right__text">Se monteaza in afara localitatilor, la 100-200 m de o intersectie cu sens giratoriu.,<br>
                             Are rolul de a informa conducatorul auto asupra diferitelor trasee. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Drum-închis-sau-deschis-circulației-publice.png" alt="Drum-închis-sau-deschis-circulației-publice" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Drum închis sau deschis circulației publice</p>
                           <p class="right__text">Se instaleaza pe drumurile publice pentru a-i informa<br>
                             pe conducatorii de vehicule daca un drum este deschis sau nu circulatiei publice. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizarea-traseului-de-urmat-în-cazul-unei-restricții-de-circulație.png" alt="Presemnalizarea-traseului-de-urmat-în-cazul-unei-restricții-de-circulație" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7: Presemnalizarea traseului de urmat în cazul unei restricții de circulație</p>
                           <p class="right__text">Conducatorul auto poate intalni acest indicator amplasat la 100-200 m de intersectia cu drumul de evitare.<br>
                            Acest indicator poate fi montat si in orase, avand un caracter permanent<br>
                            (cand indicatorul este negru pe un fond alb) sau un caracter temporar (cand indicatorul este negru pe un fond galben). </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizare-pe-autostradă-pentru-parcare.png" alt="Presemnalizare-pe-autostradă-pentru-parcare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">8: Presemnalizare pe autostradă pentru parcare</p>
                           <p class="right__text">Indicatorul alaturat se monteaza pe o autostrada pentru a indica<br>
                             conducatorilor auto spatiile special amenajate unde pot parca. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizare-pe-autostradă-pentru-spațiu-de-servicii.png" alt="Presemnalizare-pe-autostradă-pentru-spațiu-de-servicii" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">9: Presemnalizare pe autostradă pentru spațiu de servicii</p>
                           <p class="right__text">Are rolul de a preciza locul unde se afla spatiul de servicii, pe o autostrada.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Confirmarea-direcției-de-mers-pe-autostradă-spre-localități-mai-importante-și-distanțele-până-la-acestea.png" alt="Confirmarea-direcției-de-mers-pe-autostradă-spre-localități" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">10: Confirmarea direcției de mers pe autostradă spre localități mai importante și distanțele până la acestea</p>
                           <p class="right__text">Confirmarea directiei de mers pe autostrada spre localitati mai importante si distantele pana la acestea </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizarea-unui-loc-periculos-o-intersecție-sau-o-restricție-pe-un-drum-lateral.png" alt="Presemnalizarea-unui-loc-periculos-o-intersecție-sau-o-restricție-pe-un-drum-lateral" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">11: Presemnalizarea unui loc periculos, o intersecție sau o restricție pe un drum lateral</p>
                           <p class="right__text">In localitate se amplaseaza la 50-100 m, iar in afara localitatii<br>
                             la 100-200 m de un loc periculos sau de o alta restrictie. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Bandă-de-circulație-rezervată-autovehiculelor-de-transport-public-de-persoane.png" alt="Bandă-de-circulație-rezervată-autovehiculelor-de-transport-public-de-persoane" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">12: Bandă rezervată circulației de transport public de persoane</p>
                           <p class="right__text">Indicatorul din imaginea alaturata se amplaseaza in orase, pe drumurile cu mai multe benzi,<br>
                             pentru a informa conducatorul auto ca una dintre benzi este rezervata circulatiei autovehiculelor de transport public de persoane.<br>
                             Zona de actiune a indicatorului se termina la prima intersectie. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Drum-fără-ieșire.png" alt="Drum-fără-ieșire" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">13: Drum fără ieșire</p>
                           <p class="right__text">Se amplaseaza la intersectia drumului public cu un drum fara iesire. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Presemnalizarea-traseului-de-urmat-în-vederea-efectuării-virajului-la-stânga.png" alt="Presemnalizarea-traseului-de-urmat-în-vederea-efectuării-virajului-la-stânga" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">14: Presemnalizarea traseului de urmat în vederea efectuării virajului la stânga</p>
                           <p class="right__text">Indicatorul se aseaza inainte unei intersectii, care precede o alta intersectie in care virajul la stanga este interzis.<br>
                         Are rolul de a orienta conducatorul de vehicul asupra traseului pe care trebuie sa-l urmeze daca vrea sa vireze la stanga. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Traseu-de-urmat-pentru-anumite-categorii-de-autovehicule.png" alt="Traseu-de-urmat-pentru-anumite-categorii-de-autovehicule" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">15: Traseu de urmat pentru anumite categorii de autovehicule</p>
                           <p class="right__text">Se monteaza pe drumul public si are rolul de a-i orienta pe conducatorii fiecarei categorii de vehicule<br>
                            reprezentate pe indicator, asupra directiei pe care trebuie sa o urmeze: inainte.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Traseu-de-urmat-pentru-un-anumit-tip-de-autovehicule.png" alt="Traseu-de-urmat-pentru-un-anumit-tip-de-autovehicule" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">16: Traseu de urmat pentru un anumit tip de autovehicule</p>
                           <p class="right__text">Se monteaza pe drumul public si are rolul de a-i orienta pe conducatorii fiecarei categorii de vehicule<br>
                             reprezentate pe indicator, asupra directiei pe care trebuie sa o urmeze: la dreapta. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Traseu-de-urmat-pentru-un-anumit-tip-de-autovehicul.png" alt="Traseu-de-urmat-pentru-un-anumit-tip-de-autovehicul" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">17: Traseu de urmat pentru un anumit tip de autovehicul</p>
                           <p class="right__text">Se monteaza pe drumul public si are rolul de a-i orienta pe conducatorii fiecarei categorii de vehicule<br>
                            reprezentate pe indicator, asupra directiei pe care trebuie sa o urmeze: la stanga. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Selectarea-circulației-pe-direcții-de-mers-în-apropierea-intersecției.png" alt="Selectarea-circulației-pe-direcții-de-mers-în-apropierea-intersecției" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">18: Selectarea circulației pe direcții de mers în apropierea intersecției</p>
                           <p class="right__text">Se instaleaza pe drumurile publice, cu mai multe benzi pe sens,<br>
                        pentru ca soferii sa se poata incadra din timp pe banda corespunzatoare directiei de mers pe care vor sa o urmeze. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Selectarea-circulației-pe-direcții-de-mers-în-apropierea-intersecției2.png" alt="/Selectarea-circulației-pe-direcții-de-mers-în-apropierea-intersecției2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">19: Selectarea circulației pe direcții de mers în apropierea intersecției</p>
                           <p class="right__text">Se instaleaza pe drumurile publice, cu mai multe benzi pe sens, pentru ca soferii sa se poata incadra<br>
                            din timp pe banda corespunzatoare directiei de mers pe care vor sa o urmeze. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Selectarea-direcției-de-mers-în-apropierea-intersecției.png" alt="Selectarea-circulației-pe-direcții-de-mers-în-apropierea-intersecției" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">20: Selectarea direcției de mers în apropierea intersecției</p>
                           <p class="right__text">Se instaleaza pe drumurile publice, cu mai multe benzi pe sens, pentru ca soferii<br>
                             sa se poata incadra din timp pe banda corespunzatoare directiei de mers pe care vor sa o urmeze. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Bandă-destinată-circulației-vehiculelor-lente.png" alt="Bandă-destinată-circulației-vehiculelor-lente" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">21: Bandă destinată circulației vehiculelor lente</p>
                           <p class="right__text"> Este amplasat pe drumurile publice si are rolul de a orienta conducatorii auto asupra benzii pe care <br>
                             se deplaseaza vehiculele lente, cu viteze mai mici decat cea inscriptionata pe panou.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Terminarea-benzii-de-circulație-din-dreapta-a-părții-de-carosabil.png" alt="Terminarea-benzii-de-circulație-din-dreapta-a-părții-de-carosabil" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">22: Terminarea benzii de circulație din dreapta a părții de carosabil</p>
                           <p class="right__text">Indicatorul se monteaza pe drumurile publice avand rolul de a-i obliga pe conducatorii ce se deplaseaza<br>
                             pe o banda care se termina sa acorde prioritate vehiculelor care circula pe banda pe care vor intra. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Terminarea-benzii-de-circulație-din-stânga-părții-carosabile.png" alt="Terminarea-benzii-de-circulație-din-stânga-părții-carosabile" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">23: Terminarea benzii de circulație din stânga părții carosabile</p>
                           <p class="right__text">Indicatorul se monteaza pe drumurile publice avand rolul de a-i obliga pe conducatorii ce se deplaseaza<br>
                             pe o banda care se termina sa acorde prioritate vehiculelor care circula pe banda pe care vor intra.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Viteză-minimă-obligatorie-pentru-o-bandă-de-circulație.png" alt="Viteză-minimă-obligatorie-pentru-o-bandă-de-circulație" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">24: Viteză minimă obligatorie pentru o bandă de circulație</p>
                           <p class="right__text">Poate fi intalnit pe drumurile publice avand rolul de a-i obliga pe conducatorii de vehicule<br>
                            sa se incadreze pe banda corespunzatoare vitezei cu care se deplaseaza. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Viteză-minimă-obligatorie-pentru-diferite-benzi-de-circulație.png" alt="Viteză-minimă-obligatorie-pentru-diferite-benzi-de-circulație" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">25: Viteză minimă obligatorie pentru diferite benzi de circulație</p>
                           <p class="right__text">Poate fi intalnit pe drumurile publice avand rolul de a-i obliga pe conducatorii de vehicule<br>
                             sa se incadreze pe banda corespunzatoare vitezei cu care se deplaseaza.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Limitare-de-viteză-pentru-diferite-benzi-de-circulație.png" alt="Limitare-de-viteză-pentru-diferite-benzi-de-circulație" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">26: Limitare de viteză pentru diferite benzi de circulație</p>
                           <p class="right__text">Se amplaseaza pe drumurile cu mai multe benzi pe acelasi sens de circulatie.<br>
                            Are rolul de a-i obliga pe conducatorii auto sa circule cu o viteza mai mica decat cea inscrisa pe indicator pentru banda respectiva. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Bandă-rezervată-circulației-de-transport-public-de-persoane.png" alt="Bandă-de-circulație-rezervată-autovehiculelor-de-transport-public-de-persoane" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">27: Bandă de circulație rezervată autovehiculelor de transport public de persoane</p>
                           <p class="right__text">Acest indicator are rolul de a le interzice conducatorilor de vehicule<br>
                             sa circule pe benzile destinate exclusiv transportului public de persoane. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcția-spre-localitatea-indicată.png" alt="Direcția-spre-localitatea-indicată" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">28: Direcția spre localitatea indicată</p>
                           <p class="right__text"> Se amplaseaza in intersectii pentru a informa conducatorii auto asupra directiei pe care <br> 
                            trebuie sa o urmeze pentru a ajunge la localitatea inscriptionata pe indicator.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcție-spre-autostrada-indicată.png" alt="Direcție-spre-autostrada-indicată" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">29: Direcție spre autostrada indicată</p>
                           <p class="right__text">Se amplaseaza in intersectii pentru a informa conducatorii auto asupra directiei pe care trebuie<br>
                            sa o urmeze pentru a ajunge la localitatea inscriptionata pe indicator.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcția-spre-localitatea-indicată2.png" alt="Direcția-spre-localitatea-indicată2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">30: Direcția spre localitatea indicată</p>
                           <p class="right__text">Se amplaseaza in intersectii pentru a informa conducatorii auto asupra directiei pe care trebuie<br>
                             sa o urmeze pentru a ajunge la localitatea inscriptionata pe indicator. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcția-de-urmat-pentru-autovehiculele-destinate-transportului-de-mărfuri.png" alt="Direcția-de-urmat-pentru-autovehiculele-destinate-transportului-de-mărfuri" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">31: Direcția de urmat pentru autovehiculele destinate transportului de mărfuri</p>
                           <p class="right__text">Conducatorul auto poate intalni acest indicator la inceputul unei localitati si pe parcurul acesteia.<br>
                            Are rolul de a informa conducatorii de autovehicule destinate transportului de marfuri asupra traseului pe care trebuie sa-l urmeze. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcția-spre-obiectivul-turistic.png" alt="Direcția-spre-obiectivul-turistic" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">32: Direcția spre obiectivul turistic</p>
                           <p class="right__text">Acest indicator are rolul de a-i informa pe turisti in ce directie se afla obiectivele turistice. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcția-spre-obiective-locale.png" alt="Direcția-spre-obiective-locale" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">33: Direcția spre obiective locale</p>
                           <p class="right__text">Indicatorul din imagine se monteaza in localitati pentru a informa conducatorii de vehicule asupra directiei<br>
                             pe care trebuie sa o urmeze pentru a ajunge la obiectivul local inscriptionat pe indicator.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcția-spre-aeroport.png" alt="Direcția-spre-aeroport" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">34: Direcția spre aeroport</p>
                           <p class="right__text">Se monteaza la intersectia drumului public cu un drum de acces spre aeroport. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcția-de-urma-în-cazul-devierii-temporare-a-circulației.png" alt="" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">35: Direcția de urmat în cazul devierii temporare a circulației</p>
                           <p class="right__text">Este amplasat in intersectia de la care conducatorul auto<br>
                            trebuie sa urmeze o anumita directie in cazul devierii temporare a circulatiei. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcția-de-urma-în-cazul-devierii-temporare-a-circulației.png" alt="Direcția-de-urma-în-cazul-devierii-temporare-a-circulației" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">36: Direcția de urma în cazul devierii temporare a circulației</p>
                           <p class="right__text">Este amplasat in intersectia de la care conducatorul auto trebuie sa urmeze<br>
                             o anumita directie in cazul devierii temporare a circulatiei.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Drum-național.png" alt="Drum-național" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">37: Drum național</p>
                           <p class="right__text"> Are rolul de a confirma ca drumul pe care se afla conducatorul auto este un drum national.<br>
                             Numarul inscriptionat pe indicator reprezinta numarul drumului national.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Drum-judetean.png" alt="Drum-judetean" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">38: Drum județean</p>
                           <p class="right__text">Are rolul de a confirma ca drumul pe care se afla conducatorul auto este un drum judetean.<br>
                             Numarul inscriptionat pe indicator reprezinta numarul drumului judetean. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Drum-comunal.png" alt="Drum-comunal" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">39: Drum comunal </p>
                           <p class="right__text">Se monteaza in vederea confirmarii ca drumul pe care se afla conducatorul auto este un drum comunal.<br>
                            Numarul inscriptionat pe indicator reprezinta numarul drumului comunal.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Drum-deschis-traficului-internațional.png" alt="Drum-deschis-traficului-internațional" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">40: Drum deschis traficului internațional</p>
                           <p class="right__text">Drum deschis traficului internațional </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Direcția-drumului-deschis-traficului-internațional.png" alt="Direcția-drumului-deschis-traficului-internațional" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">41: Direcția drumului deschis traficului internațional</p>
                           <p class="right__text">Se amplaseaza in vederea confirmarii ca drumul pe care<br>
                             se afla conducatorul auto este un drum deschis traficului international. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Traseu-de-tranzit-european.png" alt="Traseu-de-tranzit-european" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">42:Traseu de tranzit european</p>
                           <p class="right__text">Traseu de tranzit european </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Simbolul-și-numărul-autostrăzii.png" alt="Simbolul-și-numărul-autostrăzii" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">43: Simbolul și numărul autostrăzii</p>
                           <p class="right__text">Simbolul și numărul autostrăzii </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Intrare-în-localitate.png" alt="Intrare-în-localitate" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">44: Intrare în localitate</p>
                           <p class="right__text">Se amplaseaza la intrarea intr-o localitate, marcand inceputul acesteia.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Intrare-în-localitate2.png" alt="Intrare-în-localitate" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">45: Intrare in localitate</p>
                           <p class="right__text">Se afla montat la intrarea intr-o localitate. Se specifica si viteza maxima admisa in localitatea respectiva.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Ieșire-din-localitate.png" alt="Ieșire-din-localitate" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">46:Ieșire din localitate</p>
                           <p class="right__text"> Conducatorul auto va intalni acest indicator la iesirea dintr-o localitate, <br>
                            daca pe urmatorii 300 m nu este instalat un alt indicator care sa indice intrarea intr-o alta localitate.</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Ieșire-din-localitate2.png" alt="Ieșire-din-localitate2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">47: Ieșire din localitate</p>
                           <p class="right__text">Se amplaseaza la iesirea dintr-o localitate. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Limitp-de-județ.png" alt="Limitp-de-județ" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">48: Limitp de județ</p>
                           <p class="right__text">Se amplaseaza la intrarea intr-un judet, marcand granita judeteana. </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Curs-de-apă-sau-viaduct.png" alt="Curs-de-apă-sau-viaduct" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">49:Curs de apă sau viaduct</p>
                           <p class="right__text"> Curs de apă sau viaduct</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Confirmarea-direcției-de-mers-spre-o-localitate-și-distanța-până-la-aceasta.png" alt="Confirmarea-direcției-de-mers-spre-o-localitate-și-distanța-până-la-aceasta" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">50: Confirmarea direcției de mers spre o localitate și distanța până la aceasta</p>
                           <p class="right__text"> Confirmarea direcției de mers spre o localitate și distanța până la aceasta</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Confirmarea-direcției-de-mers-spre-localități-mai-importante-și-distanțele-până-la-acestea.png" alt="Confirmarea-direcției-de-mers-pe-autostradă-spre-localități-mai-importante-și-distanțele-până" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">51: Confirmarea direcției de mers spre localități mai importante și distanțele până la acestea</p>
                           <p class="right__text">Confirmarea direcției de mers spre localități mai importante și distanțele până la acestea </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Organizarea-traficului-pe-benzi-de-circulație.png" alt="Organizarea-traficului-pe-benzi-de-circulație" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">52: Organizarea traficului pe benzi de circulație</p>
                           <p class="right__text">Organizarea traficului pe benzi de circulație </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deOrientare/Telefon-de-urgență(Poliție,Ambulanță,Pompieri,Depanare).png" alt="Telefon-de-urgență" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">53: Telefon de urgență (Poliție, Ambulanță, Pompieri, Depanare).</p>
                           <p class="right__text">Telefon de urgență (Poliție, Ambulanță, Pompieri, Depanare). </p>
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
                const puncte = 10;
                const categorie = 'Orientare';
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