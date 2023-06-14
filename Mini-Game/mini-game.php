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
  <script src="https://kit.fontawesome.com/30c0cebaef.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>Mini-Game</title>
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
            <a class = "navigation__link" onclick="window.location.href='../about/about.php'">About</a>
            <a class = "navigation__link" onclick="window.location.href='../help/help.pph'">Help</a>
        </div>
        <img src=<?php echo $profileImg;?>
        class="profile navigation__link" alt="Profil"
        onclick="window.location.href=<?php echo $link;?>">    </div>
    </div>

    <div class="content">
        <div class="overlay">
            <h1>Mini-Game</h1>     
            <img src="mini-game.jpg" alt="bgimage" class="car-img">
        </div>
     
        <h2 class="text">•Bine ai venit la sectiunea "Mini-game". Daca nu ai trecut prin mediul de invatare , iti recomandam sa o faci <a1 class="text" onclick="window.location.href='../Mediu/mediu.php'">aici.</a1> </h2>
        <?php if($conectat == 1) echo "<h7>Selecteaza un nivel</h7>"; 
        else echo '<h7 style="color:red">Trebuie sa fii conectat pentru a putea selecta un nivel!</h7>'?> 

          <div class="line1">
            <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl1/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 1</p>
        </div>
        <div class="wrapper"  <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl2/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 2</p>
        </div>
        <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl3/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 3</p>
        </div>
          </div>
          <div class="line1">
            <div class="wrapper"  <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl4/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 4</p>
        </div>
        <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl5/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 5</p>
        </div>
        <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl6/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 6</p>
        </div>
          </div>
          <div class="line1">
            <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl7/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 7</p>
        </div>
        <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl8/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 8</p>
        </div>
        <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl9/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 9</p>
        </div>
          </div>
          <div class="line1">
            <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl10/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 10</p>
        </div>
        <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl11/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 11</p>
        </div>
        <div class="wrapper" <?php if($conectat == 1) echo 'onclick="window.location.href=\'lvl12/start.html\'"' ?>>
            <img src="interzis-ambele-sensuri.png" alt="Photo 1">
            <p id="nivel" class="photo-caption">Nivelul<br> 12</p>
        </div>
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
      <script src="../slider.js">
    </script>
</body>
</html>
