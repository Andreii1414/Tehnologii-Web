<?php

function addPointsCategory()
{//adauga puncte in baza de date la o categorie primita in header (numarul de puncte este primit in acelasi mod)
    $puncte = $_SERVER['HTTP_PUNCTE'];
    $category = $_SERVER['HTTP_CATEGORY'];

    $db = new Database();
    $conn = $db->connect();

    session_start();
    $sessionId = $_SESSION['id'];

    //query care updateaza numarul de puncte din baza de date pentru acea categorie, pentru user-ul conectat
    $query = "UPDATE punctaje set punctaj_categorie = ? where id_user = ? and categorie = ?";
    $stmt = $conn -> prepare($query);
    $stmt->bind_param('iss',$puncte, $sessionId, $category);
    $stmt->execute();

    //punctele au fost adaugate
    if($stmt->affected_rows > 0)
    {
        $response = [
            'success' => true,
            'message' => 'Puncte adaugate'
        ];
    }
    else{//punctele nu au putut fi adaugate
        $response = [
            'success' => false,
            'message' => 'Puncte nu au putut fi adaugate'
        ];
    }
    //returnarea json-ului cu mesajul de succes/esec
    echo json_encode($response);
    
    //inchiderea conexiunilor
    $stmt->close();
    $conn->close();
}
?>