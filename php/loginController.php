<?php
require_once 'database.php';

function loginHandler(){
    if(isset($_POST['submit'])){

        $adresa = $_POST['adresa'];
        $parola = $_POST['parola'];
        $connected = isset($_POST['connected']) ? 1 : 0;
        $errors = array();
        
        if(empty($adresa))
        {
            $errors[] = "  Trebuie sa introduci adresa de email";
        }

        if(empty($adresa))
        {
            $errors[] = "  Trebuie sa introduci parola";
        }
        
        if(empty($errors)){
            $db = new Database();
            $conn = $db->connect();
            $email = mysqli_real_escape_string($conn, $adresa);
            $sql = "select * from users where email = '$email';";
            $queryRes = mysqli_query($conn, $sql);
            if(mysqli_num_rows($queryRes) > 0)
            {
                $user = mysqli_fetch_assoc($queryRes);
                $storedPass = $user['parola'];

                if(password_verify($parola, $storedPass))
                {
        
                    session_start();

                    $_SESSION['nume'] = $user['nume'];
                    $_SESSION['email'] = $user['email'];

                    if($connected == 1){
                        session_set_cookie_params(30 * 365 * 24 * 60 * 60); //30 ani
                        $expirationTime = time() + (30 * 365 * 24 * 60 * 60); 
                        $_SESSION['expiration_time'] = $expirationTime;

                        if (isset($_COOKIE[session_name()])) {
                            setcookie(session_name(), $_COOKIE[session_name()], time() + (30 * 365 * 24 * 60 * 60) , "/");
                        }
                    }
                    else {
                        session_set_cookie_params(10);
                        $expirationTime = time() + 10; 
                        $_SESSION['expiration_time'] = $expirationTime;

                        
                        if (isset($_COOKIE[session_name()])) {
                            setcookie(session_name(), $_COOKIE[session_name()], time() + 10, "/");
                        }
                    }

                    header("Location: ../Tehnologii-web/home/home.php");

                }
                else $errors[] = "  Parola introdusa este incorecta";
            }
            else {
                $errors[] = '  Email-ul nu este inregistrat in baza de date';
            }
        }

        
        if(!empty($errors)) {
            $erori = json_encode($errors);
            $erori = urlencode($erori);
            header("Location: ../Tehnologii-web/login/login.php?errors=$erori");
            exit;
        }


        mysqli_close($conn);
    }
}


?>