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
            <a class = "navigation__link" onclick="window.location.href='../about/about.php'">About</a>
            <a class = "navigation__link" onclick="window.location.href='../help/help.php'">Help</a>
        </div>
        <img src=<?php echo $profileImg;?>
         class="profile navigation__link" alt="Profil"
         onclick="window.location.href=<?php echo $link;?>">
    </div>

    <div class="content">
        <i class="fa-sharp fa-solid fa-car-side"></i><h3 class="clasament">Clasamentul utilizatorilor</h3>
        <div class="top3">
            <div class="first">
                <img src="gold.png" alt="First" class="cup">
                <p>Locul 1</p>
                <p>Nume: John Doe</p>
                <p>Puncte: x</p>
            </div>
            <div class="second">
                <img src="silver.png" alt="Second" class="cup">
                <p>Locul 2</p>
                <p>Nume: John Doe</p>
                <p>Puncte: x</p>
            </div>
            <div class="third">
                <img src="bronze.png" alt="Second" class="cup">
                <p>Locul 3</p>
                <p>Nume: John Doe</p>
                <p>Puncte: x</p>
            </div>
        </div>

        <table class="table-ranking">
            <tr>
                <th>Loc</th>
                <th>Nume</th>
                <th>Numar de puncte</th>
            </tr>
            <tr>
                <td>#4</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#5</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#6</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#7</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#8</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#9</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#10</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#11</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#12</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#13</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#14</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#15</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#16</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#17</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#18</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#19</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
              <tr>
                <td>#20</td>
                <td>John Doe</td>
                <td>x</td>
              </tr>
        </table>
 

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