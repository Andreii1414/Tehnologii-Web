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
    <script src="https://kit.fontawesome.com/09b5ec736f.js" crossorigin="anonymous"></script>
    <title>Help</title>
</head>
<body>
    <div class="logo">
        <img src="../images/logo.png" alt="RoT" class="logo__image">
    </div>

    <div class="navigation">
      <img src="../images/rank.png" class="ranking navigation__link" alt="Clasament" onclick="window.location.href='../clasament/clasament.php'">
      <div class="center">
        <a class = "navigation__link" onclick="window.location.href='../home/home.php'" rel="nofollow" >Pagina principala</a>
        <a class = "navigation__link" onclick="window.location.href='../Mediu/mediu.php'" rel="nofollow">Mediu de invatare</a>
        <a class = "navigation__link" onclick="window.location.href='../quiz/quiz.php'" rel="nofollow">Quiz</a>
        <a class = "navigation__link" onclick="window.location.href='../Mini-Game/mini-game.php'" rel="nofollow">Mini-Game</a>
        <a class = "navigation__link" onclick="window.location.href='../about/about.php'" rel="nofollow">About</a>
        <a class = "navigation__link" onclick="window.location.href='help.php'">Help</a>
      </div>
      <img src=<?php echo $profileImg;?>
         class="profile navigation__link" alt="Profil"
         onclick="window.location.href=<?php echo $link;?>">
    </div>
    
    <div class="content">
        <div class="accordion">
          <p id="p1"><i class="fa-sharp fa-solid fa-car-side"></i>&nbsp;Informatii utile&nbsp;<i class="fa-solid fa-car-side fa-flip-horizontal"></i></p>
          <div class="accordion-full">
            <div class="accordion-content">
              <p id="p2"><i class="fa-sharp fa-solid fa-car-side"></i>&nbsp;Intrebari frecvente&nbsp;<i class="fa-solid fa-car-side fa-flip-horizontal"></i></p>
              <div class="b1" id="freq">
                <h1 class="intrebari"><i class="fa-solid fa-car"></i>&nbsp;Am uitat parola. Cum o recuperez?</h1>
                <h1 class="raspunsuri"><i class="fa-solid fa-circle-exclamation"></i>
                  In curand, pe pagina noastra va fi disponibil un formular cu ajutorul caruia veti putea recupera parola. Pana atunci, ne puteti contacta pe email-ul pe care 
                  il gasiti in sectiunea About.
                </h1>
                <h1 class="intrebari"><i class="fa-solid fa-car"></i>&nbsp;Vreau să schimb parola. Cum procedez?</h1>
                <h1  class="raspunsuri"><i class="fa-solid fa-circle-exclamation"></i>
                  In curand, pe pagina noastra va fi disponibil un formular cu ajutorul caruia veti putea sa va schimbati parola. Pana atunci, ne puteti contacta pe email-ul pe care 
                  il gasiti in sectiunea About.</h1>
                <h1 class="intrebari"><i class="fa-solid fa-car"></i>&nbsp;Cum invat?</h1>
                <h1  class="raspunsuri"><i class="fa-solid fa-circle-exclamation"></i>Citiţi cursul de legislatie de pe site, 
                faceţi mediul de învăţare după care faceţi chestionare până ridicaţi indicatorii de performanţă pe verde.
                Pentru maxim de eficienţă, alocati timp pentru parcurgerea mediului de învăţare şi a chestionarelor, 
                astfel încât să terminaţi în 2-3 săptămâni. (Aveti un curs explicativ chiar aici:<a class="yt" href="https://www.youtube.com/watch?v=tSUnfCQcMpM&t=109s"><i class="fa-brands fa-youtube"></i></a>)</h1>
              </div>
              <p id="p3"><i class="fa-sharp fa-solid fa-car-side"></i>&nbsp;Cum functioneaza site-ul?&nbsp;<i class="fa-solid fa-car-side fa-flip-horizontal"></i></p>
              <div class="b2">
                <h2 class="raspunsuri"><i class="fa-solid fa-circle-exclamation"></i>Aplicația noastră oferă suport pentru învățarea semnelor rutiere și a regulilor de circulație prin intermediul unui API Web REST/GraphQL. Utilizatorii pot accesa informații 
                  precum semnificația, tipul, regulamentele în vigoare, relațiile cu alte semne de interes, sfaturi practice, contextul de utilizare, plus sugestii privind comportamentul 
                  șoferului/pietonului. Prin intermediul strategiilor ludice, soluția noastră monitorizează progresul înregistrat de fiecare utilizator în procesul de învățare, eventual structurat pe 
                  niveluri de dificultate. De asemenea, generăm un clasament al celor mai sârguincioși utilizatori, disponibil și ca flux de date RSS.</h2>
              </div>
              <p id="p4"><i class="fa-sharp fa-solid fa-car-side"></i>&nbsp;Care este scopul nostru?&nbsp;<i class="fa-solid fa-car-side fa-flip-horizontal"></i></p>
              <div class="b3">
                <h3 class="raspunsuri"><i class="fa-solid fa-circle-exclamation"></i> Romanian Traffic Signs Tutor ofera suport pentru invatarea semnelor rutiere
                   si a regulilor de circulatie din tara noastra si altele europene. Site-ul este dedicat in mare parte persoanelor care urmeaza sa sustina examenul
                   teoretic auto. Intrebarile din mediul nostru de invatare corespund celor date de DRPCIV.</h3>
                </div>
            </div>
          </div>
        </div>
      </div>
      <script>

     

let p2 = document.getElementById("p2");
let a1 = document.querySelector('.b1');
p2.addEventListener('click',function(){
  a1.classList.toggle('active1');
})

/* Al treilea acordeon */
let p3 = document.getElementById("p3");
let a2 = document.querySelector('.b2');
p3.addEventListener('click',function(){
  a2.classList.toggle('active2');
})

/* Al patrulea acordeon */
let p4 = document.getElementById("p4");
let a3 = document.querySelector('.b3');
p4.addEventListener('click',function(){
  a3.classList.toggle('active3');
})
          
      </script>
   
    
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
