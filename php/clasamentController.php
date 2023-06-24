<?php
class Clasament
{
    private $db;
    private $conn;
    private $loc;
    private $punctaj;

    function __construct(){
        $this->db = new Database();
        $this->conn = $this->db->connect();
        $this->loc = null;
        $this->punctaj = null;
    }

    function first20()
    {

        //query care returneaza numele si punctajul primilor 20 de useri
        $query = "select nume, sum(p.punctaj_quiz + p.punctaj_categorie) as punctaj 
              from users u join punctaje p on u.id = p.id_user
              group by nume, u.id order by punctaj desc
              LIMIT 20;";

        $rs = $this->conn->query($query);

        //verific ca a functionat query-ul 
        if ($rs) {
            $rows = [];
            //iau fiecare linie din rs
            while ($row = $rs->fetch_assoc()) {
                $rows[] = $row;
            }

            //returnez un json cu userii si punctajul
            echo json_encode($rows);
        } else {
            echo "Error: " . $query . $this->conn->error;
        }

    }

    function puncteleTale()
    {

        session_start();
        $sessionId = $_SESSION['id'];


        //extrag punctajul si pozitia user-ului conectat in clasament
        $query = "SELECT (SELECT sum(p.punctaj_quiz + p.punctaj_categorie) from punctaje p
              WHERE p.id_user = ?) as punctaj,
             (SELECT COUNT(*) + 1
              FROM (
                    SELECT id_user, sum(punctaj_quiz + punctaj_categorie) as total
                    FROM punctaje group by id_user
                    )AS ranking
                    WHERE total > 
                    (SELECT sum(punctaj_quiz + punctaj_categorie)
                    FROM punctaje where id_user = ?)) as loc;";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('ss', $sessionId, $sessionId);
        $stmt->execute();
        $stmt->bind_result($this->punctaj, $this->loc);
        $stmt->fetch();

        //formarea raspunsului
        $response = [
            'punctaj' => $this->punctaj,
            'loc' => $this->loc
        ];
        //returnarea unui json ce contine raspunsul
        echo json_encode($response);

        $stmt->close();
    }
}

?>