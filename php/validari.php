<?php
require_once 'Sesiune.php';
class Validari
{
    private $db;
    private $conn;
    function __construct()
    {
        $this->db = new Database();
        $this->conn = $this->db->connect();
    }

    function validariLogin($adresa, $parola, $connected)
    {
        $errors = array();
        //validari
        if (empty($adresa)) {
            $errors[] = "  Trebuie sa introduci adresa de email";
        }

        if (empty($parola)) {
            $errors[] = "  Trebuie sa introduci parola";
        }

        $email = mysqli_real_escape_string($this->conn, $adresa);
        $sql = "select * from users where email = '$email';";
        $queryRes = mysqli_query($this->conn, $sql);

        //email-ul exista in baza de date
        if (mysqli_num_rows($queryRes) > 0) {
            $user = mysqli_fetch_assoc($queryRes);
            $storedPass = $user['parola'];

            //verificarea parolei (este aceeasi cu cea din baza de date)
            if (password_verify($parola, $storedPass)) {

                session_start();

                $_SESSION['nume'] = $user['nume'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['id'] = $user['id'];
                $sesiune = new Sesiune();

                if ($connected == 1) {
                    //este creat un cookie care are o durata de expirare mare, atunci cand utilizatorul selecteaza optiunea "Ramai conectat"
                    $sesiune->setPermanentCookie();
                } else {
                    //daca nu selecteaza optiunea, va ramane conectat pentru 3 ore
                    $sesiune->setTemporaryCookie();
                }

                header("Location: ../Tehnologii-web/home/home.php");

            } else
                $errors[] = "  Parola introdusa este incorecta";
        } else {
            $errors[] = '  Email-ul nu este inregistrat in baza de date';
        }
        return $errors;
    }

    function validariRegister($nume, $adresa, $parola, $resparola)
    {
        $errors = array();
        if (empty($nume)) {
            $errors[] = "  Trebuie sa introduci un nume";
        }

        if (empty($adresa)) {
            $errors[] = "  Trebuie sa introduci un email";
        }

        if (empty($parola)) {
            $errors[] = "  Trebuie sa introduci o parola";
        }
        if (empty($resparola)) {
            $errors[] = "  Trebuie sa rescrii parola";
        } else if (!empty($resparola) && $parola !== $resparola) {
            $errors[] = "  Parolele nu corespund";
        }

        //verificarea faptului ca parola contine litera mica, mare, cifra si cel putin 8 caractere
        if (!empty($parola)) {
            $mare = preg_match('@[A-Z]@', $parola);
            $mica = preg_match('@[a-z]@', $parola);
            $numar = preg_match('@[0-9]@', $parola);

            if (!$mare || !$mica || !$numar || strlen($parola) < 8) {
                $errors[] = '  Parola trebuie sa aiba o lungime de cel putin 8 caractere si sa <br> contina cel putin: o litera mica, o litera mare si o cifra';
            }
        }

        if (!empty($adresa)) {
            //conexiunea la baza de date si verificarea faptului ca adresa de email nu a fost deja folosita
            $email = mysqli_real_escape_string($this->conn, $adresa);
            $sql = "select * from users where email = '$email';";
            $queryRes = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($queryRes) > 0) {
                $errors[] = '  Email-ul a fost deja folosit de un alt utilizator';
            }
            //se verifica daca numele este deja folosit de un alt utilizator
            $numeQuery = "select * from users where nume = '$nume';";
            $numeResult = mysqli_query($this->conn, $numeQuery);
            if (mysqli_num_rows($numeResult) > 0) {
                $errors[] = '  Numele a fost deja folosit de un alt utilizator';
            }
        }
        return $errors;
    }

    function validariChangePass($adresa, $oldPass, $newPass, $resPass)
    {
        $errors = array();
        if (empty($adresa)) {
            $errors[] = "  Trebuie sa introduci un email";
        }

        if (empty($oldPass)) {
            $errors[] = "  Trebuie sa introduci parola actuala";
        }
        if (empty($newPass)) {
            $errors[] = "  Trebuie sa scrii parola noua";
        }
        if (empty($resPass)) {
            $errors[] = "  Trebuie sa rescrii parola noua";
        }

        if (!empty($resPass) && $resPass !== $newPass) {
            $errors[] = "  Parolele nu corespund";
        }

        if (!empty($newPass)) {
            $mare = preg_match('@[A-Z]@', $newPass);
            $mica = preg_match('@[a-z]@', $newPass);
            $numar = preg_match('@[0-9]@', $newPass);

            //verificarea parolei(nr caractere, litera mica, mare, cifra)
            if (!$mare || !$mica || !$numar || strlen($newPass) < 8) {
                $errors[] = '  Parola trebuie sa aiba o lungime de cel putin 8 caractere si sa <br> contina cel putin: o litera mica, o litera mare si o cifra';
            }
        }

        if (!empty($adresa)) {
            //conexiunea la baza de date, plus verificarea daca emailul exista
            $email = mysqli_real_escape_string($this->conn, $adresa);
            $sql = "select * from users where email = '$email';";
            $queryRes = mysqli_query($this->conn, $sql);
            $user = mysqli_fetch_assoc($queryRes);
            if (mysqli_num_rows($queryRes) <= 0) {
                $errors[] = '  Email-ul nu a fost gasit in baza de date';
            }
        }

        if (empty($errors)) {
            //verificarea faptului ca parola introdusa corespunde cu cea din baza de date
            if ($this->conn) {
                $storedPass = $user['parola'];
                if (password_verify($oldPass, $storedPass)) {
                    $parolaHash = password_hash($newPass, PASSWORD_DEFAULT);
                    $userId = $user['id'];
                    $this->db->updatePassword($parolaHash, $userId);
                } else {
                    $errors[] = 'Parola actuala introdusa nu corespunde cu cea asociata contului tau';
                }

            }
        }
        return $errors;
    }
}

?>