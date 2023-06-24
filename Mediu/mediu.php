<?php 
    include("../php/verifyConnection.php");
    $userSession = UserSession::getInstance();

    if($userSession->isConnected()){
        $link = "'../login/changePassOrLogout.php'";
        $profileImg = '"../images/profile_green.png"';
    }
    else {
        $link = "'../login/login.php'";
        $profileImg = '"../images/profile_red.png"';
    }

?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mediu de invatare</title>
</head>
<body>
    <div class="logo">
        <img src="../images/logo.png" alt="RoT" class="logo__image">
    </div>

    <div class="navigation">
        <img src="../images/rank.png" class="ranking navigation__link" alt="Clasament" onclick="window.location.href='../clasament/clasament.php'">
        <div class="center">
            <a class = "navigation__link" onclick="window.location.href='../home/home.php'">Pagina principala</a>
            <a class = "navigation__link" onclick="window.location.href='mediu.php'">Mediu de invatare</a>
            <a class = "navigation__link" onclick="window.location.href='../quiz/quiz.php'">Quiz</a>
            <a class = "navigation__link" onclick="window.location.href='../Mini-Game/mini-game.php'">Mini-Game</a>
            <a class = "navigation__link" onclick="window.location.href='../about/about.php'">About</a>
            <a class = "navigation__link" onclick="window.location.href='../help/help.php'">Help</a>
        </div>
        <img src=<?php echo $profileImg;?>
        class="profile navigation__link" alt="Profil"
        onclick="window.location.href=<?php echo $link;?>">    </div>
     
    <div class="content">
        <div class="overlay">
            <h1>Mediu de invatare</h1>          
            <img src="test.jpg" alt="bgimage" class="car-img">
        </div>
    <h2>Semne de circulatie pe categorii</h2>
    
    <div class="line1">
        <div class="wrapper" onclick="window.location.href='categorii/avertizare/avertizare.php'">
        <img src="avertizare.jpeg" alt="Photo 1">
        <p class="photo-caption">De avertizare</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/interzicererestrictie/interzicererestrictie.php'">
        <img src="interzicere.jpeg" alt="Photo 2">
        <p class="photo-caption">
        De interzicere sau restrictie</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/prioritate/prioritate.php'">
        <img src="prioritate.jpeg" alt="Photo 3">
        <p class="photo-caption">De prioritate</p>
    </div>
      </div>


      <div class="line1">
        <div class="wrapper" onclick="window.location.href='categorii/Obligare/obligare.php'">
        <img src="obligatorie.jpeg" alt="Photo 4">
        <p class="photo-caption">De obligare</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/DeInformare/informare.php'">
        <img src="deInformare.jpeg" alt="Photo 5">
        <p class="photo-caption">De informare</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/DeOrientare/orientare.php'">
        <img src="deOrientare.jpeg" alt="Photo 6">
        <p class="photo-caption">De orientare</p>
        </div>
      </div>


      <div class="line1">
        <div class="wrapper" 
        onclick="window.location.href='categorii/informareturistica/informareturistica.php'">
        <img src="deInformareTuristica.jpeg" alt="Photo 7">
        <p class="photo-caption">De informare turistica</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/panouriaditionale/panouriaditionale.php'">
        <img src="panouriAditionale.jpeg" alt="Photo 8">
        <p class="photo-caption">Panouri aditionale</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/semnaleluminoase/semnaleluminoase.php'">
        <img  id="photo-9" src="semnaleLuminoase.png" alt="Photo 9">
        <p class="photo-caption">Semnale luminoase</p>
        </div>
      </div>


      <div class="line1">
        <div class="wrapper" onclick="window.location.href='categorii/IndicatoareCaleFerata/IndicatoareCaleFerata.php'">
        <img  src="caleFerata.png" alt="Photo 10">
        <p id="text10" class="photo-caption">Indicatoare instalate la<br> trecerea cu calea ferata</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/IndicatoareKilometrice/IndicatoareKilometrice.php'">
        <img id="photo-10" src="indicatoareKm.png" alt="Photo 11">
        <p class="photo-caption">Indicatoare kilometrice</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/MijloaceSemnalizareLucrari/MijloaceSemnalizareLucrari.php'">
        <img  src="lucratori.png" alt="Photo 12">
        <p id="text12" class="photo-caption">Mijloace auxiliare de <br>semnalizare a lucratorilor</p>
        </div>
      </div>


      <div class="line1" >
        <div class="wrapper" onclick="window.location.href='categorii/BenziReversibile/BenziReversibile.php'">
        <img id="photo-13" src="benzireversibile.png" alt="Photo 13">
        <p id="text13" class="photo-caption">Dispozitive luminoase pentru<br>dirijarea circulatiei pe<br>benzi reversibile</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/MarcajeLongitudinale/MarcajeLongitudinale.php'">
        <img id="photo-14" src="marcajeLong.png" alt="Photo 14">
        <p class="photo-caption">Marcaje Longitudinale</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/MarcajeTransversale/MarcajeTransversale.php'">
        <img id="photo-15" src="marcajeTrans.png" alt="Photo 15">
        <p class="photo-caption">Marcaje Transversale</p>
        </div>
      </div>


      <div class="line1">
        <div class="wrapper" onclick="window.location.href='categorii/marcajediverse/marcajediverse.php'">
        <img  src="marcajeDiv.jpeg" alt="Photo 16">
        <p class="photo-caption">Marcaje Diverse</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/marcajelaterale/marcajelaterale.php'">
        <img id="photo-17" src="marcajeLat.jpeg" alt="Photo 17">
        <p class="photo-caption">Marcaje Laterale</p>
    </div>
    <div class="wrapper" onclick="window.location.href='categorii/indicatoaretemporare/temporare.php'">
        <img src="indicatoaretemp.jpeg" alt="Photo 19">
        <p id="text19" class="photo-caption">Indicatoare rutiere<br>temporare</p>
    </div>

    </div>
    </div>
    
    <div class="footer">
        <div class="footer__nav">
            <a class = "nav_link" href="#">Confidentialitate</a>
            <a class = "nav_link" href="#">Info contact</a>
            <a class = "nav_link" href="../help/help.php#freq">Intrebari frecvente</a>
            <a class = "nav_link" href="#">Termeni si conditii</a>
        </div>

        <div class="img_nav">
            <img src="../images/facebook.png" alt="facebook" class="icon">
            <img src="../images/twitter.png" alt="twitter" class="icon">
            <img src="../images/instagram.png" alt="instagram" class="icon">
            <img src="../images/reddit.png" alt="reddit" class="icon">
        </div>

        <p class="rot">Romanian Traffic Signs Tutor</p>
        <p class="rot">@RoT</p>
    </div>
</body>
</html>