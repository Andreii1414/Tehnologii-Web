<?php
class Logout
{
    function logout()
    { //este sters cookie-ul atunci cand utilizatorul doreste sa se deconecteze
        session_start();

        session_destroy();

        setcookie(session_name(), time() - 3600, '/');

        exit();
    }
}
?>