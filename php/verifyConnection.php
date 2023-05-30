<?php

session_start();
$conectat = 0;

if(isset($_SESSION['nume']) && isset($_SESSION['email']))
{
    $userName = $_SESSION['nume'];
    $email = $_SESSION['email'];
    
    if(isset($_COOKIE[session_name()]))
    {
        if(isset($_SESSION['expiration_time']))
        {
            $expirationTime = $_SESSION['expiration_time'];

            if($expirationTime < time())
            {
                session_unset();
                session_destroy();
            }
            else{
                $conectat = 1;
            }
        }
    }
}
else {
    $conectat = 0;
}

?>