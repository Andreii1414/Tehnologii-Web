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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Clasament</title>
</head>
<body>
    <div class="logo">
        <img src="../images/logo.png" alt="RoT" class="logo__image">
    </div>

    <div class="navigation">
        <img src="../images/rank.png" class="ranking navigation__link" alt="Clasament" onclick="window.location.href='clasament.php'">
        <div class="center">
            <a class = "navigation__link" onclick="window.location.href='../home/home.php'">Pagina principala</a>
            <a class = "navigation__link" onclick="window.location.href='../Mediu/mediu.php'">Mediu de invatare</a>
            <a class = "navigation__link" onclick="window.location.href='../quiz/quiz.php'">Quiz</a>
            <a class = "navigation__link" onclick="window.location.href='../Mini-Game/mini-game.php'">Mini-Game</a>
            <a class = "navigation__link" onclick="window.location.href='../about/about.php'">About</a>
            <a class = "navigation__link" onclick="window.location.href='../help/help.php'">Help</a>
        </div>
        <img src=<?php echo $profileImg;?>
         class="profile navigation__link" alt="Profil"
         onclick="window.location.href=<?php echo $link;?>">
    </div>

    <div class="content">

        <h3 class="clasament">Clasamentul utilizatorilor 
            <br><a href="/api/clasamentRss"> - flux de date RSS</a>
       </h3>
        <div class="top3">
            <div class="first">
                <img src="gold.png" alt="First" class="cup">
                <p>Locul 1</p>
                <p id="firstName">Nume: John Doe</p>
                <p id="firstPoints">Puncte: x</p>
            </div>
            <div class="second">
                <img src="silver.png" alt="Second" class="cup">
                <p>Locul 2</p>
                <p id="secondName">Nume: John Doe</p>
                <p id="secondPoints">Puncte: x</p>
            </div>
            <div class="third">
                <img src="bronze.png" alt="Second" class="cup">
                <p>Locul 3</p>
                <p id="thirdName">Nume: John Doe</p>
                <p id = "thirdPoints">Puncte: x</p>
            </div>
        </div>

        <table class="table-ranking" id="tabel">
            <tr>
                <th>Loc</th>
                <th>Nume</th>
                <th>Numar de puncte</th>
            </tr>
            
        </table>
        <p id="puncteleTale" class ="puncte"></p>
 

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

    <script>
      window.onload = function(){
         //request care returneaza primii 20 de utilizatori in functie de punctaj
        fetch("/api/clasament")
        .then(response => response.json())
        .then(data =>{
          console.log(data);
          const users = data.map(item => item.nume);
          const punctaj = data.map(item => item.punctaj);

          //afisarea primilor 3 utilizatori
          const firstName = document.getElementById('firstName');
          const firstPoints = document.getElementById('firstPoints');
          firstName.innerHTML = "Nume: " + users[0];
          firstPoints.innerHTML = "Puncte: " + punctaj[0];  
          const secondName = document.getElementById('secondName');
          const secondPoints = document.getElementById('secondPoints');
          secondName.innerHTML = "Nume: " + users[1];
          secondPoints.innerHTML = "Puncte: " + punctaj[1];  
          const thirdName = document.getElementById('thirdName');
          const thirdPoints = document.getElementById('thirdPoints');
          thirdName.innerHTML = "Nume: " + users[2];
          thirdPoints.innerHTML = "Puncte: " + punctaj[2];  
          
          const tabel = document.getElementById('tabel');
          const body = tabel.querySelector('tbody');
          
          //afisarea celorlalti utilizatori (locul 3 - locul 20)
          for(let i = 3; i < 20; i++)
          {
            const j = i + 1;
            const tr = document.createElement('tr');
            tr.innerHTML = `
            <td>#${j}</td>
            <td>${users[i]}</td>
            <td>${punctaj[i]}</td>`

            body.appendChild(tr);
          }

        })
        .catch(error => {
          console.error('Error: ', error);
        });

        if("<?php echo $userSession->isConnected(); ?>" == 0)
        {
            const puncteleTale = document.getElementById('puncteleTale');
            puncteleTale.innerHTML = "Punctele tale: Nu esti conectat <br> Locul tau in clasament: Nu esti conectat";  
        }
        else{ //request pt a putea afisa punctele utilizatorului conectat si locul lui in clasament
            fetch("/api/clasament/puncteleTale")
            .then(response => response.json())
            .then(data =>{
                console.log(data);
                const puncteleTale = document.getElementById('puncteleTale');
                puncteleTale.innerHTML = "Punctele tale: " + data.punctaj + '<br>' + "Locul tau in clasament: " + data.loc;
            })
            .catch(error => {
            console.error('Error: ', error);
            })
        }
      }

    </script>

</body>
</html>