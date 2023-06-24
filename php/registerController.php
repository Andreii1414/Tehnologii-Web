<?php

require_once 'database.php';
require_once 'validari.php';
require_once 'Handler.php';
class Register implements Handler
{
    private $errors;
    function nHandler()
    {
        if (isset($_POST['submit'])) {

            $nume = $_POST['nume'];
            $adresa = $_POST['adresa'];
            $parola = $_POST['parola'];
            $resparola = $_POST['resparola'];
            $this->errors = array();

            $nume = filter_var($nume, FILTER_SANITIZE_STRING);
            $adresa = filter_var($adresa, FILTER_SANITIZE_EMAIL);

            //validari: nume, email, parola, rescrierea parolei, parolele corespund
            $validari = new Validari();
            $this->errors = $validari->validariRegister($nume, $adresa, $parola, $resparola);

            //sunt returnate eventualele erori
            if (!empty($this->errors)) {
                $erori = json_encode($this->errors);
                $erori = urlencode($erori);
                header("Location: ../Tehnologii-web/login/signup.php?errors=$erori");
                exit;
            }

            //daca nu sunt erori
            if (empty($this->errors)) {
                $parolaHash = password_hash($parola, PASSWORD_DEFAULT);

                $db = new Database();
                $conn = $db->connect();
                $db->insertRegister($nume, $adresa, $parolaHash, $conn);

                header('Location: ../Tehnologii-Web/login/success.html');
            }

        }
    }
}
?>