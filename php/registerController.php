<?php

require_once 'database.php';

function registerHandler()
{
    if(isset($_POST['submit'])){

        $nume = $_POST['nume'];
        $adresa = $_POST['adresa'];
        $parola = $_POST['parola'];
        $resparola = $_POST['resparola'];
        $errors = array();
        
        if(empty($nume))
        {
            $errors[] = "  Trebuie sa introduci un nume";
        }

        if(empty($adresa))
        {
            $errors[] = "  Trebuie sa introduci un email";
        }

        if(empty($parola))
        {
            $errors[] = "  Trebuie sa introduci o parola";
        }
        if(empty($resparola))
        {
            $errors[] = "  Trebuie sa rescrii parola";
        }
        else if(!empty($resparola) && $parola !== $resparola){
            $errors[] = "  Parolele nu corespund";
        }

        if(!empty($parola)){
            $mare = preg_match('@[A-Z]@', $parola);
            $mica = preg_match('@[a-z]@', $parola);
            $numar = preg_match('@[0-9]@', $parola);
        
            if(!$mare || !$mica || !$numar || strlen($parola) < 8)
            {
                $errors[] = '  Parola trebuie sa aiba o lungime de cel putin 8 caractere si sa <br> contina cel putin: o litera mica, o litera mare si o cifra';
            }
        }

        if(!empty($adresa))
        {
            $db = new Database();
            $conn = $db->connect();
            $email = mysqli_real_escape_string($conn, $adresa);
            $sql = "select * from users where email = '$email';";
            $queryRes = mysqli_query($conn, $sql);
            if(mysqli_num_rows($queryRes) > 0)
            {
                $errors[] = '  Email-ul a fost deja folosit de un alt utilizator';
            }
        }

        if(!empty($errors)) {
            $erori = json_encode($errors);
            $erori = urlencode($erori);
            header("Location: ../Tehnologii-web/login/signup.php?errors=$erori");
            exit;
        }


        if(empty($errors)){
            $parolaHash = password_hash($parola, PASSWORD_DEFAULT);

            if($conn){
                $sql = "INSERT INTO users (nume, email, parola) VALUES ('$nume', '$adresa', '$parolaHash');";
                mysqli_query($conn, $sql);
                $lastId = mysqli_insert_id($conn);

                $sql = "INSERT INTO punctaje (id_user, categorie, punctaj_quiz, punctaj_categorie) VALUES
                 ('$lastId', 'Avertizare', '0', '0'),
                 ('$lastId', 'Interzicere', '0', '0'),
                 ('$lastId', 'Prioritate', '0', '0'),
                 ('$lastId', 'Obligare', '0', '0'),
                 ('$lastId', 'Informare', '0', '0'),
                 ('$lastId', 'Orientare', '0', '0'),
                 ('$lastId', 'InformareTuristica', '0', '0'),
                 ('$lastId', 'Aditionale', '0', '0'),
                 ('$lastId', 'SemnaleLuminoase', '0', '0'),
                 ('$lastId', 'CaleFerata', '0', '0'),
                 ('$lastId', 'Kilometrice', '0', '0'),
                 ('$lastId', 'Auxiliare', '0', '0'),
                 ('$lastId', 'BenziReversibile', '0', '0'),
                 ('$lastId', 'MarcajeLongitudinale', '0', '0'),
                 ('$lastId', 'MarcajeTransversale', '0', '0'),
                 ('$lastId', 'MarcajeDiverse', '0', '0'),
                 ('$lastId', 'MarcajeLaterale', '0', '0'),
                 ('$lastId', 'Temporare', '0', '0');";
                mysqli_query($conn, $sql);

                header("Location: ../Tehnologii-web/login/success.html");
            }
            exit();
        } 
        mysqli_close($conn);
    }
}
?>