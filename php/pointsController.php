<?php

require_once 'database.php';
require_once("verifyConnection.php");

class Points
{
    private $db;
    private $conn;

    function __construct()
    {
        $this->db = new Database();
        $this->conn = $this->db->connect();
    }

    function getPoints()
    { //returneaza punctele utilizatorului conectat, la categoria specificata in header

        $category = $_SERVER['HTTP_CATEGORY'];

        $user = UserSession::getInstance();
        $sessionId = $user->getId();

        $punctaj = null;
        //query care returneaza punctele de la acea categorie
        $query = "SELECT punctaj_quiz FROM punctaje WHERE id_user = ? and categorie = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('ss', $sessionId, $category);
        if (!$stmt->execute()) {
            $this->db->databaseError();
        }
        $stmt->bind_result($punctaj);
        $stmt->fetch();

        if ($punctaj === null) {
            http_response_code(404);
            $response = [
                'msg' => 'Punctajul este null'
            ];
        } else {
            http_response_code(200);
            //formarea raspunsului => numarul de puncte
            $response = [
                'punctaj' => $punctaj
            ];
        }
        //returnarea raspunsului sub forma de json
        echo json_encode($response);
        $stmt->close();
    }

    function addPoints()
    { //adaugarea numarului de puncte la categoria primita in header

        $puncte = $_SERVER['HTTP_PUNCTE'];
        $category = $_SERVER['HTTP_CATEGORY'];

        $user = UserSession::getInstance();
        $sessionId = $user->getId();

        //query care updateaza numarul de puncte pentru o anumita categorie
        $query = "UPDATE punctaje set punctaj_quiz = ? where id_user = ? and categorie = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('iss', $puncte, $sessionId, $category);
        if (!$stmt->execute()) {
            $this->db->databaseError();
        }

        //mesaj de succes/esec
        if ($stmt->affected_rows > 0) {
            $response = [
                'success' => true,
                'message' => 'Puncte adaugate'
            ];
            http_response_code(200);
        } else {
            $response = [
                'success' => false,
                'message' => 'Puncte nu au putut fi adaugate'
            ];
            http_response_code(500);
        }
        //returnarea raspunsului
        echo json_encode($response);

        //inchiderea conexiunilor
        $stmt->close();
    }


    function getAllCategories()
    {
        $user = UserSession::getInstance();
        $sessionId = $user->getId();

        $categorie = null;
        $punctaj = null;
        $query = "SELECT categorie, punctaj_quiz FROM punctaje WHERE id_user = ?";

        //sunt selectate toate categoriile si punctele acestora
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $sessionId);
        if (!$stmt->execute()) {
            $this->db->databaseError();
        }
        $stmt->bind_result($categorie, $punctaj);

        //este format un array care contine toate categoriile
        $response = array();
        while ($stmt->fetch()) {
            $res = array(
                'categorie' => $categorie,
                'punctaj' => $punctaj
            );
            $response[] = $res;
        }

        if (empty($response)) {
            http_response_code(404);
            $response = [
                'msg' => "Nu exista categorii disponibile"
            ];
        } else {
            http_response_code(200);
        }

        echo json_encode($response);

        $stmt->close();
    }
}
?>