<?php

require_once 'database.php';
require_once 'validari.php';
class ChangePassword implements Handler
{   
    private $errors;
    function nHandler()
    {
        if (isset($_POST['submit'])) {
            $adresa = $_POST['adresa'];
            $oldPass = $_POST['oldPass'];
            $newPass = $_POST['newPass'];
            $resPass = $_POST['resPass'];
            $this->errors = array();

            //validari: adresa, parola veche, parola noua
            $validari = new Validari();
            $this->errors = $validari->validariChangePass($adresa, $oldPass, $newPass, $resPass);

            $response = null;

            //returnarea eventualelor erori
            if (!empty($this->errors)) {
                $erori = json_encode($this->errors);
                $erori = urlencode($erori);
                http_response_code(400);
                $response = "Nu poti schimba parola";
                echo json_encode($response);
                header("Location: ../Tehnologii-web/login/changePassOrLogout.php?errors=$erori");
                exit;
            }
            else{
                http_response_code(200);
                $response = "Ai schimbat parola cu succes";
                echo json_encode($response);
                header("Location: ../Tehnologii-web/home/home.php");
                exit;   
            }

        }
    }
}
?>