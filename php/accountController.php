<?php
class Account
{
    private $db;
    private $conn;
    private $punctaj;
    private $nume;
    private $email;
    private $created_at;

    function __construct(){
        $this->db = new Database();
        $this->conn = $this->db->connect();
        $this->punctaj = null;
        $this->nume = null;
        $this->email = null;
        $this->created_at = null;
    }



    function accountInfo()
    {
        session_start();
        $sessionId = $_SESSION['id'];

        //query pentru a returna datele contului, pentru id-ul contului care este conectat
        $query = "SELECT nume, email, sum(punctaj_quiz + punctaj_categorie), created_at FROM users u
        join punctaje p on p.id_user = u.id WHERE id_user = ? GROUP BY nume, email, u.id";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $sessionId);
        $stmt->execute();
        $stmt->bind_result($this->nume, $this->email, $this->punctaj, $this->created_at);
        $stmt->fetch();

        //formarea raspunsului
        $response = [
            'nume' => $this->nume,
            'email' => $this->email,
            'punctaj' => $this->punctaj,
            'created_at' => $this->created_at
        ];

        //returnareea json-ului care contine informatiile
        echo json_encode($response);

        $stmt->close();
    }
}
?>