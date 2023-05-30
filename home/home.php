<?php 
    include("../php/verifyConnection.php");

    if($conectat == 1){
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Pagina principala</title>
</head>
<body>
    <div class="logo">
        <img src="../images/logo.png" alt="RoT" class="logo__image">
    </div>

    <div class="navigation">
        <img src="../images/rank.png" class="ranking navigation__link" alt="Clasament" onclick="window.location.href='../Clasament/clasament.php'">
        <div class="center">
            <a class = "navigation__link" onclick="window.location.href='home.php'">Pagina principala</a>
            <a class = "navigation__link" onclick="window.location.href='../Mediu/mediu.php'">Mediu de invatare</a>
            <a class = "navigation__link" onclick="window.location.href='../quiz/quiz.php'">Quiz</a>
            <a class = "navigation__link" onclick="window.location.href='../about/about.php'">About</a>
            <a class = "navigation__link" onclick="window.location.href='../help/help.php'">Help</a>
        </div>
        <img src=<?php echo $profileImg;?>
         class="profile navigation__link" alt="Profil"
         onclick="window.location.href=<?php echo $link;?>">
    </div>

    <div class="content">
        <div class="content__home">
        <h2 class="welcome-text">
            Bine ai venit pe pagina Romanian Traffic Signs Tutor!
        </h2>
        <h2 class="inv">a</h2>
        </div>

        <h3 class="text-info">Te ajutam sa inveti semnele rutiere si regulile de circulatie intr-un mod eficient. In functie de progres, dar si de rezultatele
            tale la chestionare, vei primi puncte si vei putea intra in clasamentul nostru disponibil aici: 
             <a href="../clasament/clasament.php" class="link">Clasament</a> <br> <br>
             Pentru a putea face insa parte din acest clasament, va trebui sa iti creezi un cont. Poti face asta aici: 
             <a href="../login/signup.php" class="link">Sign up</a> <br> <br>
             Mai jos vei avea o scurta prezentare a paginii noastre. Iti uram succes!
        </h3>

        <div class="box" onclick="window.location.href='../Mediu/mediu.php'">
            <div class="box__left mediu-page"><p class="inv2">aaa</p></div>
            <div class="box__right">
                <h2>Mediul de invatare</h2>
                <p>In aceasta sectiune vei avea puse la dispozitie toate tipurile de semne de circulatie. Fiecare semn de circulatie
                    va avea o descriere, o semnificatie, si alte detalii relevante,
                     in functie de semn. De asemenea, la finalul fiecarei categorii de semne, vei avea un chestionar. Atentie, chestionarul
                     va putea fi realizat de mai multe ori, insa doar rezultatul obtinut prima data va conta la punctajul care este afisat in 
                     clasament.
                </p>

            </div>
        </div>
        <div class="box" onclick="window.location.href='../about/about.php'">
            <div class="box__left about-page"><p class="inv2">aaa</p></div>
            <div class="box__right">
                <h2>About</h2>
                <p>In aceasta sectiune vei putea citi cateva cuvinte despre echipa de dezvoltare, dar si cum ne poti contacta.
                     Daca esti curios ce tehnologii au fost utilizate la crearea site-ului, poti accesa pagina About, unde am descris 
                     tehnologiile folosite. De asemenea, principalele update-uri le veti gasi la sectiunea specifica a acestei pagini.
                </p>
            </div>
        </div>
        <div class="box" onclick="window.location.href='../help/help.php'">
            <div class="box__left help-page"><p class="inv2">aaa</p></div>
            <div class="box__right">
                <h2>Help</h2>
                <p>In aceasta sectiune vei putea gasi informatii care sa te ajute in cazul in care intampini o problema si nu numai.
                   Daca ai o intrebare, s-ar putea sa gasesti raspunsul pe pagina Help la "Intrebari frecvente". Intrebarile frecvente 
                   sunt actualizate permanent. De asemenea, daca esti curios cum functioneaza site-ul, vei gasi aici raspunsul si la
                   aceasta intrebare. 
                </p>
            </div>
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