<?php
class Logout
{
    function logout()
    { //este sters cookie-ul atunci cand utilizatorul doreste sa se deconecteze
        
        setcookie('jwt', '', time() - 3600, "/");
        
    }
}
?>