<?php

function logout(){
    session_start();

    session_destroy();

    setcookie(session_name(), time() - 3600, '/');

    exit();
}
?>