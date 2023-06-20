<?php

function createRss(){

    //url-ul api-ului care returneaza primii 20 de utilizatori
    $api = 'localhost/api/clasament';
    $crl = curl_init();

    //setarea optiunilor
    curl_setopt($crl, CURLOPT_URL, $api);
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, $api);

    //executarea si primirea raspunsului
    $rsp = curl_exec($crl);

    if(curl_errno($crl)){
        echo "Eroare curl";
    }

    curl_close($crl);

    //decodarea raspunsului
    $clasament = json_decode($rsp);

    //formarea "header-ului" fluxului rss
    $feed = '<?xml version="1.0" encoding = "UTF-8" ?>';
    $feed .= '<rss version="2.0">';
    $feed .= '<channel>';
    $feed .= '<title>Clasamentul utilizatorilor</title>';
    $feed .= '<link>localhost/clasament/clasament.php</link>';
    $feed .= '<description>Primii 20 de utilizatori (daca sunt 20), in functie de puncte</description>';

    //este creat un item pentru fiecare user (loc in clasament, nume, puncte)
    foreach($clasament as $key => $user)
    {
        $rank = $key + 1;
        $nume = $user->nume;
        $puncte = $user->punctaj;
        
        $feed .= '<item>';
        $feed .= "<rank>$rank</rank>";
        $feed .= "<name>$nume</name>";
        $feed .= "<points>$puncte</points>";
        $feed .= '</item>';
    }

    //este inchis feed-ul
    $feed .= '</channel>';
    $feed .= '</rss>';

    header('Content-type: text/xml');
    echo $feed;
    exit;
}

?>
