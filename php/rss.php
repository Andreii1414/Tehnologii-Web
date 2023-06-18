<?php

function createRss(){

    $api = 'localhost/api/clasament';
    $crl = curl_init();

    curl_setopt($crl, CURLOPT_URL, $api);
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, $api);

    $rsp = curl_exec($crl);

    if(curl_errno($crl)){
        echo "Eroare curl";
    }

    curl_close($crl);

    $clasament = json_decode($rsp);

    $feed = '<?xml version="1.0" encoding = "UTF-8" ?>';
    $feed .= '<rss version="2.0">';
    $feed .= '<channel>';
    $feed .= '<title>Clasamentul utilizatorilor</title>';
    $feed .= '<link>localhost/clasament/clasament.php</link>';
    $feed .= '<description>Primii 20 de utilizatori (daca sunt 20), in functie de puncte</description>';

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

    $feed .= '</channel>';
    $feed .= '</rss>';

    header('Content-type: text/xml');
    echo $feed;
    exit;
}

?>
