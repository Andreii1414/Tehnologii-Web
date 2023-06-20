<?php

//verificarea faptului ca un user este conectat
session_start();
$conectat = 0;

if(isset($_SESSION['nume']) && isset($_SESSION['email']))
{
    $userName = $_SESSION['nume'];
    $email = $_SESSION['email'];

    //verifica existenta cookie-ului
    if(isset($_COOKIE[session_name()]))
    {
        if(isset($_SESSION['expiration_time']))
        {
            $expirationTime = $_SESSION['expiration_time'];
            //verifica daca nu cumva cookie-ul a expirat 
            if($expirationTime < time())
            {
                session_unset();
                session_destroy();
            }
            else{//exista un utilizator conectat
                $conectat = 1;
            }
        }
    }
}
else {//niciun utilizator conectat
    $conectat = 0;
}

?>