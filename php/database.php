<?php
class Database
{

    private $servername = "localhost";
    private $username = "admin";
    private $password = "rotDatabase";
    private $dbname = "rotDB";
    private $conn;

    //conexiunea la baza de date
    public function connect()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else
            return $this->conn;
    }

    function insertRegister($nume, $adresa, $parolaHash, $conn)
    {
        if ($conn) {
            $sql = "INSERT INTO users (nume, email, parola) VALUES (?, ?, ?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sss", $nume, $adresa, $parolaHash);
            if(!$stmt->execute())
            {
                http_response_code(500);
                $response = ['message' => "Eroare la interogarea in baza de date"];
                echo json_encode($response);
                exit;
            }
            $lastId = mysqli_insert_id($conn);

            $sql = "INSERT INTO punctaje (id_user, categorie, punctaj_quiz, punctaj_categorie) VALUES
             (?, 'Avertizare', '0', '0'),
             (?, 'Interzicere', '0', '0'),
             (?, 'Prioritate', '0', '0'),
             (?, 'Obligare', '0', '0'),
             (?, 'Informare', '0', '0'),
             (?, 'Orientare', '0', '0'),
             (?, 'InformareTuristica', '0', '0'),
             (?, 'Aditionale', '0', '0'),
             (?, 'SemnaleLuminoase', '0', '0'),
             (?, 'CaleFerata', '0', '0'),
             (?, 'Kilometrice', '0', '0'),
             (?, 'Auxiliare', '0', '0'),
             (?, 'BenziReversibile', '0', '0'),
             (?, 'MarcajeLongitudinale', '0', '0'),
             (?, 'MarcajeTransversale', '0', '0'),
             (?, 'MarcajeDiverse', '0', '0'),
             (?, 'MarcajeLaterale', '0', '0'),
             (?, 'Temporare', '0', '0'),
             (?, 'Level1', '0', '0'),
             (?, 'Level2', '0', '0'),
             (?, 'Level3', '0', '0'),
             (?, 'Level4', '0', '0'),
             (?, 'Level5', '0', '0'),
             (?, 'Level6', '0', '0'),
             (?, 'Level7', '0', '0'),
             (?, 'Level8', '0', '0'),
             (?, 'Level9', '0', '0'),
             (?, 'Level10', '0', '0'),
             (?, 'Level11', '0', '0'),
             (?, 'Level12', '0', '0');";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiiiiiii", $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, 
            $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId,
            $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId, $lastId);
            if(!$stmt->execute())
            {
                http_response_code(500);
                $response = ['message' => "Eroare la interogarea in baza de date"];
                echo json_encode($response);
                exit;
            }
            $stmt->close();

            $ipAdresss = $_SERVER['REMOTE_ADDR'];

            
            $count = 0;
            $sql = "SELECT count(*) FROM userip where ip_user = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $ipAdresss);
            if(!$stmt->execute())
            {
                http_response_code(500);
                $response = ['message' => "Eroare la interogarea in baza de date"];
                echo json_encode($response);
                exit;
            }
            $stmt->bind_result($count);
            $stmt->fetch();
            $stmt->close();

            if($count > 0){
                $updateIp = "UPDATE userip SET acc_count = acc_count + 1 WHERE ip_user = ?";
                $stmt = $conn->prepare($updateIp);
                $stmt->bind_param("s", $ipAdresss);
                if(!$stmt->execute())
                {
                    http_response_code(500);
                    $response = ['message' => "Eroare la interogarea in baza de date"];
                    echo json_encode($response);
                    exit;
                }
                $stmt->close();
            }
            else{
                $insertIp = "INSERT INTO userip (ip_user, acc_count) VALUES ( ?, 1)";
                $stmt = $conn->prepare($insertIp);
                $stmt->bind_param("s", $ipAdresss);
                if(!$stmt->execute())
                {
                    http_response_code(500);
                    $response = ['message' => "Eroare la interogarea in baza de date"];
                    echo json_encode($response);
                    exit;
                }
                $stmt->close(); 
            }
        }
    }

    function updatePassword($parolaHash, $userId)
    {
        //query care updateaza parola
        $sql = "UPDATE users SET parola = ? where id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $parolaHash, $userId);
        if(!$stmt->execute())
        {
            http_response_code(500);
            $response = ['message' => "Eroare la interogarea in baza de date"];
            echo json_encode($response);
            exit;
        }
        if ($stmt->affected_rows > 0) {
            $successMessage = 'Registration successful!';
            header("Location: ../Tehnologii-web/home/home.php");
        }
    }
}
?>