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
    <title>Indicatoare de informare</title>
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
        <h1 class="title">Indicatoare de informare</h1>
        <div class="progress-bar">
            <div class="progress"></div>
          </div>
        <div class="slideshow">
  
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Direcția-și-distanța-până-la-telefonul-pentru-apel-de-urgență.png" alt="Direcția-și-distanța-până-la-telefonul-pentru-apel-de-urgență" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">1:Direcția și distanța până la telefonul pentru apel de urgență</p>
                           <p class="right__text">Direcția și distanța până la telefonul pentru apel de urgență </p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Rovignietă.png" alt="Rovignietă" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">2: Rovignietă</p>
                           <p class="right__text">Rovignietă</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Trecere-de-pietoni.png" alt="Trecere-de-pietoni" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">3: Trecere de pietoni</p>
                           <p class="right__text">Trecere de pietoni</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Trecere-pentru-pietoni2.png" alt="Trecere-pentru-pietoni2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">4: Trecere pentru pietoni</p>
                           <p class="right__text">Acest indicator se instaleaza in apropierea unei treceri pentru pietoni.<br>
                            Acesta poate fi precedat si de indicatorul "Presemnalizare trecere pentru pietoni".</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Limite-generale-de-viteză.png" alt="Limite-generale-de-viteză" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">5: Limite generale de viteză</p>
                           <p class="right__text">Se instaleaza dupa trecerea frontierei unui stat.<br>
                            Are rolul de a informa conducatorul de vehicul care sunt limitele generale de viteza aplicabile diferitelor categorii de drumuri.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Sens-unic.png" alt="Sens-unic" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">6: Sens unic</p>
                           <p class="right__text">Se monteaza la intrarea pe drumurile cu sens unic.<br>
                            Terminarea sectorului cu sens unic se semnalizeaza cu indicatorul "Circulatia in ambele sensuri".<br>
                            Pe drumul cu sens unic este interzisa manevra de intoarcere. Depasirea se poate face si pe partea stanga;<br>
                            se poate opri sau stationa si pe stanga; este permis mersul inapoi cel mult 50 m; este permis virajul stanga sau dreapta;<br>
                            virajul la stanga presupune incadrarea pe banda de langa bordura din stanga.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Sens-unic2.png" alt="Sens-unic2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">7:Sens unic</p>
                           <p class="right__text">Se afla instalat pe drumurile cu sens unic, atunci cand intrarea se face dintr-un drum lateral.<br>
                             Sageata indica sensul in care este obligat sa vireze conducatorul auto.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Autostrada.png" alt="Autostrada" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">8: Autostrada</p>
                           <p class="right__text">Conducatorul auto va intalni acest indicator la intrarea pe autostrada.<br>
                            La intalnirea acestui indicator conducatorii auto sunt obligati sa circule cu cel putin 50 km/h.<br>
                            Pe autostrada sunt interzise mersul inapoi, oprirea, stationarea, intoarcerea<br>
                            precum si circulatia sau imobilizarea voluntara pe banda de urgenta.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Sfârșit-de-autostradă.png" alt="Sfârșit-de-autostradă" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">9:Sfârșit de autostradă</p>
                           <p class="right__text">Acest indicator se monteaza la iesirea de pe o autostrada.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Limite-maxime-de-viteză-pe-autostradă-ân-funcție-de-condițiile-meteorologice.png" alt="Limite-maxime-de-viteză-pe-autostradă-ân-funcție-de-condițiile-meteorologice" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">10: Limite maxime de viteză pe autostradă, in funcție de condițiile meteorologice</p>
                           <p class="right__text">Se afla instalat pe autostrada pentru a impune conducatorilor auto sa circule cu limite diferite de viteza,<br>
                             in functie de conditiile meteorologice.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/spital.png" alt="spital" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">11: Spital</p>
                           <p class="right__text">Este montat in apropierea spitalelor pentru informarea conducatorilor auto<br>
                             in legatura cu existenta unei unitati medicale.<br>
                            Poate fi insotit de un panou aditional pe care este inscriptionata distanta pana la spital.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/politia.png" alt="politia" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">12: Politia</p>
                           <p class="right__text">Se amplaseaza in apropierea unui post de politie la care se pot declara accidentele de circulatie,<br>
                             precum si existenta obstacolelor intalnite pe drumul public. Pe indicator poate fi inscrisa si distanta pana la sediu.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Post-prim-ajutor.png" alt="Post-prim-ajutor" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">13:Post prim-ajutor</p>
                           <p class="right__text">Are rolul de a informa conducatorul auto ca in apropiere se afla un post de prim ajutor.<br>
                             Pe indicator poate fi inscrisa si distanta pana la respectivul punct.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/pasarela-pentru-pietoni.png" alt="pasarela-pentru-pietoni" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">14: Pasarelă pentru pietoni</p>
                           <p class="right__text">Se amplaseaza in apropierea pasarelelor pentru pietoni.<br>
                            Pentru traversarea drumurilor din zona pietonii sunt obligati sa circule folosind pasarela.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Pasaj-subteran-pentru-pietoni.png" alt="Pasaj-subteran-pentru-pietoni" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">15: Pasaj subteran pentru pietoni</p>
                           <p class="right__text">Se monteaza in apropierea unui pasaj subteran.<br>
                         Pentru traversarea drumurilor din zona pietonii sunt obligati sa circule prin pasaj.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Stație-de-autobuz.png" alt="Stație-de-autobuz" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">16: Stație de autobuz</p>
                           <p class="right__text">Se instaleaza pe trotuar, foarte aproape de partea carosabila, in statiile de autobuz sau troleibuz.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/statie-de-tramvai.png" alt="statie-de-tramvai" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">17: Stație de tramvai</p>
                           <p class="right__text">Se instaleaza atat pe trotuar (in cazul statiilor fara refugiu pentru pietoni),<br>
                             cat si in spatiile de refugiu (in cazul in care exista).</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Stație-de-taximetre.png" alt="Stație-de-taximetre" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">18:Stație de taximetre</p>
                           <p class="right__text">Se monteaza in locurile special amenajate pentru stationarea taxiurilor.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Drum-pentru-autovehicule.png" alt="Drum-pentru-autovehicule" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">19: Drum pentru autovehicule</p>
                           <p class="right__text">Se afla amplasat la intrarea pe drumurile pe care este permisa doar circulatia autovehiculelor.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Sfârșitul-drumului-pentru-autovehicule.png" alt="Sfârșitul-drumului-pentru-autovehicule" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">20: Sfârșitul drumului pentru autovehicule</p>
                           <p class="right__text">Conducatorul auto va intalni acest indicator la iesirea de pe drumurile pe care este permisa doar circulatia autovehiculelor.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/vulcanizare.png" alt="Vulcanizare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">21: Vulcanizare</p>
                           <p class="right__text">Este montat in apropierea unei vulcanizari. Pe indicator poate fi inscris si programul de functionare.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/telefon.png" alt="telefon" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">22: Telefon</p>
                           <p class="right__text">Are rolul de a indica conducatorului auto ca in apropiere se afla un telefon public.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Stație-alimentare-cu-carburant.png" alt="Stație-alimentare-cu-carburant" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">23: Stație alimentare cu carburant</p>
                           <p class="right__text">Se instaleaza in apropierea unei statii de alimentare cu combustibili pentru autovehicule.<br>
                             Pe indicator poate fi inscris si programul de functionare.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Stație-pentru-alimentare-cu-carburant-inclusiv-benzină-fără-plumb.png" alt="Stație-pentru-alimentare-cu-carburant-inclusiv-benzină-fără-plumb" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">24: Stație pentru alimentare cu carburant, inclusiv benzină fără plumb</p>
                           <p class="right__text">Se instaleaza in apropierea unei statii de alimentare cu combustibili pentru autovehicule.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Stație-de-alimentare-cu-carburanți-inclusiv-benzină-fără-plumb-și-gaz-petrolier-lichefiat.png" alt="Stație-de-alimentare-cu-carburanți-inclusiv-benzină-fără-plumb-și-gaz-petrolier-lichefiat" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">25: Stație de alimentare cu carburanți inclusiv benzină fără plumb și gaz petrolier lichefiat</p>
                           <p class="right__text">Se monteaza in apropierea unei statii de alimentare cu cu carburanti,<br>
                             incluziv benzina fara plumb si gaz petrolier lichefiat.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Hotel-sau-motel.png" alt="Hotel-sau-motel" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">26:Hotel sau motel</p>
                           <p class="right__text">Hotel sau motel</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/restaurant.png" alt="restaurant" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">27: Restaurant</p>
                           <p class="right__text">Restaurant</p>
                    </div>
                </div>
            </div>
            <!-- -->
          
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Bufet-sau-cofetărie.png" alt="Bufet-sau-cofetărie" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">28: Bufet sau cofetărie</p>
                           <p class="right__text">Bufet sau cofetărie</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Teren-pentru-camping-(tabără-turistică).png" alt="Teren-pentru-camping" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">29:Teren pentru camping (tabără turistică)</p>
                           <p class="right__text">Se monteaza in apropierea unui teren special amenajat pentru camping</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Teren-pentru-caravane-(tabără-turistică).png" alt="Teren-pentru-caravane" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">30: Teren pentru caravane (tabără turistică)</p>
                           <p class="right__text">Acest indicator poate fi intalnit in apropierea unui<br>
                             teren special amenajat pentru stationarea autovehiculelor si rulotelor.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Teren-pentru-caravane-și-camping.png" alt="Teren-pentru-caravane-și-camping" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">31: Teren pentru caravane și camping</p>
                           <p class="right__text">Conducatorul auto va intalni acest indicator in apropierea unui teren special amenajat<br>
                             pentru stationarea autovehiculelor si rulotelor si pentru camping.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Loc-pentru-popas.png" alt="Loc-pentru-popas" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">32: Loc pentru popas</p>
                           <p class="right__text">Are rolul de a informa ca in apropiere se afla un teren special amenajat pentru popasuri.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Cabană-pentru-turiști.png" alt="Cabană-pentru-turiști" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">33: Cabană pentru turiști</p>
                           <p class="right__text">Cabană pentru turiști</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/WC-public.png" alt="WC-public" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">34: WC public</p>
                           <p class="right__text">WC public</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/service-auto.png" alt="service-auto" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">35: Service auto</p>
                           <p class="right__text">Conducatorul auto poate intalni acest indicator in apropierea unui service auto.<br>
                             Pe indicator poate fi inscris si programul de functionare.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/parcare.png" alt="parcare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">36:Parcare</p>
                           <p class="right__text">Are rolul de a informa conducatorul auto ca in apropiere se afla un spatiu destinat parcarii.<br>
                             Pe indicator pot fi inscriptionate anumite reguli stabilite de administratorul responsabil.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/parcare2.png" alt="parcare2" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">37: Parcare</p>
                           <p class="right__text">Are rolul de a informa conducatorul auto ca in apropiere se afla un spatiu destinat parcarii.<br>
                             Pe indicator pot fi inscriptionate anumite reguli stabilite de administratorul responsabil.</p>
                    </div>
                </div>
            </div>
            <!-- -->
           
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Parcare-subterană-sau-în-clădire.png" alt="Parcare-subterană" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">38: Parcare subterană sau în clădire</p>
                           <p class="right__text">Se instaleaza in apropierea unei parcari subterane sau in cladire.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Complex-de-servicii.png" alt="Complex-de-servicii" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">39: Complex de servicii</p>
                           <p class="right__text">Se afla amplasat in apropierea unui complex ce ofera conducatorilor auto diverse servicii<br>
                            (restaurant, hotel, telefon, service auto). Pe indicator se inscriptioneaza si distanta pana la respectivul complex.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Zona-rezidențială.png" alt="Zona-rezidențială" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">40: Zona rezidențială</p>
                           <p class="right__text">Se monteaza la intrarea in zonele rezidentiale. Sunt zone cu trafic mixt, atat pietonal cat si auto,<br>
                            ceea ce ii obliga pe conducatorii auto sa circule cu viteza de cel mult 20 km/h.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Sfârșitul-zonei-rezidențiale.png" alt="Sfârșitul-zonei-rezidențiale" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">41: Sfârșitul zonei rezidențiale</p>
                           <p class="right__text">Se afla montat la iesirea din zonele rezidentiale.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Zonă-cu-viteză-recomandată-de-30-km-h.png" alt="Zonă-cu-viteză-recomandată-de-30" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">42: Zonă cu viteză recomandată de 30 km/h</p>
                           <p class="right__text">In general se amplaseaza in zonele urbane, in care viteza inscrisa pe indicator <br>
                           este considerata ca fiind potrivita pentru circulatia in conditii de siguranta. <br>
                           Viteza inscrisa pe indicator nu este viteza minima si nici maxima.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Sfârșitul-zonei-cu-viteză-recomandată-de-30-km-h.png" alt="Sfârșitul-zonei-cu-viteză-recomandată-de-30-km-h" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">43: Sfârșitul zonei cu viteză recomandată de 30 km/h</p>
                           <p class="right__text">Are rolul de a preciza sfarsitul zonei cu viteza recomandata.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/zona-pietonala.png" alt="zona-pietonala" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">44: Zonă pietonală</p>
                           <p class="right__text">Se monteaza la intrarea in zonele pietonale. Acestea reprezinta una sau mai multe strazi rezervate pietonilor,<br>
                            unde accesul vehiculelor se face numai daca se locuieste in zona sau presteaza servicii publice si nu exista alta posibilitate de acces.<br>
                             Conducatorii auto sunt obligati sa circule cu viteza de cel mult 5 km/h.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/sfarsitul-zonei-pietonale.png" alt="sfarsitul-zonei-pietonale" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">45:Sfârșitul zonei pietonale</p>
                           <p class="right__text">Are rolul de a preciza sfarsitul zonei pietonale.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Tunel.png" alt="Tunel" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">46: Tunel</p>
                           <p class="right__text">Se monteaza la intrarea intr-un tunel. Pe indicator poate fi inscrisa si lungimea tunelului.<br>
                             Se aprind obligatoriu luminile de intalnire. Toate manevrele sunt interzise cu exceptia depasirii<br>
                            vehiculelor fara motor, motocicletelor fara atas si mopedelor, cand vizibilitatea este peste 20 m si latimea drumului cel putin 7 m.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Sfârșit-de-tunel.png" alt="Sfârșit-de-tunel" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">47: Sfârșit de tunel</p>
                           <p class="right__text">Indicatorul se instaleaza la iesirea dintr-un tunel, marcand terminarea acestuia.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Îmbarcare-pe-vagoane-platformă-de-cale-ferată.png" alt="Îmbarcare-pe-vagoane-platformă-de-cale-ferată" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">48: Îmbarcare pe vagoane platformă de cale ferată</p>
                           <p class="right__text">Conducatorul auto va intalni acest indicator in zona de imbarcare pe vagoane platforma de cale ferata.<br>
                             La intalnirea acestui indicator conducatorul auto trebuie preventiv sa reduca viteza si sa circule cu atentie sporita.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Îmbarcare-pe-ferry-boat.png" alt="Îmbarcare-pe-ferry-boat" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">49:Îmbarcare pe ferry-boat</p>
                           <p class="right__text">Conducatorul auto va intalni acest indicator in zona de imbarcare pe ferry-boat.<br>
                            La intalnirea acestui indicator conducatorul auto trebuie preventiv sa reduca viteza si sa circule cu atentie sporita.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/port.png" alt="port" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">50: Port</p>
                           <p class="right__text">Se amplaseaza in apropierea unui port.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/gara.png" alt="gara" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">51: Gară</p>
                           <p class="right__text">Se amplaseaza in apropierea unei gari.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/autogara.png" alt="autogara" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">52: Autogară</p>
                           <p class="right__text">Se amplaseaza in apropierea unei autogari.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/inchirieri-auto.png" alt="inchirieri-auto" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">53: Închirieri auto</p>
                           <p class="right__text">Se amplaseaza in apropierea unui centru de inchirieri auto.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/plaja.png" alt="Plajă" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">54: Plajă</p>
                           <p class="right__text">Rovignietă</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Zonă-de-vânătoare.png" alt="Zonă-de-vânătoare" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">55: Zonă de vânătoare</p>
                           <p class="right__text">Se monteaza in apropierea unei zone de vanatoare.<br>
                            Pe indicator poate fi si o sageata care indica directia spre acesta zona.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Zonă-de-pescuit.png" alt="zona-de-pescuit" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">56: Zonă de pescuit</p>
                           <p class="right__text">Se monteaza in apropierea unei zone de pescuit.<br>
                            Pe indicator poate fi si o sageata care indica directia spre acesta zona.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/centru-vicol.png" alt="centru-vicol" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">57: Centru viticol</p>
                           <p class="right__text">Se instaleaza in apropierea unui centru viticol. Pe indicator poate fi scrisa si distanta in metri pana la aceste zone.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/zona-industriala.png" alt="zona-industriala" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">58: Zona industrială</p>
                           <p class="right__text">Se instaleaza in apropierea unei zone industriale. Pe indicator poate fi scrisa si distanta in metri pana la aceste zone.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/posta.png" alt="posta" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">59: Poșta</p>
                           <p class="right__text">Acest indicator se monteaza la 200 m de o posta.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/apa-potabila.png" alt="apa-potabila" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">60: Apă potabilă</p>
                           <p class="right__text">Se monteaza la 200 m de o instalatie de apa potabila.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Loc-de-joacă-pentru-copii.png" alt="Loc-de-joacă-pentru-copii" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">61:Loc de joacă pentru copii</p>
                           <p class="right__text">Se instaleaza in apropierea unui loc special amenajat pentru copii.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/stadion.png" alt="stadion" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">62: Stadion</p>
                           <p class="right__text">Indicatorul din imaginea alaturata se amplaseaza in apropierea unui stadion.<br>
                             Pe indicator poate fi inscrisa si denumirea stadionului.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/supermarket.png" alt="supermarket" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">63: Supermarket</p>
                           <p class="right__text">Se amplaseaza in apropierea unui supermarket. Pe indicator poate fi inscriptionata si distanta la care se afla.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Acces-internet.png" alt="Acces-internet" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">64: Acces internet</p>
                           <p class="right__text">Se amplaseaza in apropierea unui centru cu acces la internet.<br>
                             Pe indicator poate fi inscriptionata si distanta la care se afla.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Teatru.png" alt="Teatru" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">65: Teatru</p>
                           <p class="right__text">Indicatorul din imaginea alaturata se amplaseaza in apropierea unui teatru.<br>
                             Pe indicator poate fi inscrisa si denumirea teatrului.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Muzeu.png" alt="muzeu" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">66: Muzeu</p>
                           <p class="right__text">Indicatorul din imaginea alaturata se amplaseaza in apropierea unui muzeu.<br>
                            Pe indicator poate fi inscrisa si denumirea muzeului.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Cântar-pentru-autovehicule.png" alt="Cântar-pentru-autovehicule" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">67: Cântar pentru autovehicule</p>
                           <p class="right__text">Se amplaseaza in apropierea unui cantar pentru autovehicule. Pe indicator poate fi inscriptionata si distanta la care se afla.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Control-radar.png" alt="control-radar" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">68: Control radar</p>
                           <p class="right__text">Se afla instalat in apropierea unui post de control al vitezei vehiculelor.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Informații-rutiere.png" alt="Informații-rutiere" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">69: Informații rutiere</p>
                           <p class="right__text">Are rolul de a informa conducatorul auto care sunt frecventele radio din zona respectiva.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/viteza-recomandata.png" alt="viteza-recomandata" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">70: Viteză recomandată</p>
                           <p class="right__text">Se amplaseaza pe drumurile publice in care viteza inscrisa pe indicator este considerata ca fiind optima<br>
                           pentru circulatia in conditii de siguranta si pentru asigurarea unui trafic fluent.<br>
                           Viteza mentionata este viteza recomandata, nu minima sau maxima.</p>
                    </div>
                </div>
            </div>
            <!-- -->

            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Punct-de-informare-turistică.png" alt="Punct-de-informare-turistică" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">71: Punct de informare turistică</p>
                           <p class="right__text">Informeaza conducatorul ca in apropiere se afla un punct de informare turistica.</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Denumirea-străzii.png" alt="Denumirea-străzii" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">72: Denumirea străzii</p>
                           <p class="right__text">Denumirea străzii</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Intrare-stradă-indicată.png" alt="Intrare-stradă-indicată" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">73: Intrare stradă indicată</p>
                           <p class="right__text">Intrare stradă indicată</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Numărul-imobilului.png" alt="Numărul-imobilului" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">74: Numărul imobilului</p>
                           <p class="right__text">Numărul imobilului</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Monitorizare-trafic.png" alt="Monitorizare-trafic" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">75: Monitorizare trafic</p>
                           <p class="right__text">Monitorizare trafic</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Refugiu-rezervat-depanării.png" alt="Refugiu-rezervat-depanării" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">76: Refugiu rezervat depanării</p>
                           <p class="right__text"> Refugiu rezervat depanării</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Presemnalizarea-sediului-Poliției-autostrăzii.png" alt="Presemnalizarea-sediului-Poliției-autostrăzii" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">77: Presemnalizarea sediului Poliției autostrăzii</p>
                           <p class="right__text">Presemnalizarea sediului Poliției autostrăzii</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Distanța-de-siguranță-între-vehiculele-pentru-viteze-de-cel-mult-60-km-h.png" alt="Distanța-de-siguranță-între-vehiculele-pentru-viteze-de-cel-mult-60" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">78: Distanța de siguranță între vehiculele pentru viteze de cel mult 60 km/h</p>
                           <p class="right__text">Distanța de siguranță între vehiculele pentru viteze de cel mult 60 km/h</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Distanța-de-siguranță-între-vehiculele-pentru-viteze-mai-maride-90-km-h.png" alt="Distanța-de-siguranță-între-vehiculele-pentru-viteze-mai-maride-90-km-h" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">79: Distanța de siguranță între vehiculele pentru viteze mai maride 90 km/h</p>
                           <p class="right__text">Distanța de siguranță între vehiculele pentru viteze mai maride 90 km/h</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="slide">
                <div class="rectangle">
                    <div class="left">
                        <img src="semne/deinformare/Acces-pe-bază-de-tichet.png" alt="Acces-pe-bază-de-tichet" class="image">
                    </div>
                    <div class="right">
                           <p class="right__title">80: Acces pe bază de tichet</p>
                           <p class="right__text">Acces pe bază de tichet</p>
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
                const puncte = 15;
                const categorie = 'Informare';
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