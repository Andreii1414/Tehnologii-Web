<?php
class Rss
{
    private $api;
    private $feed;

    function __construct(){
        $this->api = 'localhost/api/clasament';
    }

    function createRss()
    {

        $crl = curl_init();

        //setarea optiunilor
        curl_setopt($crl, CURLOPT_URL, $this->api);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, $this->api);

        //executarea si primirea raspunsului
        $rsp = curl_exec($crl);

        if (curl_errno($crl)) {
            echo "Eroare curl";
        }

        curl_close($crl);

        //decodarea raspunsului
        $clasament = json_decode($rsp);

        //formarea "header-ului" fluxului rss
        $this->feed = '<?xml version="1.0" encoding = "UTF-8" ?>';
        $this->feed .= '<rss version="2.0">';
        $this->feed .= '<channel>';
        $this->feed .= '<title>Clasamentul utilizatorilor</title>';
        $this->feed .= '<link>localhost/clasament/clasament.php</link>';
        $this->feed .= '<description>Primii 20 de utilizatori (daca sunt 20), in functie de puncte</description>';

        //este creat un item pentru fiecare user (loc in clasament, nume, puncte)
        foreach ($clasament as $key => $user) {
            $rank = $key + 1;
            $nume = $user->nume;
            $puncte = $user->punctaj;

            $this->feed .= '<item>';
            $this->feed .= "<rank>$rank</rank>";
            $this->feed .= "<name>$nume</name>";
            $this->feed .= "<points>$puncte</points>";
            $this->feed .= '</item>';
        }

        //este inchis feed-ul
        $this->feed .= '</channel>';
        $this->feed .= '</rss>';

        header('Content-type: text/xml');
        echo $this->feed;
        exit;
    }
}
?>