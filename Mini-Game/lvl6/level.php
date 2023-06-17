<?php 
    include("../../php/verifyConnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Level 6</title>
</head>
<body>
    <?php if($conectat == 1): ?>
    <div class="content">
        <div class="left-content">
            <p class="text">Trage semnul/semnele aici</p>
            <div class="patrat droppable">1</div>
            <button class="btn">Finish</button>
        </div>
        <div class="middle-content">
            <img src="level6.png" alt="lvl6" class="image">
        </div>
        <div class="right-content">
            <p class="text">Alege semnul care trebuie montat in locul patratului 1</p>
            <div class="image-list">
                <img src="../../mediu/categorii/avertizare/semne/accident.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/acostament-periculos.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/aeroport.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/alte-pericole.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/animale.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/baliza-dreapta.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/baliza-stanga.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/biciclisti.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/caderi-pietre.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/cale-ferata-bariere.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/cale-ferata-dubla-fara-bariere.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/circulatie-ambele-sensuri.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/cale-ferata-fara-bariere1.jpg" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/coborare-periculoasa.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/copii.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/curba-deosebit-de-periculoasa.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/curba-dubla-dreapta.webp" alt="1" class="draggable" valid="valid1">
                <img src="../../mediu/categorii/avertizare/semne/curba-dubla.jpg" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/curba-la-dreapta.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/curba-la-stanga.jpg" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/denivelare-limitarea-vitezei.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/drum-aglomerat.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/drum-alunecos.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/drum-denivelari.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/drum-ingustat-ambele-parti.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/drum-ingustat-dreaptapng.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/drum-ingustat-stanga.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/improscare-piatra.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/intersectie-drumuri.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/intersectie-fara-prioritate.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/intersectie-fara-prioritate4.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/lucrari.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/masini-agricole.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/panour-succesive.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/presemnalizare-amenajare-rutiera.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/presemnalizare-giratoriu.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/presemnalizare-trecere.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/urcare-periculoasajpeg.jpeg" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/vant-lateral.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/avertizare/semne/zona-accident.jpg" alt="1" class="draggable">

                <img src="../../mediu/categorii/interzicererestrictie/semne/acces-interzis.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/claxonarea-interzisa.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-ambele-sensuri.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-ansambluri.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-autobuze.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-autovehicule.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-bicicleta.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-depasire.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-distanta.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-exceptie.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-inaltime-350.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-intoarcere.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-latime-250.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-marfuri-periculoase.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-marfuri.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-masa.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-mopede.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-motociclete.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-pietoni.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-poluare.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-tractiune-animala.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-tractoare.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-vehicule-impinse.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-viraj-stanga.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/interzis-viraj-dreapta.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/limitare-30.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/sfarsit-limitare.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/sfarsit-restrictii.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/stationare-alternata.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/stationare-interzisa.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/interzicererestrictie/semne/oprire-interzisa.png" alt="1" class="draggable">

                <img src="../../mediu/categorii/prioritate/semne/cedeaza.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/prioritate/semne/prioritate-fata-de-sens-opus.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/prioritate/semne/prioritate-sens-opus.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/prioritate/semne/prioritate.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/prioritate/semne/sfarsit-prioritate.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/prioritate/semne/stop.png" alt="1" class="draggable">

                <img src="../../mediu/categorii/Obligare/semne/deobligare/Delimitare-piste-pentru-pietoni-și-biciclete.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/Direcție-obligatorie-pentru-autovehiculele-care-transportă-mărfuri-periculoase.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/drum-obligatoriu-pentru-categ-de-vehicule.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/drum-pentru-pietoni.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/inainte.jpeg" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/inante-sau-la-dreapta.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/intersectie-cu-sens-giratoriu.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/la-dreapta2.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/pista-pentru-biciclete.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/ocolire.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/ocolire2.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/Viteză-minimă-obligatorie.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/Obligare/semne/deobligare/pista-pentru-biciclete.png" alt="1" class="draggable">
            
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/Acces-internet.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/apa-potabila.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/autogara.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/centru-vicol.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/Control-radar.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/Drum-pentru-autovehicule.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/inchirieri-auto.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/Parcare-subterană-sau-în-clădire.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/parcare.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/parcare2.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/politia.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/service-auto.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/spital.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/Stație-de-autobuz.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/Sens-unic.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/stadion.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/telefon.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/zona-pietonala.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/Îmbarcare-pe-ferry-boat.png" alt="1" class="draggable">
                <img src="../../mediu/categorii/DeInformare/semne/deinformare/Zonă-cu-viteză-recomandată-de-30-km-h.png" alt="1" class="draggable">


            </div>
        </div>
    </div>
    <?php else: ?>
        <p style="font-size: 5vw; color: red;">Nu esti conectat</p>
    <?php endif;?>
    <script src="script.js"></script>
</body>
</html>