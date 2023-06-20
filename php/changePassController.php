<?php

require_once 'database.php';

function changePassword()
{
    if(isset($_POST['submit'])){
        $adresa = $_POST['adresa'];
        $oldPass = $_POST['oldPass'];
        $newPass = $_POST['newPass'];
        $resPass = $_POST['resPass'];
        $errors = array();
        
        //validari: adresa, parola veche, parola noua
        if(empty($adresa))
        {
            $errors[] = "  Trebuie sa introduci un email";
        }

        if(empty($oldPass))
        {
            $errors[] = "  Trebuie sa introduci parola actuala";
        }
        if(empty($newPass))
        {
            $errors[] = "  Trebuie sa scrii parola noua";
        }
        if(empty($resPass))
        {
            $errors[] = "  Trebuie sa rescrii parola noua";
        }

        else if(!empty($ressPass) && $resPass !== $newPass){
            $errors[] = "  Parolele nu corespund";
        }

        if(!empty($newPass)){
            $mare = preg_match('@[A-Z]@', $newPass);
            $mica = preg_match('@[a-z]@', $newPass);
            $numar = preg_match('@[0-9]@', $newPass);
            
            //verificarea parolei(nr caractere, litera mica, mare, cifra)
            if(!$mare || !$mica || !$numar || strlen($newPass) < 8)
            {
                $errors[] = '  Parola trebuie sa aiba o lungime de cel putin 8 caractere si sa <br> contina cel putin: o litera mica, o litera mare si o cifra';
            }
        }

        if(!empty($adresa))
        {
            //conexiunea la baza de date, plus verificarea daca emailul exista
            $db = new Database();
            $conn = $db->connect();
            $email = mysqli_real_escape_string($conn, $adresa);
            $sql = "select * from users where email = '$email';";
            $queryRes = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($queryRes);
            if(mysqli_num_rows($queryRes) <= 0)
            {
                $errors[] = '  Email-ul nu a fost gasit in baza de date';
            }
        }

        if(empty($errors)){
            //verificarea faptului ca parola introdusa corespunde cu cea din baza de date
            if($conn){
                $storedPass = $user['parola'];
                if(password_verify($oldPass, $storedPass)){
                    $parolaHash = password_hash($newPass, PASSWORD_DEFAULT);
                    $userId = $user['id'];
                    //query care updateaza parola
                    $sql = "UPDATE users SET parola = '$parolaHash' where id = '$userId'";
                    if (mysqli_query($conn, $sql)) {
                        $successMessage = 'Registration successful!';
                        header("Location: ../Tehnologii-web/home/home.php");
                    }
                }
                else{
                    $errors[] = 'Parola actuala introdusa nu corespunde cu cea asociata contului tau'; 
                }
            
                }
        } 
        //returnarea eventualelor erori
        if(!empty($errors)) {
            $erori = json_encode($errors);
            $erori = urlencode($erori);
            header("Location: ../Tehnologii-web/login/changePassOrLogout.php?errors=$erori");
            exit;
        }

        mysqli_close($conn);
        
    }
}
?>