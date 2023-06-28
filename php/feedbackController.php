<?php
require_once("verifyConnection.php");
class Feedback
{
    private $db;
    private $conn;
    private $nume;
    private $mesaj;
    private $data;
    private $rating;

    function __construct()
    {
        $this->db = new Database();
        $this->conn = $this->db->connect();
        $this->nume = null;
        $this->mesaj = null;
        $this->data = null;
        $this->rating = null;
    }
    function addFeedback()
    {
        //preluarea mesajului si a rating-ului introdus de utilizator
        $mesaj = $_POST['text'];
        $rating = isset($_POST['rating']) ? $_POST['rating'] : 0;

        $user = UserSession::getInstance();
        $sessionId = $user->getId();

        $count = 0;
        $stmt2 = $this->conn->prepare("SELECT count(*) FROM feedback where id_user = ?");
        $stmt2->bind_param("i", $sessionId);
        if(!$stmt2->execute())
        {
           $this->db->databaseError();
        }
        $stmt2->bind_result($count);
        $stmt2->fetch();
        $stmt2->close();

        if ($count < 3) {
            //query care adauga feedback-ul utilizatorului in baza de date
            $query = "INSERT INTO feedback (id_user, mesaj, rating) VALUES (?, ?, ?);";

            if (!empty($mesaj) && $sessionId != null) {
                $stmt = $this->conn->prepare($query);
                $stmt->bind_param("isi", $sessionId, $mesaj, $rating);
                if(!$stmt->execute())
                {
                    $this->db->databaseError();
                }
                http_response_code(200);
                $response = "Feedback adaugat";
                echo json_encode($response);
            } else {
                http_response_code(400);
                $response = "Feedback-ul nu a adaugat";
                echo json_encode($response);
            }
        }
        header("Location: ../Tehnologii-web/about/about.php");
    }

    function getAllFeedback()
    {
        //query care returneaza tot feedback-ul din baza de date
        $query = "select nume, mesaj, f.created_at, rating from feedback f join users u on u.id = f.id_user order by f.created_at;";

        $stmt = $this->conn->prepare($query);
        if(!$stmt->execute())
        {
            $this->db->databaseError();
        }
        $stmt->bind_result($this->nume, $this->mesaj, $this->data, $this->rating);

        $response = array();
        //este creat un array pentru a putea returna raspunsul
        while ($stmt->fetch()) {
            $res = array(
                'nume' => $this->nume,
                'mesaj' => $this->mesaj,
                'data' => $this->data,
                'rating' => $this->rating
            );
            $response[] = $res;
        }

        if (empty($response)) {
            http_response_code(404);
            $response = "Nu exista feedback";
            echo json_encode($response);
        } else {
            //raspunsul este returnat sub forma de json
            http_response_code(200);
            echo json_encode($response);
        }
        $stmt->close();
    }
}
?>