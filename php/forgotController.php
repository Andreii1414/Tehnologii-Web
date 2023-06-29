<?php
require_once 'database.php';
require_once 'validari.php';
require 'Tehnologii-Web/vendor/autoload.php';

class Forgot implements Handler
{
    private $errors;
    private $db;
    private $conn;
    function __construct()
    {
        $this->db = new Database();
        $this->conn = $this->db->connect();
    }
    function nHandler()
    {
        if (isset($_POST['submit'])) {

            $adresa = $_POST['adresa'];

            $this->errors = array();

            $adresa = filter_var($adresa, FILTER_SANITIZE_EMAIL);

            $this->verifyEmail($adresa);

            $response = null;

            //returnarea eventualelor erori
            if (!empty($this->errors)) {
                $erori = json_encode($this->errors);
                $erori = urlencode($erori);
                http_response_code(400);
                $response = "Nu iti poti schimba parola";
                echo json_encode($response);
                header("Location: ../Tehnologii-web/login/forgot.php?errors=$erori");
                exit;
            } else { //in cazul in care nu sunt erori, se ia id-ul asociat email-ului
                $sql = "select * from users where email = ?;";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("s", $adresa);
                if (!$stmt->execute()) {
                    $this->db->databaseError();
                }
                $queryRes = $stmt->get_result();
                $id = $queryRes->fetch_assoc()['id'];

                //se creeaza un token care este inserat in baza de date in tabelul forgot_password
                $token = "";
                $token = bin2hex(random_bytes(10));
                $sql = "INSERT INTO forgot_password (id_user, email, token) VALUES (?, ?, ?);";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("sss", $id, $adresa, $token);
                if (!$stmt->execute()) {
                    $this->db->databaseError();
                }
                
                try{ //este trimis token-ul pe email, acesta este valabil 10 minute
                    $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
                            ->setUsername('rot6980@gmail.com')
                            ->setPassword('xcyoxtgmegexlycb');
                    $mailer = new Swift_Mailer($transport);

                    $body = "<p>Codul tau pentru resetarea parolei este</p> <p style='color:red;'>$token</p> 
                    <p>Atentie, codul este valabil pentru 10 minute.</p>";
                    $message = (new Swift_Message('Reseteaza-ti parola'))
                        ->setFrom(['rot6980@gmail.com' => 'Rot'])
                        ->setTo($adresa)
                        ->setBody($body)
                        ->setContentType('text/html');
                    $mailer->send($message);
                }
                catch(Exception $e){
                    echo $e->getMessage();
                }

                header("Location: ../Tehnologii-web/login/forgot_code.php");
                exit;
            }

        }
    }

    private function verifyEmail($adresa)
    {   //verificarea email-ului (daca apare in baza de date)
        $sql = "select * from users where email = ?;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $adresa);
        if (!$stmt->execute()) {
            $this->db->databaseError();
        }
        $queryRes = $stmt->get_result();

        if (mysqli_num_rows($queryRes) == 0) {
            $this->errors[] = '  Email-ul nu a fost gasit in baza de date';
        }
    }

    function checkCode()
    {
        if (isset($_POST['submit'])) {

            $code = $_POST['code'];
            $newPass = $_POST['newPass'];
            $resPass = $_POST['resPass'];
            //se verifica daca token-ul este in baza de date 
            $sql = "select * from forgot_password where token = ?;";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $code);
            if (!$stmt->execute()) {
                $this->db->databaseError();
            }
            $queryRes = $stmt->get_result();
            if ($queryRes->num_rows == 0) {
                $this->errors = null;
                $this->errors[] = '  Codul este invalid';
            } else {
                $id = $queryRes->fetch_assoc()['id_user'];

                //se valideaza noua parola
                $validari = new Validari();
                $this->errors = null;
                $this->errors = $validari->validariForgotPassword($id, $newPass, $resPass);

                if (empty($this->errors)) {
                    //se updateaza parola utilizatorului in cazul in care nu sunt erori
                    $parolaHash = password_hash($newPass, PASSWORD_DEFAULT);
                    $this->db->updatePassword($parolaHash, $id);

                    //se sterge parola din baza de date
                    $stmt = $this->conn->prepare("DELETE FROM forgot_password WHERE token = ?");
                    $stmt->bind_param("s", $code);
                    if (!$stmt->execute()) {
                        $this->db->databaseError();
                    }

                }

            }
            if(!empty($this->errors)){
                $erori = json_encode($this->errors);
                $erori = urlencode($erori);
                http_response_code(400);
                $response = "Cod invalid";
                echo json_encode($response);
                header("Location: ../../Tehnologii-web/login/forgot_code.php?errors=$erori");
            }

        }
    }
}

?>