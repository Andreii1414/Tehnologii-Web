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
        
        //validari: nume, email, parola, rescrierea parolei, parolele corespund
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

        //verificarea faptului ca parola contine litera mica, mare, cifra si cel putin 8 caractere
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
            //conexiunea la baza de date si verificarea faptului ca adresa de email nu a fost deja folosita
            $db = new Database();
            $conn = $db->connect();
            $email = mysqli_real_escape_string($conn, $adresa);
            $sql = "select * from users where email = '$email';";
            $queryRes = mysqli_query($conn, $sql);
            if(mysqli_num_rows($queryRes) > 0)
            {
                $errors[] = '  Email-ul a fost deja folosit de un alt utilizator';
            }
            //se verifica daca numele este deja folosit de un alt utilizator
            $numeQuery = "select * from users where nume = '$nume';";
            $numeResult = mysqli_query($conn, $numeQuery);
            if(mysqli_num_rows($numeResult) > 0)
            {
                $errors[] = '  Numele a fost deja folosit de un alt utilizator';
            }
        }

        //sunt returnate eventualele erori
        if(!empty($errors)) {
            $erori = json_encode($errors);
            $erori = urlencode($erori);
            header("Location: ../Tehnologii-web/login/signup.php?errors=$erori");
            exit;
        }

        //daca nu sunt erori
        if(empty($errors)){
            $parolaHash = password_hash($parola, PASSWORD_DEFAULT);

            //se adauga in tabelul users utilizatorul, si in tabelul punctaje inregistrari pentru fiecare categorie + nivel
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
                 ('$lastId', 'Temporare', '0', '0'),
                 ('$lastId', 'Level1', '0', '0'),
                 ('$lastId', 'Level2', '0', '0'),
                 ('$lastId', 'Level3', '0', '0'),
                 ('$lastId', 'Level4', '0', '0'),
                 ('$lastId', 'Level5', '0', '0'),
                 ('$lastId', 'Level6', '0', '0'),
                 ('$lastId', 'Level7', '0', '0'),
                 ('$lastId', 'Level8', '0', '0'),
                 ('$lastId', 'Level9', '0', '0'),
                 ('$lastId', 'Level10', '0', '0'),
                 ('$lastId', 'Level11', '0', '0'),
                 ('$lastId', 'Level12', '0', '0');";
                mysqli_query($conn, $sql);

                header("Location: ../Tehnologii-web/login/success.html");
            }
            exit();
        } 
        mysqli_close($conn);
    }
}
?>