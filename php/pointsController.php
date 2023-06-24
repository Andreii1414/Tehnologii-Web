<?php

require_once 'database.php';

class Points
{
    private $db;
    private $conn;

    function __construct(){
        $this->db = new Database();
        $this->conn = $this->db->connect();
    }

    function getPoints()
    { //returneaza punctele utilizatorului conectat, la categoria specificata in header

        $category = $_SERVER['HTTP_CATEGORY'];

        session_start();
        $sessionId = $_SESSION['id'];

        $punctaj = null;
        //query care returneaza punctele de la acea categorie
        $query = "SELECT punctaj_quiz FROM punctaje WHERE id_user = ? and categorie = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('ss', $sessionId, $category);
        $stmt->execute();
        $stmt->bind_result($punctaj);
        $stmt->fetch();

        //formarea raspunsului => numarul de puncte
        $response = [
            'punctaj' => $punctaj
        ];

        //returnarea raspunsului sub forma de json
        echo json_encode($response);

        $stmt->close();
    }

    function addPoints()
    { //adaugarea numarului de puncte la categoria primita in header

        $puncte = $_SERVER['HTTP_PUNCTE'];
        $category = $_SERVER['HTTP_CATEGORY'];

        session_start();
        $sessionId = $_SESSION['id'];

        //query care updateaza numarul de puncte pentru o anumita categorie
        $query = "UPDATE punctaje set punctaj_quiz = ? where id_user = ? and categorie = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('iss', $puncte, $sessionId, $category);
        $stmt->execute();

        //mesaj de succes/esec
        if ($stmt->affected_rows > 0) {
            $response = [
                'success' => true,
                'message' => 'Puncte adaugate'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Puncte nu au putut fi adaugate'
            ];
        }
        //returnarea raspunsului
        echo json_encode($response);

        //inchiderea conexiunilor
        $stmt->close();
    }


    function getAllCategories()
    {

        session_start();
        $sessionId = $_SESSION['id'];

        $categorie = null;
        $punctaj = null;
        $query = "SELECT categorie, punctaj_quiz FROM punctaje WHERE id_user = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $sessionId);
        $stmt->execute();
        $stmt->bind_result($categorie, $punctaj);

        $response = array();
        while ($stmt->fetch()) {
            $res = array(
                'categorie' => $categorie,
                'punctaj' => $punctaj
            );
            $response[] = $res;
        }

        echo json_encode($response);

        $stmt->close();
    }
}
?>