<?php
class Sesiune
{

    function setPermanentCookie()
    {
        session_set_cookie_params(30 * 365 * 24 * 60 * 60); //30 ani
        $expirationTime = time() + (30 * 365 * 24 * 60 * 60);
        $_SESSION['expiration_time'] = $expirationTime;

        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), $_COOKIE[session_name()], time() + (30 * 365 * 24 * 60 * 60), "/");
        }
    }

    function setTemporaryCookie()
    {
        session_set_cookie_params(10800);
        $expirationTime = time() + 10800;
        $_SESSION['expiration_time'] = $expirationTime;

        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), $_COOKIE[session_name()], time() + 10800, "/");
        }
    }
    

}

?>