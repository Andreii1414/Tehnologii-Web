<?php
require_once 'database.php';
require_once 'validari.php';
class Login
{
    private $errors;
    function loginHandler()
    {
        if (isset($_POST['submit'])) {

            $adresa = $_POST['adresa'];
            $parola = $_POST['parola'];
            $connected = isset($_POST['connected']) ? 1 : 0;
            $this->errors = array();

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