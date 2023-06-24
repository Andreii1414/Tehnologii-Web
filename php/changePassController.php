<?php

require_once 'database.php';
require_once 'validari.php';
class ChangePassword
{   
    private $errors;
    function changePassword()
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

            //returnarea eventualelor erori
            if (!empty($this->errors)) {
                $erori = json_encode($this->errors);
                $erori = urlencode($erori);
                header("Location: ../Tehnologii-web/login/changePassOrLogout.php?errors=$erori");
                exit;
            }

        }
    }
}
?>