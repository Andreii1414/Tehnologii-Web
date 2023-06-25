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
            $stmt->execute();
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

            $ipAdresss = $_SERVER['REMOTE_ADDR'];

            
            $count = 0;
            $sql = "SELECT count(*) FROM userip where ip_user = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $ipAdresss);
            $stmt->execute();
            $stmt->bind_result($count);
            $stmt->fetch();
            $stmt->close();

            if($count > 0){
                $updateIp = "UPDATE userip SET acc_count = acc_count + 1 WHERE ip_user = ?";
                $stmt = $conn->prepare($updateIp);
                $stmt->bind_param("s", $ipAdresss);
                $stmt->execute();
                $stmt->close();
            }
            else{
                $insertIp = "INSERT INTO userip (ip_user, acc_count) VALUES ( ?, 1)";
                $stmt = $conn->prepare($insertIp);
                $stmt->bind_param("s", $ipAdresss);
                $stmt->execute();
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
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $successMessage = 'Registration successful!';
            header("Location: ../Tehnologii-web/home/home.php");
        }
    }
}
?>