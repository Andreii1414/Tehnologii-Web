<?php
require_once("verifyConnection.php");
class Mediu
{

    private $db;
    private $conn;

    function __construct(){
        $this->db = new Database();
        $this->conn = $this->db->connect();
    }

    function addPointsCategory()
    { //adauga puncte in baza de date la o categorie primita in header (numarul de puncte este primit in acelasi mod)
        $puncte = $_SERVER['HTTP_PUNCTE'];
        $category = $_SERVER['HTTP_CATEGORY'];

        $user = UserSession::getInstance();
        $sessionId = $user->getId();

        //query care updateaza numarul de puncte din baza de date pentru acea categorie, pentru user-ul conectat
        $query = "UPDATE punctaje set punctaj_categorie = ? where id_user = ? and categorie = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('iss', $puncte, $sessionId, $category);
        $stmt->execute();

        //punctele au fost adaugate
        if ($stmt->affected_rows > 0) {
            $response = [
                'success' => true,
                'message' => 'Puncte adaugate'
            ];
            http_response_code(200);
        } else { //punctele nu au putut fi adaugate
            $response = [
                'success' => false,
                'message' => 'Puncte nu au putut fi adaugate'
            ];
            http_response_code(400);
        }
        //returnarea json-ului cu mesajul de succes/esec
        echo json_encode($response);

        //inchiderea conexiunilor
        $stmt->close();
    }
}
?>