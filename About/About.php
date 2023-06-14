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
    <link rel="stylesheet" href="style.css">
    <title>About</title>
</head>
<body>
    <div class="logo">
        <img src="../images/logo.png" alt="RoT" class="logo__image">
    </div>

    <div class="navigation">
        <img src="../images/rank.png" class="ranking navigation__link" alt="Clasament" onclick="window.location.href='../clasament/clasament.php'">
        <div class="center">
            <a class = "navigation__link" onclick="window.location.href='../home/home.php'">Pagina principala</a>
            <a class = "navigation__link" onclick="window.location.href='../Mediu/mediu.php'">Mediu de invatare</a>
            <a class = "navigation__link" onclick="window.location.href='../quiz/quiz.php'">Quiz</a>
            <a class = "navigation__link" onclick="window.location.href='../Mini-Game/mini-game.php'">Mini-Game</a>
            <a class = "navigation__link" onclick="window.location.href='about.php'">About</a>
            <a class = "navigation__link" onclick="window.location.href='../help/help.php'">Help</a>
        </div>
        <img src=<?php echo $profileImg;?>
         class="profile navigation__link" alt="Profil"
         onclick="window.location.href=<?php echo $link;?>">
    </div>

    <div class="intrebari">
        <p>
            Documentatia aplicatiei
        </p>
    </div>

    <div class="content">
        <p>
            <a onclick="window.location.href='../Documentatie/documentatie.html'"
             class="documentatie">Link documentatie</a>
        </p>
    </div>

    <div class="intrebari">
        <p>
            Cine suntem?
        </p>
    </div>

    <div class="content">
        <p>
            &#183; Suntem o echipă de oameni pasionați de siguranța în trafic. Am creat această aplicație web pentru a ajuta oamenii să învețe semnele de circulație și 
            regulile de circulație din țara noastră și din alte țări europene.
        </p>
    </div>

    <div class="intrebari">
        <p>
            Update-uri si noutati
        </p>
    </div>

    <div class="content">
        <p>
            &#183; Crearea paginii pentru Clasament <br>
            &#183; Crearea paginii Help <br>
            &#183; Schimbare logo site <br>
            &#183; Adaugarea de noi animatii pe pagina Help si pe pagina principala <br>
        </p>
    </div>

    <div class="intrebari">
        <p>
            Tehnologii folosite
        </p>
    </div>

    <div class="content">
        <p>
            &#183; HTML - Pentru a marca si structura conținutul unei pagini web<br>
            &#183; CSS - Pentru a stiliza si formata aspectul vizual al paginii web <br>
            &#183; JavaScript - Pentru a crea interactiunea si functionalitatea dinamica a paginii web <br>
            &#183; PHP - Server + interactiunea cu baza de date <br>
        </p>
    </div>

    <div class="intrebari">
        <p>
            Cu ce suntem mai buni față de ceilalți?
        </p>    
    </div>

    <div class="content">
        <p>
            &#183; Există multe aplicații web care oferă suport pentru învățarea semnelor rutiere și a regulilor de circulație, dar ceea ce ne diferențiază este că ne concentrăm pe contextul 
            specific al țării noastre și al altor țări europene. De asemenea, abordarea noastră ludică încurajează utilizatorii să învețe și să-și îmbunătățească abilitățile de conducere și 
            de traversare a străzilor.
            
        </p>
    </div>

    <div class="drepturi">
        <p>
            Ne puteți contacta la adresa de e-mail de mai jos:
        </p>
    </div>

    <div class="email">
        &#128231; contact@rot.com
    </div>
    <div class="footer">
        <div class="footer__nav">
          <a class = "nav_link" href="#">Confidentialitate</a>
          <a class = "nav_link" href="#">Info contact</a>
          <a class = "nav_link" href="#freq">Intrebari frecvente</a>
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