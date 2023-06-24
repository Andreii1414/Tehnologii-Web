<?php
require_once 'database.php';
require_once 'validari.php';
class Login implements Handler
{
    private $errors;
    function nHandler()
    {
        if (isset($_POST['submit'])) {

            $adresa = $_POST['adresa'];
            $parola = $_POST['parola'];
            $connected = isset($_POST['connected']) ? 1 : 0;
            $this->errors = array();

            $adresa = filter_var($adresa, FILTER_SANITIZE_EMAIL);

            $validari = new Validari();

            $this->errors = $validari->validariLogin($adresa, $parola, $connected);

            //returnarea eventualelor erori
            if (!empty($this->errors)) {
                $erori = json_encode($this->errors);
                $erori = urlencode($erori);
                header("Location: ../Tehnologii-web/login/login.php?errors=$erori");
                exit;
            }

        }
    }
}

?>